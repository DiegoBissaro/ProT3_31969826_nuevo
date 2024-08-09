<?php
namespace App\Controllers;

use CodeIgniter\Controller;

class Panel_controller extends Controller
{
    public function index()
    {
        $session = session();
        $nombre = $session->get('usuario');
        $perfil = $session->get('perfil_id');

        $data['perfil_id'] = $perfil;

        $dato['titulo'] = 'panel del usuario';
        echo view('Front/head', $dato);
        echo view("Front/navbar");
        echo view('Back/usuario/usuario_logueado', $data);
         return view('Front/footer');
    }
}
?>
