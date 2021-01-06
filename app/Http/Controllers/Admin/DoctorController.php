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
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Yajra\DataTables\Facades\DataTables;
class DoctorController extends BaseController
{
    protected $model_folder = 'doctors';
    protected $route_name = 'doctors';

    public function __construct(User $model, DoctorExport $model_export)
    {
        parent::__construct($model, $model_export);
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

    /**
     * Process datatables ajax request.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function getData(Request $request)
    {
        $with = $this->with();
        $record = $this->model->with($with)->select([
            'id', 'name', 'username', 'email', 'avatar', 'status', 'department_id', 'specialist_id'
        ])->whereRoleIs(['doctor'])->latest();
       $dataTables = DataTables::of($record)
            ->addColumn('name', function($row){
                return '<a class="d-flex align-items-center" href="#"><img src="'.$row->getAvatar().'" class="img-fluid img-thumbnail rounded-circle mr-1" width="50"height="50" alt="'.$row->username.'" style="min-width:50px;min-height:50px;"><span>'.$row->name.'</span></a>';
            })
            ->addColumn('status', function($row){
                return $row->getStatus();
            })
            ->addColumn('department', function($row){
                return $row->department->name;
            })
            ->addColumn('specialist', function($row){
                return $row->specialist->name;
            })
            ->addColumn('actions', function($row){
                return $this->renderActions($row);
            })
            ->rawColumns(['name', 'status', 'department', 'specialist', 'actions']);
        return $dataTables->make(true);
    }

    public function create() {
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

    public function edit(int $id) {
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

    /**
     * Render actions html.
     */
    private function renderActions($row) {
        $view = $this->get_view('actions');
        return view($view, compact('row'))->render();
    }
}
