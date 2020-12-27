<?php

namespace App\Http\Controllers\Admin;

use App\Exports\StockExport;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Stock\StoreStockRequest;
use App\Http\Requests\Admin\Stock\UpdateStockRequest;
use App\Models\Stock;

class StockController extends BaseController
{
    protected $model_folder = 'stocks';
    protected $route_name = 'stocks';

    public function __construct(Stock $model, StockExport $model_export)
    {
        parent::__construct($model, $model_export);
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
}
