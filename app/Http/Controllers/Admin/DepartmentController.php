<?php

namespace App\Http\Controllers\Admin;

use App\Exports\DepartmentsExport;
use App\Http\Requests\Admin\Department\StoreDepartmentRequest;
use App\Http\Requests\Admin\Department\UpdateDepartmentRequest;
use App\Models\Department;
use Yajra\DataTables\Facades\DataTables;

class DepartmentController extends BaseController
{
    protected $model_folder = 'departments';
    protected $route_name = 'departments';

    public function __construct(Department $model, DepartmentsExport $model_export)
    {
        parent::__construct($model, $model_export);
    }

    
    /**
     * Process datatables ajax request.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function getData()
    {
        $record = $this->model->selection()->latest();
        return DataTables::eloquent($record)
                ->addColumn('status', function($row){
                    return $row->status == 1 ? '<strong class="px-3 py-1 badge alert-success border border-success">'.$row->getStatus().'</strong>' : '<strong class="px-3 py-1 badge border border-danger alert-danger">'.$row->getStatus().'</strong>';;
                })              
                ->addColumn('actions', function($row){
                    return $this->renderActions($row);
                })
                ->rawColumns(['status', 'actions'])
                ->toJson();
    }

    public function store(StoreDepartmentRequest $request){
        try {
            $this->model->create([
                'name'          => $request->name,
                'description'   => $request->description,
                'status'        => $request->status,
            ]);
            return $this->redirectIfSuccess(admin_route_name($this->model_folder . '.index'), $request->name . ' Created Successfully.');
        } catch (\Exception $ex) {
            return $this->redirectIfError(admin_route_name($this->model_folder . '.create'), null);
        }
    }

    public function update(UpdateDepartmentRequest $request){
        try {
            $row = $this->model->find($request->id);
            if(!$row) {
                return $this->redirectIfNotFound(admin_route_name($this->model_folder . '.index'));
            }
            $row->update([
                'name'          => $request->name,
                'description'   => $request->description,
                'status'        => $request->status,
            ]);
            return $this->redirectIfSuccess(admin_route_name($this->model_folder . '.index'), $row->name . ' Updated Successfully.');
        } catch (\Exception $ex) {
            return $this->redirectIfError(admin_route_name($this->model_folder . '.index'));
        }
    }

    /**
     * Render actions html.
     */
    private function renderActions($row) {
        $view = $this->get_view('actions');
        return view($view, compact('row'))->render();
    }
    
}
