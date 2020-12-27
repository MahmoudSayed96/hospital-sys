<?php

namespace App\Http\Controllers\Admin;

use App\Exports\OrderStockExport;
use App\Http\Requests\Admin\OrderStock\StoreOrderStockRequest;
use App\Models\OrderStock;
use App\Models\Stock;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderStockController extends BaseController
{
    protected $model_folder = 'orders_stocks';
    protected $route_name = 'orders_stocks';

    public function __construct(OrderStock $model, OrderStockExport $model_export)
    {
        parent::__construct($model, $model_export);
    }

    public function create() {
        try {
            $view = $this->get_view('create');
            $stocks = Stock::all();
            return view($view, compact('stocks'));
        } catch (\Exception $ex) {
            return $this->redirectIfError(admin_route_name($this->route_name . '.create'));
        }
    }

    public function store(StoreOrderStockRequest $request) {
        try {
            $stock = Stock::find($request->stock_id);
            if(!$stock) {
                return $this->redirectIfNotFound(admin_route_name($this->route_name . '.create'));
            }
            
            // Check if action entry or delivery.
            DB::beginTransaction();
            if($request->action == 0) {
                // Entery.
                $quantity = $stock->quantity + $request->quantity;
                $stock->update([
                    'quantity'  => $quantity,
                    'type'      => $request->type,
                ]);
            } else {
                if($stock->quantity >= $request->quantity) {
                    // Delivery.
                    $qt = $stock->quantity - $request->quantity;
                    $stock->update([
                        'quantity'  => $qt,
                        'type'      => $request->type,
                    ]);
                }else {
                    return $this->redirectIfError(admin_route_name($this->route_name . '.create'), 'Quantity not available.'); 
                }
            }
            // Store order stock.
            $this->model->create([
                'action'    => $request->action,
                'type'      => $request->type,
                'quantity'  => $request->quantity,
                'stock_id' => $request->stock_id,
            ]);
            DB::commit();
            return $this->redirectIfSuccess(admin_route_name($this->route_name . '.create'), 'Data Updated Successfully.');
        } catch (\Exception $ex) {
            DB::rollback();
            return $this->redirectIfError(admin_route_name($this->route_name . '.create'));
        }
    }

    public function getStock(Request $request) {
        try {
            $row = Stock::find($request->id);
            if(!$row) {
                return $this->notFoundResponse();
            }
            return $this->jsonResponse($row);
        } catch (\Exception $ex) {
            return $this->serverErrorResponse([], $ex->getMessage());
        }
    }
}
