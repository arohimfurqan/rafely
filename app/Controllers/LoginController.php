<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\User;
use CodeIgniter\View\Parser;

class LoginController extends BaseController
{
    protected $users;
    protected $session;
    protected $validation;
    public function __construct()
    {
        $this->users =  new User();
        $this->session =  \Config\Services::session();
        $this->validation =  \Config\Services::validation();
    }
    public function index()
    {
        $model = new User();
        $this->session->setFlashdata('old_input', $this->request->getPost());
        // $template = ['title' => 'Login'];
        if ($this->request->getMethod() == 'post') {


            // Validasi input
            $this->validation->setRules($model->validationAdd);

            if (!$this->validation->withRequest($this->request)->run()) {
                // Validasi gagal, tampilkan kembali form login dengan pesan error

                return view('/login/index', ['validation' => $this->validation]);
            } else {
                // Validasi sukses, lanjutkan dengan proses autentikasi
                // Lakukan pengecekan ke database atau sistem autentikasi lainnya
                // Jika autentikasi berhasil, redirect ke halaman berikutnya
                // Jika autentikasi gagal, tampilkan pesan error

                // Contoh autentikasi sederhana
                $username = $this->request->getPost('username');
                $password = $this->request->getPost('password');

                $user = $this->users->where(['username' => $username])->asObject()->first();

                if ($user && password_verify($password, $user->password)) {

                    $data = [
                        'logged_in' => true,
                        'role' => 'admin' // Ganti dengan peran sesuai dengan kebutuhan
                    ];

                    session()->set($data);
                    // Autentikasi sukses
                    return redirect()->to('/');
                } else {
                    // Autentikasi gagal, tampilkan pesan error
                    $this->validation->setError('password', 'Invalid username or password');
                    return view('/login/index', ['validation' => $this->validation]);
                }
            }
        }
        echo view('login/index', ['validation' => $this->validation]);
    }

    public function logout()
    {
        // Hapus sesi dan redirect ke halaman login
        session()->destroy();
        return redirect()->to('/login');
    }
}
