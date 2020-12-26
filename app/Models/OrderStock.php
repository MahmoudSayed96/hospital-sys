<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderStock extends BaseModel
{
    protected $fillable = ['type', 'action', 'quantity', 'stock_id'];

    // Local Scopes.

    /**
     * Get all entry stocks.
     */
    public function scopeEntry($query) {
        return $query->where('type', 0);
    }

    /**
     * Get all delivery stocks.
     */
    public function scopeDelivery($query) {
        return $query->where('type', 1);
    }

    // Accessors.
     /**
     * Get stock type value.
     */
    public function getType() {
        return $this->type == 1 ? 'Lab' : 'Hospital';
    }

    // Relations.

    public function stock() {
        return $this->belongsTo(Stock::class);
    }
}
