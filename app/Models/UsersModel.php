<?php

namespace App\Models;

use CodeIgniter\Model;

class UsersModel extends Model
{
    protected $table = "data_pemilih";
    protected $primaryKey = "id";
    protected $returnType = "array";
    protected $allowedFields = ['id', 'npm', 'status'];

    public function getDataPemilih($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }

        return $this->where(['id' => $id])->first();
    }

    public function coba()
    {
        $valid = "data";
        return $valid;
    }
}
