<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class OutbounItem extends Model
{
    //
    protected $table = "outbound_items";

    protected $fillable = [
        "outbound_id",
        "item_id",
        "qty"
    ];

    public function outbound() : BelongsTo {
        return $this->belongsTo(Outbound::class);
    }

    public function item(): BelongsTo {
        return $this->belongsTo(Item::class);
    }
}
