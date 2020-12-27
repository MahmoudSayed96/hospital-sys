<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Traits\JsonResponseTrait;
use App\Traits\RedirectMessagesTrait;
use App\Traits\UploadImagesTrait;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Maatwebsite\Excel\Facades\Excel;
use Maatwebsite\Excel\Concerns\Exportable;

class BaseController extends Controller
{
    use UploadImagesTrait,RedirectMessagesTrait, JsonResponseTrait;
    
    protected $model;
    protected $model_export;
    protected $views_folder = 'admin';
    protected $model_folder = '';
    protected $view_name;

    public function __construct(Model $model, $model_export)
    {
        
        $this->model = $model;
        $this->model_export = $model_export;
    }

    public function index()
    {
        $view = $this->get_view('index');
        $rows = $this->model::latest()->paginate(RouteServiceProvider::PAGINATION_LIMIT);
        return view($view, compact('rows'));
    }

    public function create()
    {
        $view = $this->get_view('create');
        return view($view);
    }

    public function edit(int $id)
    {
        try {
            $row = $this->model->find($id);
            if(!$row) {
                return $this->redirectIfNotFound(admin_route_name($this->model_folder . '.index'));
            }
            $view = $this->get_view('edit');
            return view($view, compact('row'));
        } catch (\Exception $ex) {
            return $this->redirectIfError(admin_route_name($this->model_folder . '.index'));
        }
    }
    public function show(int $id)
    {
        try {
            $row = $this->model->find($id);
            if(!$row) {
                return $this->redirectIfNotFound(admin_route_name($this->model_folder . '.index'));
            }
            $view = $this->get_view('show');
            return view($view, compact('row'));
        } catch (\Exception $ex) {
            return $this->redirectIfError(admin_route_name($this->model_folder . '.index'));
        }
    }

    public function destroy($id) {
        try {
            $row = $this->model->find($id);
            if(!$row) {
                return $this->redirectIfNotFound(admin_route_name($this->model_folder . '.index'));
            }
            $row->delete();
            return $this->redirectIfSuccess(admin_route_name($this->model_folder . '.index'),'Data Deleted Successfully.');
        } catch (\Exception $ex) {
            return $this->redirectIfError(admin_route_name($this->model_folder . '.index'));
        }
    }

    protected function get_view($view_name) {
        if(empty($this->model_folder)) {
            return $this->views_folder . '.' . $this->view_name;
        }
        return $this->views_folder . '.' . $this->model_folder .'.' . $view_name;
    }

    /**
     * Export as XLSX sheet.
     */
    public function exportAsXlsx() {
        return Excel::download($this->model_export, $this->getExportFileName('xlsx'));
    }

    /**
     * Export as CSV sheet.
     */
    public function exportAsCsv() {
        return Excel::download($this->model_export, $this->getExportFileName('csv'));    
    }

    /**
     * Get export file name.
     */
    protected function getExportFileName($format = 'xlsx') {
        return strtolower($this->get_model() . 's') . '_' . Carbon::now()->format('Y-m-d') . '.' . $format;
    }

    /**
     * Get model name.
     */
    protected function get_model() {
        $obj = get_class($this->model);
        $arr = explode('\\', $obj);
        $length = sizeof($arr);
        return $arr[$length - 1];
    }
}
