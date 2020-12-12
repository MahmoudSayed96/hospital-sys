<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class AdminController extends BaseController
{
    protected $model_folder = '';
    protected $view_name = 'welcome';
    
    public function __construct(User $model)
    {
        $this->middleware('auth');
    }
}
