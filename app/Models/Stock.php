<?php

namespace App\Models;


class Stock extends BaseModel
{
    protected $fillable = ['name', 'quantity', 'price', 'serial_no', 'type'];

    // Local Scopes.
    // Hospital stocks records.
    public function scopeHospital($query) {
        return $query->where('type' , 0);
    }

    // Lab stocks records.
    public function scopeLab($query) {
        return $query->where('type' , 1);
    }

    /**
     * Get stock type attribute value.
     */
    public function getTypeAttribute($value){
        return $value;
    }

    /**
     * Get stock type value.
     */
    public function getType() {
        return $this->type == 1 ? 'Lab' : 'Hospital';
    }

    // Relations.
    public function orders() {
        return $this->hasMany(OrderStock::class);
    }

}
