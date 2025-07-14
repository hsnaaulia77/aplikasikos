<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\UserModel;

class User extends BaseController
{
    protected $userModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
    }

    public function index()
    {
        $userModel = $this->userModel;

        // Ambil keyword pencarian dari query string
        $keyword = $this->request->getGet('q');
        if ($keyword) {
            $userModel = $userModel->like('nama', $keyword)
                                   ->orLike('email', $keyword)
                                   ->orLike('role', $keyword);
        }

        // Pagination: tampilkan 10 user per halaman
        $data['users'] = $userModel->paginate(10);
        $data['pager'] = $userModel->pager;
        $data['keyword'] = $keyword;

        return view('admin/user/index', $data);
    }

    public function create()
    {
        return view('admin/user/create');
    }

    public function store()
    {
        $this->userModel->save([
            'nama' => $this->request->getPost('nama'),
            'email' => $this->request->getPost('email'),
            'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
            'role' => $this->request->getPost('role'),
        ]);
        return redirect()->to('/admin/user')->with('success', 'User berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $data['user'] = $this->userModel->find($id);
        return view('admin/user/edit', $data);
    }

    public function update($id)
    {
        $this->userModel->update($id, [
            'nama' => $this->request->getPost('nama'),
            'email' => $this->request->getPost('email'),
            'role' => $this->request->getPost('role'),
        ]);
        return redirect()->to('/admin/user')->with('success', 'User berhasil diupdate.');
    }

    public function delete($id)
    {
        $this->userModel->delete($id);
        return redirect()->to('/admin/user')->with('success', 'User berhasil dihapus.');
    }

    public function detail($id)
    {
        $data['user'] = $this->userModel->find($id);
        return view('admin/user/detail', $data);
    }
} 