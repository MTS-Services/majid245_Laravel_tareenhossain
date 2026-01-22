<?php

namespace App\Models;

use App\Enums\ActiveInactiveStatus;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Attributes\SearchUsingPrefix;
use Laravel\Scout\Searchable;

class GalleryCategory extends Model
{
    use Searchable;

    protected $fillable = [
        'name',
        'status',
        'created_at',
        'updated_at',

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



    /* =#=#=#=#=#=#=#=#=#=#=#==#=#=#=#= =#=#=#=#=#=#=#=#=#=#==#=#=#=#=
  |           Query Scopes                                       |
  =#=#=#=#=#=#=#=#=#=#==#=#=#=#= =#=#=#=#=#=#=#=#=#=#==#=#=#=#=#= */

    public function scopeFilter(Builder $query, array $filters): Builder
    {
        return $query
            ->when(
                $filters['status'] ?? null,
                fn($q, $status) =>
                $q->where('status', $status)
            );
    }

    /*  =#=#=#=#=#=#=#=#=#=#=#==#=#=#=#= =#=#=#=#=#=#=#=#=#=#==#=#=#=#=
    |          End of Query Scopes                                   |
    =#=#=#=#=#=#=#=#=#=#==#=#=#=#= =#=#=#=#=#=#=#=#=#=#==#=#=#=#=#= */




    /* =#=#=#=#=#=#=#=#=#=#=#==#=#=#=#= =#=#=#=#=#=#=#=#=#=#==#=#=#=#=
    |          Scout Search Configuration                         |
    =#=#=#=#=#=#=#=#=#=#==#=#=#=#= =#=#=#=#=#=#=#=#=#=#==#=#=#=#=#= */

    #[SearchUsingPrefix(['name', 'status'])]
    public function toSearchableArray(): array
    {
        return [
            'name' => $this->name,
            'status' => $this->status,
        ];
    }

    /**
     * Include only non-deleted data in search index.
     */
    public function shouldBeSearchable(): bool
    {
        return is_null($this->deleted_at);
    }

    /* =#=#=#=#=#=#=#=#=#=#=#==#=#=#=#= =#=#=#=#=#=#=#=#=#=#==#=#=#=#=
    |        End  Scout Search Configuration                                    |
    =#=#=#=#=#=#=#=#=#=#==#=#=#=#= =#=#=#=#=#=#=#=#=#=#==#=#=#=#=#= */




    /* =#=#=#=#=#=#=#=#=#=#=#==#=#=#=#= =#=#=#=#=#=#=#=#=#=#==#=#=#=#=
    |        Attribute Accessors                                    |
    =#=#=#=#=#=#=#=#=#=#==#=#=#=#= =#=#=#=#=#=#=#=#=#=#==#=#=#=#=#= */


    public function getStatusLabelAttribute(): string
    {
        return $this->status->label();
    }

    public function getStatusColorAttribute(): string
    {
        return $this->status->color();
    }

    /* ================================================================
    |  Accessors
    ================================================================ */

    public function getCreatedAtHumanAttribute(): string
    {
        return dateTimeHumanFormat($this->attributes['created_at']);
    }

    public function getUpdatedAtHumanAttribute(): string
    {
        return dateTimeHumanFormat($this->attributes['updated_at'], $this->attributes['created_at']);
    }


    public function getCreatedAtFormattedAttribute(): string
    {
        return dateTimeFormat($this->attributes['created_at']);
    }

    public function getUpdatedAtFormattedAttribute(): string
    {
        return dateTimeFormat($this->attributes['updated_at'], $this->attributes['created_at']);
    }

}

