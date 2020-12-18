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
}