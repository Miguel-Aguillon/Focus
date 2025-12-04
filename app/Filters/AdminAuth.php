<?php

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class AdminAuth implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        $session = session();

        // Si no está logueado o no es administrador
        if (!$session->get('is_logged_in') || $session->get('rol') !== 'admin') {
            return redirect()
                ->to(base_url('login'))
                ->with('error', 'Acceso denegado. Solo administradores pueden ingresar.');
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // No se hace nada después
    }
}
