<?php

namespace App\Controllers;

use App\Models\UserModel;

class Auth extends BaseController
{
    public function login()
    {
        helper(['form']);
        $userModel = new UserModel();

        if ($this->request->getMethod() === 'post') {
            $rules = [
                'email' => 'required|valid_email',
                'password' => 'required'
            ];

            if (!$this->validate($rules)) {
                return view('auth/login', [
                    'validation' => $this->validator
                ]);
            }

            $user = $userModel->where('email', $this->request->getPost('email'))->first();
            if ($user && password_verify($this->request->getPost('password'), $user['password'])) {
                // Set session
                session()->set([
                    'user_id' => $user['id'],
                    'user_nama' => $user['nama'],
                    'user_email' => $user['email'],
                    'user_role' => $user['role'],
                    'isLoggedIn' => true
                ]);
                // Redirect ke dashboard sesuai role
                if ($user['role'] == 'admin') {
                    return redirect()->to(base_url('dashboard/admin'));
                } else {
                    return redirect()->to(base_url('dashboard/user'));
                }
            } else {
                return view('auth/login', [
                    'error' => 'Email atau password salah.'
                ]);
            }
        }

        return view('auth/login');
    }

    public function register($role = 'user')
    {
        helper(['form']);
        $userModel = new UserModel();

        if ($this->request->getMethod() === 'post') {
            $rules = [
                'nama' => 'required|min_length[3]',
                'email' => 'required|valid_email|is_unique[users.email]',
                'password' => 'required|min_length[6]',
                'password_confirm' => 'required|matches[password]'
            ];

            if (!$this->validate($rules)) {
                return view('auth/register', [
                    'validation' => $this->validator,
                    'role' => $role
                ]);
            }

            $userModel->save([
                'nama' => $this->request->getPost('nama'),
                'email' => $this->request->getPost('email'),
                'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
                'role' => $role // simpan role sesuai URL
            ]);

            return redirect()->to(base_url('login'))->with('success', 'Pendaftaran berhasil! Silakan login.');
        }

        return view('auth/register', ['role' => $role]);
    }

    public function forgotPassword()
    {
        return view('auth/forgot_password');
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
}
