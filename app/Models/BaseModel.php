<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BaseModel extends Model
{
    protected $guarded = [];
    // Active records.
    public function scopeActive($query) {
        return $query->where('status' , 1);
    }

    // InActive records.
    public function scopeInActive($query) {
        return $query->where('status' , 0);
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
        return $this->status == 1 ? 'Active' : 'InActive';
    }

    /**
     * Get avatar attribute value.
     */
    public function getAvatarAttribute($value){
        return isset($this->attributes['avatar']) != null ? asset($value) : asset('uploads/images/default-avatar.jpg');;
    }

    /**
     * Get avatar image value.
     */
    public function getAvatar() {
        return isset($this->attributes['avatar']) ? $this->attributes['avatar'] : null;
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
        return ($this->attributes['gender'] == 0) ? 'Male' : 'Female';
    }

}