<?php

namespace App\Models;

use GuzzleHttp\Client;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Factura extends Model
{
    public function pagos(): HasMany
    {
        return $this->hasMany(Pago::class);
    }

    public function cliente(): BelongsTo
    {
        return $this->belongsTo(Client::class);
    }
    
}
