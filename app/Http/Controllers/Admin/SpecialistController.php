<?php

namespace App\Http\Controllers\Admin;

use App\Exports\SpecialistsExport;
use App\Http\Requests\Admin\Specialist\StoreSpecialistRequest;
use App\Http\Requests\Admin\Specialist\UpdateSpecialistRequest;
use App\Models\Specialist;

class SpecialistController extends BaseController
{
    protected $model_folder = 'specialists';

    public function __construct(Specialist $model, SpecialistsExport $model_export)
    {
        parent::__construct($model, $model_export);
    }

    public function store(StoreSpecialistRequest $request){
        try {
            $this->model->create([
                'name'  => $request->name,
            ]);
            return $this->redirectIfSuccess(admin_route_name($this->model_folder . '.index'), $request->name . ' Created Successfully.');
        } catch (\Exception $ex) {
            return $this->redirectIfError(admin_route_name($this->model_folder . '.index'));
        }
    }

    public function update(UpdateSpecialistRequest $request){
        try {
            $row = $this->model->find($request->id);
            if(!$row) {
                return $this->redirectIfNotFound(admin_route_name($this->model_folder . '.index'));
            }
            $row->update([
                'name' => $request->name,
            ]);
            return $this->redirectIfSuccess(admin_route_name($this->model_folder . '.index'), $row->name . ' Updated Successfully.');
        } catch (\Exception $ex) {
            return $this->redirectIfError(admin_route_name($this->model_folder . '.index'));
        }
    }
}
