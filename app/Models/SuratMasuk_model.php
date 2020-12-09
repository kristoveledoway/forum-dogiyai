<?php

namespace App\Models;

use CodeIgniter\Model;

class SuratMasuk_model extends Model
{
    protected $table = 'data_surat_masuk';
    protected $primaryKey = 'id_surat_masuk';
    // protected $useTimestamps = true;
    // protected $allowedFields = ['judul', 'slug', 'penulis', 'penerbit', 'sampul'];

    public function getSuratMasuk($id = false, $limit = false, $offset = false)
    {
        if ($id == false) {
            if ($limit == false || $offset == false) {
                return $this->findAll();
            }
            $hasil = count($this->findAll());
            $offset = $hasil - $offset;
            return $this->findAll($limit, $offset);
        }
        return $this->where(['id_surat_masuk' => $id])->first();
    }
}
