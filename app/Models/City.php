<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $fillable = ['name', 'governorate_id'];
    protected $hidden = ['created_at', 'updated_at', 'governorate_id'];
    public $timestamps = FALSE;

    public function governorate() {
        return $this->belongsTo(Governorate::class);
    }

    // public function patients() {
    //     return $this->hasMany(Patient::class);
    // }
}
