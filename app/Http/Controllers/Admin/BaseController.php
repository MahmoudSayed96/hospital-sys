<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Traits\RedirectMessagesTrait;
use App\Traits\UploadImagesTrait;
use Illuminate\Database\Eloquent\Model;

class BaseController extends Controller
{
    use UploadImagesTrait,RedirectMessagesTrait;
    
    protected $model;
    protected $views_folder = 'admin';
    protected $model_folder = '';
    protected $view_name;

    public function __construct(Model $model)
    {
        
        $this->model = $model;
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

    protected function get_view($view_name) {
        if(empty($this->model_folder)) {
            return $this->views_folder . '.' . $this->view_name;
        }
        return $this->views_folder . '.' . $this->model_folder .'.' . $view_name;
    }

    public function destroy($id) {
        try {
            $row = $this->model->find($id);
            if(!$row) {
                return $this->redirectIfNotFound(admin_route_name('departments.index'));
            }
            $row->delete();
            return $this->redirectIfSuccess(admin_route_name('departments.index'),'Data Deleted Successfully.');
        } catch (\Exception $ex) {
            return $this->redirectIfError(admin_route_name('departments.index'));
        }
    }
}
