<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class InboundItem extends Model
{
    //
    protected $table = "inbound_items";

    protected $fillable = [
        "inbound_id",
        "item_id",
        "qty"
    ];

    public function inbound() : BelongsTo {
        return $this->belongsTo(Inbound::class);
    }

    public function item(): BelongsTo {
        return $this->belongsTo(Item::class);
    }
}
