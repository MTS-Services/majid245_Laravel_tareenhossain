<?php

namespace App\Services;

use App\Models\GalleryCategory;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;

class GalleryCategoryService
{
    public GalleryCategory $model;
    public function __construct( GalleryCategory $model)
    {
        $this->model = $model;
    }

    public function getDatas($orderBy = 'created_at', $order = 'desc')
    {
        return $this->model->orderBy($orderBy, $order)->latest()->get();
    }

    public function getPaginatedData(int $perPage = 15, array $filters = []): LengthAwarePaginator
    {

        if($filters['search'] ?? null){
            return $this->model->search($filters['search'] ?? null)
                    ->latest()
                    ->paginate($perPage);
        }

        return $this->model->filter($filters)->latest()->paginate($perPage);
    }

    public function findData($column_value, $column_name = 'id')
    {
        return $this->model->where($column_name, $column_value)->first();
    }

    public function createData($data)
    {
        return $this->model->create($data);
    }

    public function updateData($id, $data)
    {
        return $this->model->where('id', $id)->update($data);
    }

    public function deleteData($id)
    {
        return $this->model->where('id', $id)->delete();
    }

    public function bulkDeleteData($ids, $admin_id)
    {
        return $this->model->whereIn('id', $ids)->delete();
    }

    public function bulkUpdateStatus($ids, $status)
    {
        return $this->model->whereIn('id', $ids)->update(['status' => $status]);
    }

}
