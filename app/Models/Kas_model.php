<?php

namespace App\Models;

use CodeIgniter\Model;

class Kas_model extends Model
{
    protected $table = 'data_kas';
    protected $primaryKey = 'kode';
    // protected $useTimestamps = true;
    // protected $allowedFields = ['judul', 'slug', 'penulis', 'penerbit', 'sampul'];

    public function getInformasiKas($id = false, $limit = false, $offset = false)
    {
        if ($id == false) {
            if ($limit == false || $offset == false) {
                return $this->findAll();
            }
            $hasil = count($this->findAll());
            $offset = $hasil - $offset;
            return $this->findAll($limit, $offset);
        }
        return $this->where(['kode' => $id])->first();
    }
}
