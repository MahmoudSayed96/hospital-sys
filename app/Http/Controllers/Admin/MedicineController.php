<?php

namespace App\Http\Controllers\Admin;

use App\Exports\MedicineExport;
use App\Http\Requests\Admin\Medicine\StoreMedicineRequest;
use App\Http\Requests\Admin\Medicine\UpdateMedicineRequest;
use App\Models\Medicine;

class MedicineController extends BaseController
{
    protected $model_folder = 'medicines';
    protected $route_name = 'medicines';

    public function __construct(Medicine $model, MedicineExport $model_export)
    {
        parent::__construct($model, $model_export);
    }

    public function store(StoreMedicineRequest $request){
        try {
            $this->model->create([
                'name'            => $request->name,
                'expire_date'     => $request->expire_date,
                'quantity'        => $request->quantity,
                'alert_qty'       => $request->alert_qty,
                'price'           => $request->price,
                'status'          => $request->status,
                'description'     => $request->description,
            ]);
            return $this->redirectIfSuccess(admin_route_name($this->route_name . '.index'), $request->name . ' Created Successfully.');
        } catch (\Exception $ex) {
            return $this->redirectIfError(admin_route_name($this->route_name . '.create'), null);
        }
    }

    public function update(UpdateMedicineRequest $request, int $id){
        try {
            $row = $this->model->find($request->id);
            if(!$row) {
                return $this->redirectIfNotFound(admin_route_name($this->route_name . '.index'));
            }
            $row->update([
                'name'            => $request->name,
                'expire_date'     => $request->expire_date,
                'quantity'        => $request->quantity,
                'alert_qty'       => $request->alert_qty,
                'price'           => $request->price,
                'status'          => $request->status,
                'description'     => $request->description,
            ]);
            return $this->redirectIfSuccess(admin_route_name($this->route_name . '.index'), $row->name . ' Updated Successfully.');
        } catch (\Exception $ex) {
            return $ex->getMessage();
            return $this->redirectIfError(admin_route_name($this->route_name . '.index'));
        }
    }

}
