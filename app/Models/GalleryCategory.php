<?php

namespace App\Models;

use App\Enums\ActiveInactiveStatus;
use Illuminate\Database\Eloquent\Model;

class GalleryCategory extends Model
{
    protected $fillable = [
        'name',
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

    public function images()
    {
        return $this->hasMany(GalleryImage::class)->active();
    }
}

