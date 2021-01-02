<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Department extends BaseModel
{
    protected $fillable = ['name','description','status'];

    // Relations.
    /**
     * Get doctors department.
     */
    public function users() {
        return $this->hasMany(User::class);
    }
}
