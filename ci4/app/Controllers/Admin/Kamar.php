<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\KamarModel;
use App\Models\KamarFotoModel;

class Kamar extends BaseController
{
    protected $kamarModel;
    protected $kamarFotoModel;

    public function __construct()
    {
        $this->kamarModel = new KamarModel();
        $this->kamarFotoModel = new KamarFotoModel();
    }

    public function index()
    {
        $data['kamar'] = $this->kamarModel->findAll();
        return view('admin/kamar/index', $data);
    }

    public function create()
    {
        return view('admin/kamar/create');
    }

    public function store()
    {
        $data = [
            'nama'      => $this->request->getPost('nama'),
            'harga'     => $this->request->getPost('harga'),
            'ukuran'    => $this->request->getPost('ukuran'),
            'fasilitas' => json_encode($this->request->getPost('fasilitas')), // array to json
            'deskripsi' => $this->request->getPost('deskripsi'),
            'status'    => $this->request->getPost('status'),
        ];
        $kamarId = $this->kamarModel->insert($data);

        // Upload multiple photos
        $files = $this->request->getFiles();
        if ($files && isset($files['foto'])) {
            foreach ($files['foto'] as $file) {
                if ($file->isValid() && !$file->hasMoved()) {
                    $newName = $file->getRandomName();
                    $file->move('uploads/kamar', $newName);
                    $this->kamarFotoModel->insert([
                        'kamar_id' => $kamarId,
                        'foto'     => $newName
                    ]);
                }
            }
        }

        return redirect()->to('/admin/kamar')->with('success', 'Kamar berhasil ditambahkan.');
    }

    public function detail($id)
    {
        $kamar = $this->kamarModel->find($id);
        $foto = $this->kamarFotoModel->where('kamar_id', $id)->findAll();
        if (!$kamar) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Kamar tidak ditemukan');
        }
        return view('admin/kamar/detail', ['kamar' => $kamar, 'foto' => $foto]);
    }

    public function edit($id)
    {
        $kamar = $this->kamarModel->find($id);
        $foto = $this->kamarFotoModel->where('kamar_id', $id)->findAll();
        if (!$kamar) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Kamar tidak ditemukan');
        }
        return view('admin/kamar/edit', ['kamar' => $kamar, 'foto' => $foto]);
    }

    public function update($id)
    {
        $data = [
            'nama'      => $this->request->getPost('nama'),
            'harga'     => $this->request->getPost('harga'),
            'ukuran'    => $this->request->getPost('ukuran'),
            'fasilitas' => json_encode($this->request->getPost('fasilitas')),
            'deskripsi' => $this->request->getPost('deskripsi'),
            'status'    => $this->request->getPost('status'),
        ];
        $this->kamarModel->update($id, $data);

        // Upload foto baru jika ada
        $files = $this->request->getFiles();
        if ($files && isset($files['foto'])) {
            foreach ($files['foto'] as $file) {
                if ($file->isValid() && !$file->hasMoved()) {
                    $newName = $file->getRandomName();
                    $file->move('uploads/kamar', $newName);
                    $this->kamarFotoModel->insert([
                        'kamar_id' => $id,
                        'foto'     => $newName
                    ]);
                }
            }
        }

        return redirect()->to('/admin/kamar')->with('success', 'Kamar berhasil diupdate.');
    }

    public function delete($id)
    {
        // Hapus foto dari storage
        $fotos = $this->kamarFotoModel->where('kamar_id', $id)->findAll();
        foreach ($fotos as $foto) {
            $path = FCPATH . 'uploads/kamar/' . $foto['foto'];
            if (file_exists($path)) {
                unlink($path);
            }
        }
        $this->kamarFotoModel->where('kamar_id', $id)->delete();
        $this->kamarModel->delete($id);

        return redirect()->to('/admin/kamar')->with('success', 'Kamar berhasil dihapus.');
    }
} 