<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Medicine extends BaseModel
{
    protected $fillable = ['name', 'expire_date', 'quantity', 'alert_qty', 'price', 'status', 'description'];

}
