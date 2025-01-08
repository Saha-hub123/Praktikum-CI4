<?php
namespace App\Controllers;
use App\Models\Model_barang;

class Dashboard extends BaseController
{
    public function __construct()
        {
            $this->model_barang = new Model_barang();
        }
    public function index(): string
    {
        $data['barang'] = $this->model_barang->tampilan_data();
        echo view('template/header');
        echo view('template/sidebar');
        echo view('template/footer');
        return view('dashboard', $data);
    }
}