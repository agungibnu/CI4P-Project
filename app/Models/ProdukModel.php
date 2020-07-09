<?php

namespace App\Models;

use CodeIgniter\Model;

class ProdukModel extends Model
{
    protected $table = 'produk';
    // fitur catat updated dll
    protected $useTimestamps = true;
    protected $allowedFields = ['produk', 'slug', 'penjelasan', 'tahun', 'sampul'];
    // fungsi getProduk
    public function getProduk($slug = false)
    {
        if ($slug == false) {
            return $this->findAll();
        }
        return $this->where(['slug' => $slug])->first();
    }
}
