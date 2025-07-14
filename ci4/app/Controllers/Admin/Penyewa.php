<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\PenyewaModel;
use App\Models\KamarModel;

class Penyewa extends BaseController
{
    protected $penyewaModel;
    protected $kamarModel;

    public function __construct()
    {
        $this->penyewaModel = new PenyewaModel();
        $this->kamarModel = new KamarModel();
    }

    public function index()
    {
        $data['penyewa'] = $this->penyewaModel->findAll();
        return view('admin/penyewa/index', $data);
    }

    public function create()
    {
        $data['kamar'] = $this->kamarModel->findAll();
        return view('admin/penyewa/create', $data);
    }

    public function store()
    {
        $rules = [
            'nama' => 'required',
            'no_ktp' => 'required',
            'no_hp' => 'required',
            'kamar_id' => 'required|integer',
            'tanggal_masuk' => 'required|valid_date',
        ];
        if (!$this->validate($rules)) {
            return view('admin/penyewa/create', [
                'validation' => $this->validator,
                'kamar' => $this->kamarModel->findAll()
            ]);
        }
        $this->penyewaModel->save($this->request->getPost());
        return redirect()->to(site_url('admin/penyewa'))->with('success', 'Data penyewa berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $data['penyewa'] = $this->penyewaModel->find($id);
        $data['kamar'] = $this->kamarModel->findAll();
        return view('admin/penyewa/edit', $data);
    }

    public function update($id)
    {
        $rules = [
            'nama' => 'required',
            'no_ktp' => 'required',
            'no_hp' => 'required',
            'kamar_id' => 'required|integer',
            'tanggal_masuk' => 'required|valid_date',
        ];
        if (!$this->validate($rules)) {
            return view('admin/penyewa/edit', [
                'validation' => $this->validator,
                'penyewa' => $this->penyewaModel->find($id),
                'kamar' => $this->kamarModel->findAll()
            ]);
        }
        $this->penyewaModel->update($id, $this->request->getPost());
        return redirect()->to(site_url('admin/penyewa'))->with('success', 'Data penyewa berhasil diupdate.');
    }

    public function delete($id)
    {
        $this->penyewaModel->delete($id);
        return redirect()->to(site_url('admin/penyewa'))->with('success', 'Data penyewa berhasil dihapus.');
    }

    public function detail($id)
    {
        $data['penyewa'] = $this->penyewaModel->find($id);
        $data['kamar'] = $this->kamarModel->find($data['penyewa']['kamar_id'] ?? null);
        return view('admin/penyewa/detail', $data);
    }
} 