<?php

namespace App\Http\Controllers\Admin;

use App\Exports\DoctorExport;
use App\Http\Requests\Admin\Doctor\StoreDoctorRequest;
use App\Http\Requests\Admin\Doctor\UpdateDoctorRequest;
use App\Models\Department;
use App\Models\Governorate;
use App\Models\Specialist;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class DoctorController extends BaseController
{
    protected $model_folder = 'doctors';
    protected $route_name = 'doctors';

    public function __construct(User $model, DoctorExport $model_export)
    {
        parent::__construct($model, $model_export);
    }

    public function index() {
        $view = $this->get_view('index');
        $rows = $this->model;
        $with = $this->with(); // for relations
        $rows = $this->model::whereRoleIs(['doctor'])->with($with)->latest()->paginate(RouteServiceProvider::PAGINATION_LIMIT);
        return view($view, compact('rows'));
    }

    public function gallery(Request $request) {
        $view = $this->get_view('gallery');
        $rows = $this->model;
        $with = $this->with(); // for relations
        $rows = $this->model::whereRoleIs(['doctor'])->with($with)->latest()->paginate(6);
        
        if ($request->ajax()) {
            $view = $this->get_view('data');
            $view = view($view, compact('rows'))->render();
            return response()->json(['html'=>$view]);
        }
        return view($view, compact('rows'));
    }

    public function create()
    {
        $view = $this->get_view('create');
        $govs = Governorate::all();
        $departments = Department::all();
        $specialists = Specialist::all();
        return view($view, compact('govs', 'departments', 'specialists'));
    }

    public function store(StoreDoctorRequest $request){
        try {
            $avatar = null;
            if($request->has('avatar')) {
                $avatar = $this->uploadImage('users', $request->avatar);
            }
            $user = $this->model->create([
                'name'              => $request->name,
                'username'          => $request->username,
                'email'             => $request->email, 
                'password'          => $request->password,
                'avatar'            => $avatar, 
                'date_of_birth'     => $request->date_of_birth,
                'phone'             => $request->phone, 
                'governorate_id'    => $request->governorate_id, 
                'city_id'           => $request->city_id,
                'department_id'     => $request->department_id,
                'specialist_id'     => $request->specialist_id,
                'degree'            => $request->degree, 
                'status'            => $request->status,
                'gender'            => $request->gender, 
                'bio'               => $request->bio, 
                'salary'            => $request->salary,
            ]);
            $user->attachRole('doctor');
            return $this->redirectIfSuccess(admin_route_name($this->route_name . '.index'), $request->name . ' Created Successfully.');
        } catch (\Exception $ex) {
            return $this->redirectIfError(admin_route_name($this->route_name . '.create'), null);
        }
    }

    public function edit(int $id)
    {
        try {
            $row = $this->model->find($id);
            if(!$row) {
                return $this->redirectIfNotFound(admin_route_name($this->route_name . '.index'));
            }
            $view = $this->get_view('edit');
            $govs = Governorate::all();
            $departments = Department::all();
            $specialists = Specialist::all();
            return view($view, compact('row', 'govs', 'departments', 'specialists'));
        } catch(\Exception $ex) {
            return $this->redirectIfError(admin_route_name($this->route_name . '.index'));
        }
    }

    public function update(UpdateDoctorRequest $request, int $id){
        try {
            $row = $this->model->find($request->id);
            if(!$row) {
                return $this->redirectIfNotFound(admin_route_name($this->route_name . '.index'));
            }
            $row->update([
                'name'              => $request->name,
                'username'          => $request->username,
                'email'             => $request->email, 
                'date_of_birth'     => $request->date_of_birth,
                'phone'             => $request->phone, 
                'governorate_id'    => $request->governorate_id, 
                'city_id'           => $request->city_id,
                'department_id'     => $request->department_id,
                'specialist_id'     => $request->specialist_id,
                'degree'            => $request->degree, 
                'status'            => $request->status,
                'gender'            => $request->gender, 
                'bio'               => $request->bio, 
                'salary'            => $request->salary,
            ]);
            // Password handling.
            if($request->password != null) {
                if($request->password != '' && strlen($request->password) >= 8){
                    $row->update([
                        'password' => $request->password
                    ]);
                } else {
                    return Redirect::back()->withErrors(['Password is required and greater than 8 characters.']);
                }
            } 
            // Avatar handling.
            if($request->has('avatar')) {
                $default = $this->model->getDefaultAvatarPath();
                $this->updateImage($request, 'avatar', $row->avatar, $row, 'users', $default);
            }
            return $this->redirectIfSuccess(admin_route_name($this->route_name . '.index'), $row->name . ' Updated Successfully.');
        } catch (\Exception $ex) {
            return $this->redirectIfError(admin_route_name($this->route_name . '.index'));
        }
    }

    public function destroy($id) {
        try {
            $row = $this->model->find($id);
            if(!$row) {
                return $this->redirectIfNotFound(admin_route_name($this->route_name . '.index'));
            }
            $image = $row->avatar;
            $default = $this->model->getDefaultAvatarPath();
            if($image != null && $image != $default) {
                $this->removeImage($image);
            }
            $row->delete();
            return $this->redirectIfSuccess(admin_route_name($this->route_name . '.index'),'Data Deleted Successfully.');
        } catch (\Exception $ex) {
            return $this->redirectIfError(admin_route_name($this->route_name . '.index'));
        }
    }
    /**
     * For relation ships.
     */
    protected function with() {
        return ['department', 'specialist', 'governorate', 'city'];
    }
}
