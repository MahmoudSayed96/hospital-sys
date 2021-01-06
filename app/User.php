<?php

namespace App;

use App\Models\City;
use App\Models\Department;
use App\Models\Governorate;
use App\Models\Specialist;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laratrust\Traits\LaratrustUserTrait;

class User extends Authenticatable
{
    use LaratrustUserTrait;
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'username', 'email', 'password', 'avatar', 'date_of_birth', 'phone', 'governorate_id', 'city_id', 'department_id', 'specialist_id', 'degree', 'status', 'gender', 'bio', 'salary'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // Accessors.
    public function setPasswordAttribute($value) {
        $this->attributes['password'] = bcrypt($value);
    }

    // Active records.
    public function scopeActive($query) {
        return $query->where('status' , 1);
    }

    // InActive records.
    public function scopeInActive($query) {
        return $query->where('status' , 0);
    }

    // Selection.
    public function scopeSelection($query) {
        return $query->select([
            'id', 'name', 'username', 'email', 'avatar', 'date_of_birth', 'phone', 'governorate_id', 'city_id', 'department_id', 'specialist_id', 'degree', 'status', 'gender', 'bio', 'salary'
        ]);
    }

    /**
     * Get status attribute value.
     */
    public function getStatusAttribute($value){
        return $value;
    }

    /**
     * Get status value.
     */
    public function getStatus() {
        return $this->status == 1 ? '<strong class="px-3 py-1 badge alert-success border border-success">Active</strong>' : '<strong class="px-3 py-1 badge border border-danger alert-danger">InActive</strong>';
    }

    /**
     * Get avatar attribute value.
     */
    public function getAvatarAttribute($value){
        return isset($this->attributes['avatar']) ? $this->attributes['avatar'] : null;
    }

    /**
     * Get avatar image value.
     */
    public function getAvatar() {
        return isset($this->attributes['avatar']) != null ? asset($this->attributes['avatar']) : asset('uploads/images/user-avatar.jpg');;
    }

    /**
     * Get default profile pic path name.
     */
    public function getDefaultAvatarPath() {
        return 'uploads/images/user-avatar.jpg';
    }

    /**
     * Get gender.
     */
    public function getGenderAttribute($value) {
        return $value;
    }

    /**
     * Get value of blood group attribute.
     */
    public function getGender() {
        return ($this->attributes['gender'] == 1) ? 'Male' : 'Female';
    }

    // Relations.

    /**
     * Get user department.
     */
    public function department() {
        return $this->belongsTo(Department::class);
    }

    /**
     * Get user department.
     */
    public function specialist() {
        return $this->belongsTo(Specialist::class);
    }

    /**
     * Get user governorate.
     */
    public function governorate() {
        return $this->belongsTo(Governorate::class);
    }

    /**
     * Get user city.
     */
    public function city() {
        return $this->belongsTo(City::class);
    }

}
