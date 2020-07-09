<?php

namespace App\Controllers;

use App\Models\ProdukModel;
use CodeIgniter\CodeIgniter;

class Produk extends BaseController
{
    protected $produkModel;

    public function __construct()
    {
        $this->produkModel = new ProdukModel();
    }

    public function index()
    {
        //$produk = $this->produkModel->findAll(); (ini sudah dijadikan fungsi si ProdukModel)
        $data = [
            'tittle' => 'Produk',
            'produk' => $this->produkModel->getProduk() //getProduk adalah fungsi di ProdukModel
        ];

        // cara konek db tanpa model
        //------------------------------------------------
        // $db = \config\Database::connect();

        // $produk = $db->query("SELECT * FROM produk");
        // foreach ($produk->getResultArray() as $row) {
        //     d($row);
        // }
        //-------------------------------------------------

        // instance class model kita
        //$produkModel = new \App\Models\ProdukModel();
        //$produkModel = new ProdukModel();

        // dd($produk);


        return view('produk/produk', $data);
    }
    // fungsi tombol detail

    public function detail($slug)
    {
        // echo $slug; (OK)
        // ----------------------------------------------------------------------
        // dibawah ini metode baru
        // $produk = $this->produkModel->where(['slug' => $slug])->first();
        // dd($produk);
        // ----------------------------------------------------------------------
        // dibawah ini metode baru yang lebih simple
        // $produk = $this->produkModel->getProduk($slug);
        // dd($produk);

        $data = [
            'tittle' => 'Detail Produk',
            'produk' => $this->produkModel->getProduk($slug)

        ];
        //jika produk tidak ada di tabel
        if (empty($data['produk'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('nama produk ' . $slug . ' tidak ditemukan');
        }
        return view('produk/detailProduk', $data);
    }



    // fungsi tambah/create
    public function create()
    {
        //session(); //proses validation itu di session //PIDAH KE BASE CONTROLLER BIAR SATU KALI SAJA
        $data = [
            'tittle' => 'Form Tambah Data Produk',
            'validation' => \Config\Services::validation()
        ];
        return view('produk/create', $data);
    }

    //Fungsi simpan || fungsi ini merupakan proses menyimpan data dari form tambah data 
    public function save()
    {
        // fungsi validasi input
        if (!$this->validate([
            'produk' => [
                'rules' => 'required|is_unique[produk.produk]',
                'errors' => [
                    'required' => '{field}  harus diisi.',
                    'is_unique' => '{field}  sudah terdaftar'
                ]
            ]
        ])) {
            // pesan kesalahan validasi
            $validation = \Config\Services::validation();
            //dd($validation);
            return redirect()->to('/produk/create')->withInput()->with('validation', $validation);
        }
        //dd($this->request->getVar()); data berhasil di ambil 
        $slug = url_title($this->request->getVar('produk'), '-', true);

        $this->produkModel->save([
            'produk' => $this->request->getVar('produk'),
            'slug' => $slug,
            'penjelasan' => $this->request->getVar('penjelasan'),
            'tahun' => $this->request->getVar('tahun'),
            'sampul' => $this->request->getVar('sampul'),


        ]);
        // sesi pengecekan jika data berhasil di tambah maka akan ada pesan muncul, proses ini di view produk
        session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan');
        // kembali ke halaman produk
        return redirect()->to('/produk');
    }
}
