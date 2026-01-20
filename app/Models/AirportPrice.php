<?php

namespace App\Models;

use App\Enums\ActiveInactiveStatus;
use Illuminate\Database\Eloquent\Model;

class AirportPrice extends Model
{
    protected $fillable = [
        'route_from',
        'executive_saloon_price',
        'eight_seater_price',
        'status',

    ];

    protected $casts = [
        'status' => ActiveInactiveStatus::class,
    ];

    // ############## Scopes ##############
    public function scopeActive($query)
    {
        return $query->where('status', ActiveInactiveStatus::ACTIVE->value);
    }

    public function scopeInactive($query)
    {
        return $query->where('status', ActiveInactiveStatus::INACTIVE->value);
    }
}
