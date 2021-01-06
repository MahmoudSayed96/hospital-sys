<?php

namespace App\Models;

class Specialist extends BaseModel
{
    protected $fillable = ['name'];

    // Relations.
    /**
     * Get doctors department.
     */
    public function users() {
        return $this->hasMany(User::class);
    }

    // Selection.
    public function scopeSelection($query) {
        return $query->select(['id', 'name']);
    }
}
