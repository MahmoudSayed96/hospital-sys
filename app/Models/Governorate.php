<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Governorate extends Model
{
    protected $fillable = ['name'];
    protected $hidden = ['created_at', 'updated_at'];
    public $timestamps = FALSE;

    
    public function cities() {
        return $this->hasMany(City::class);
    }

    // public function patients() {
    //     return $this->hasMany(Patient::class);
    // }

    // public function doctors() {
    //     return $this->hasMany(Patient::class);
    // }

}
