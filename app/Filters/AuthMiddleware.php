<?php

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class AuthMiddleware implements FilterInterface
{
  public function before(RequestInterface $request, $arguments = null)
  {
    // Cek apakah pengguna sudah login atau tidak
    if (!session()->get('logged_in')) {
      return redirect()->to('/login');
    }
  }

  public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
  {
    // Tidak ada yang perlu dilakukan setelahnya
  }
}
