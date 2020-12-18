<?php

namespace App\Http\Controllers\Admin;

use App\Exports\DepartmentsExport;
use App\Http\Requests\Admin\Department\StoreDepartmentRequest;
use App\Http\Requests\Admin\Department\UpdateDepartmentRequest;
use App\Models\Department;

class DepartmentController extends BaseController
{
    protected $model_folder = 'departments';

    public function __construct(Department $model, DepartmentsExport $model_export)
    {
        parent::__construct($model, $model_export);
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
    
}
