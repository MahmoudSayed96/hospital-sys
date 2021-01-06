<?php

namespace App\Http\Controllers\Admin;

use App\Exports\MedicineExport;
use App\Http\Requests\Admin\Medicine\StoreMedicineRequest;
use App\Http\Requests\Admin\Medicine\UpdateMedicineRequest;
use App\Models\Medicine;
use Yajra\DataTables\Facades\DataTables;

class MedicineController extends BaseController
{
    protected $model_folder = 'medicines';
    protected $route_name = 'medicines';

    public function __construct(Medicine $model, MedicineExport $model_export)
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
                ->addColumn('price', function($row){
                    return number_format($row->price, 2);
                })             
                ->addColumn('actions', function($row){
                    return $this->renderActions($row);
                })
                ->rawColumns(['status', 'actions'])
                ->toJson();
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

    /**
     * Render actions html.
     */
    private function renderActions($row) {
        $view = $this->get_view('actions');
        return view($view, compact('row'))->render();
    }

}
