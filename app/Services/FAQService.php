<?php

namespace App\Services;

use App\Models\faq;

class FaqService
{
    public FAQ $model;

    public function __construct(FAQ $model)
    {
        $this->model = $model;
    }

    public function getDatas($orderBy = 'created_at', $order = 'desc')
    {
        return $this->model->orderBy($orderBy, $order)->latest();
    }

    // public function getPaginatedDatas($perPage = 10, $orderBy = 'created_at', $order = 'desc')
    // {
    //     return $this->getDatas($orderBy, $order)->paginate($perPage);
    // }
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
}
