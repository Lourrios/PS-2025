<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Pago extends Model
{
    public function factura(): BelongsTo
    {
        return $this->belongsTo(Factura::class);
    }
}
