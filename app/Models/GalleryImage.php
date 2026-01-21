<?php

namespace App\Models;

use App\Enums\ActiveInactiveStatus;
use Illuminate\Database\Eloquent\Model;

class GalleryImage extends Model
{
    protected $fillable = [
        'gallery_category_id',
        'image',
        'alt',
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

    public function category()
    {
        return $this->belongsTo(GalleryCategory::class);
    }

}
