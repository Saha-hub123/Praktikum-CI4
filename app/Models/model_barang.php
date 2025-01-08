<?php
namespace App\Models;

use CodeIgniter\Model;
class Model_barang extends Model
{
    protected $table      = 'jualan_online';
    public function tampilan_data(): array
    {
        return $this->findAll();
    }
}