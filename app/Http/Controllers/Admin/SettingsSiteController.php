<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\Settings\UpdateSettingsSiteRequest;
use App\Models\Setting;

class SettingsSiteController extends BaseController
{
    protected $model_folder = 'settings';

    public function __construct(Setting $model)
    {
        parent::__construct($model);
    }

    public function index()
    {
        $row = $this->model::first();
        return view('admin.settings.index', compact('row'));
    }

    public function update_site(UpdateSettingsSiteRequest $request) {
        dd($request->all());
    }
}
