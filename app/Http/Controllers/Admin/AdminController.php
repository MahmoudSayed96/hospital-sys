<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Governorate;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    protected $view_name = 'welcome';
    
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index() {
        return view('admin.welcome');
    }

    public function getGovCities(Request $request) {
        $gov = Governorate::find($request->id);
        if(!$gov) {
            return response()->json([
                'status' => 404,
                'message' => 'This governorate not found'
            ]);
        }
        $cities = $gov->cities;
        return response()->json([
            'status' => 200,
            'data' => $cities
        ]);
    }

}
