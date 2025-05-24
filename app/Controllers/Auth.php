<?php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Controller;

class Auth extends Controller
{
    public function login()
    {
        return view('auth/login');
    }

    public function loginAuth()
    {
        $session = session();
        $model = new UserModel();
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        $data = $model->where('username', $username)->first();
        if ($data) {
            $pass = $data['password'];
            if (password_verify($password, $pass)) {
                $sessionData = [
                    'id'       => $data['id'],
                    'username' => $data['username'],
                    'email'    => $data['email'],
                    'logged_in' => true,
                ];
                $session->set($sessionData);
                return redirect()->to('/buku');
            } else {
                return redirect()->to('/login')->with('error', 'Password salah.');
            }
        } else {
            return redirect()->to('/login')->with('error', 'Username tidak ditemukan.');
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
}
