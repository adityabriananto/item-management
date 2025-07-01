<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Outbound extends Model
{
    //
    protected $table = "outbounds";

    protected $fillable = [
        'outbound_code',
        'status',
        'total_qty',
        'created_by',
        'updated_by'
    ];
}
