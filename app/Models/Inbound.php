<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Inbound extends Model
{
    //
    protected $table = "inbounds";

    protected $fillable = [
        'inbound_code',
        'status',
        'total_qty',
        'created_by',
        'updated_by'
    ];
}
