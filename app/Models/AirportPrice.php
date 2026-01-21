<?php

namespace App\Models;

use App\Enums\ActiveInactiveStatus;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Attributes\SearchUsingPrefix;
use Laravel\Scout\Searchable;

class AirportPrice extends Model
{
    use Searchable;

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

    #[SearchUsingPrefix(['route_from','executive_saloon_price','eight_seater_price','status'])]
    public function toSearchableArray(): array
    {
        return [
            'route_from' => $this->route_from,
            'executive_saloon_price' => $this->executive_saloon_price,
            'eight_seater_price' => $this->eight_seater_price,
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

}
