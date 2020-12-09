<?php

namespace App\Models;

use CodeIgniter\Model;

class SuratKeluar_model extends Model
{
    protected $table = 'data_surat_keluar';
    protected $primaryKey = 'id_surat_keluar';
    // protected $useTimestamps = true;
    // protected $allowedFields = ['judul', 'slug', 'penulis', 'penerbit', 'sampul'];

    public function getSuratKeluar($id = false, $limit = false, $offset = false)
    {
        if ($id == false) {
            if ($limit == false || $offset == false) {
                return $this->findAll();
            }
            $hasil = count($this->findAll());
            $offset = $hasil - $offset;
            return $this->findAll($limit, $offset);
        }
        return $this->where(['id_surat_keluar' => $id])->first();
    }
}
