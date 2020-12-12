<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Traits\UploadImagesTrait;
use Illuminate\Http\Request;

class BaseController extends Controller
{
    use UploadImagesTrait;
    
    protected $model = null;
    protected $admin_folder = 'admin';
    protected $model_folder = '';
    protected $view_name = '';

    public function __construct($model)
    {
        $this->model = $model;
    }

    public function index()
    {
        $view = $this->get_view();
        return view($view);
    }

    protected function get_view() {
        if(empty($this->model_folder)) {
            return $this->admin_folder . '.' . $this->view_name;
        }
        return $this->admin_folder . '.' . $this->model_folder .'.' . $this->view_name;
    }
}
