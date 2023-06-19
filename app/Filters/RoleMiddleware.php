<?php

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class RoleMiddleware implements FilterInterface
{
  public function before(RequestInterface $request, $arguments = null)
  {
    // Cek apakah pengguna sudah login atau tidak
    if (!session()->get('logged_in')) {
      return redirect()->to('/login');
    }

    // Cek peran pengguna untuk mengakses halaman ini
    $allowedRoles = is_array($arguments) ? $arguments : [$arguments];
    $role = session()->get('role');
    if (!in_array($role, $allowedRoles)) {
      session()->setFlashdata('akses', 'Anda Tidak Memiliki Akses');
      return redirect()->to('/login');
    }
  }

  public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
  {
    // Tidak ada yang perlu dilakukan setelahnya
  }
}
