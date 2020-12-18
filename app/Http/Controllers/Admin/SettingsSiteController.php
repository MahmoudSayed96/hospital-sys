<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\Settings\UpdateSettingsSiteRequest;
use App\Models\Setting;

class SettingsSiteController extends BaseController
{

    public function __construct(Setting $model)
    {
        parent::__construct($model);
    }

    public function index()
    {
        $row = $this->model::first();
        return view('admin.settings.index', compact('row'));
    }

    public function update(UpdateSettingsSiteRequest $request) {
        try {
            $row = $this->model->find($request->id);
            if(!$row) {
                return $this->redirectIfNotFound(admin_route_name('settings.index'));
            }
            $row->update([
                'site_name'             => $request->site_name,
                'site_email'            => $request->site_email,
                'site_address'          => $request->site_address,
                'site_phone'            => $request->site_phone,
                'site_telephone'        => $request->site_telephone,
                'site_fax'              => $request->site_fax,
                'site_facebook'         => $request->site_facebook,
                'site_twitter'          => $request->site_twitter,
                'site_instagram'        => $request->site_instagram,
                'stablish_date'         => $request->stablish_date,
                'status'                => $request->status,
            ]);
            // Update site logo.
            if($request->has('site_logo')) {
                $old_image = $row->getSiteLogo();
                if(isset($old_image) && $old_image != 'uploads/images/settings/hospital-avatar.png') {
                    // Remove old image.
                    $this->removeImage($old_image);
                }
                // Update with new image.
                $new_image = $this->uploadImage('settings', $request->site_logo);
                $row->update([
                    'site_logo' => $new_image
                ]);
            }
            return $this->redirectIfSuccess(admin_route_name('settings.index'), 'Settings Updated Successfully.');
        } catch (\Exception $ex) {
            return $this->redirectIfError(admin_route_name('settings.index'));
        }
    }
}
