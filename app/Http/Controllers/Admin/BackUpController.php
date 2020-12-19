<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Traits\RedirectMessagesTrait;
use Illuminate\Support\Facades\File;

class BackUpController extends Controller
{
    use RedirectMessagesTrait;
    /**
     * @return object
     */
    public static function getBackupFiles() {
        try{
            $backupFiles = File::allFiles(storage_path('app/backups/'.config('app.name')));
            return $backupFiles;
        } catch (\Exception $ex) {
            return redirect()->route(admin_route_name('settings.index'))->with([
                'message' => 'Sorry, An error occurs please try again.',
                'messageType' => 'error'
            ]);
        }
    }

    /**
     * @param $file
     */
    public function download($file) {
        try {
            $file_path = storage_path('app/backups/'.config('app.name') . '/' . $file);
            if(File::exists($file_path)) {
                return response()->download($file_path);
            }else {
                return $this->redirectIfNotFound(admin_route_name('settings.index'));
            }
        } catch (\Exception $ex) {
            return $this->redirectIfError(admin_route_name('settings.index'));
        }
    }

    /**
     * @param $file
     */
    public function destroy($file) {
        try {
            $file_path = storage_path('app/backups/'.config('app.name') . '/' . $file);
            if(File::exists($file_path)) {
                File::delete($file_path);
                return $this->redirectIfSuccess(admin_route_name('settings.index'), $file . ' Deleted Successfully');
            }else {
                return $this->redirectIfNotFound(admin_route_name('settings.index'));
            }
        } catch (\Exception $ex) {
            return $this->redirectIfError(admin_route_name('settings.index'));
        }
    }
}
