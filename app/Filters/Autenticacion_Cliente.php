<?php

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class Autenticacion_Cliente implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        if(!(session()->us_Perfil_id == 2)){
            return redirect()->to(base_url('').'/');
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Do something here
    }
}