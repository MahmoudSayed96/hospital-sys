<?php

namespace App\Http\Controllers\Admin;

use App\Exports\StockExport;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Stock\StoreStockRequest;
use App\Http\Requests\Admin\Stock\UpdateStockRequest;
use App\Models\Stock;
use Yajra\DataTables\Facades\DataTables;

class StockController extends BaseController
{
    protected $model_folder = 'stocks';
    protected $route_name = 'stocks';

    public function __construct(Stock $model, StockExport $model_export)
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
                ->addColumn('type', function($row){
                    return $row->getType();
                })             
                ->addColumn('actions', function($row){
                    return $this->renderActions($row);
                })
                ->rawColumns(['status', 'type', 'actions'])
                ->toJson();
    }

    public function store(StoreStockRequest $request){
        try {
            $this->model->create([
                'name'          => $request->name,
                'serial_no'     => $request->serial_no,
                'quantity'      => $request->quantity,
                'price'         => $request->price,
                'type'          => $request->type,
            ]);
            return $this->redirectIfSuccess(admin_route_name($this->route_name . '.index'), $request->name . ' Created Successfully.');
        } catch (\Exception $ex) {
            return $this->redirectIfError(admin_route_name($this->route_name . '.create'), null);
        }
    }

    public function update(UpdateStockRequest $request){
        try {
            $row = $this->model->find($request->id);
            if(!$row) {
                return $this->redirectIfNotFound(admin_route_name($this->route_name . '.index'));
            }
            $row->update([
                'name'          => $request->name,
                'serial_no'     => $request->serial_no,
                'quantity'      => $request->quantity,
                'price'         => $request->price,
                'type'          => $request->type,
            ]);
            return $this->redirectIfSuccess(admin_route_name($this->route_name . '.index'), $row->name . ' Updated Successfully.');
        } catch (\Exception $ex) {
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
