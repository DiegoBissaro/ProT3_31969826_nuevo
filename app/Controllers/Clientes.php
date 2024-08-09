<!-- // app/Controllers/Clientes.php
<?php

namespace App\Controllers;

use App\Models\Cliente_model;

class Clientes extends BaseController {

    public function __construct() {
        $this->clienteModel = new Cliente_model();
        helper('url');
    }

    public function index() {
        $data['clientes'] = $this->clienteModel->obtener_clientes();
        echo view('clientes/index', $data);
    }

    public function ver($id) {
        $data['cliente'] = $this->clienteModel->obtener_cliente_por_id($id);
        echo view('clientes/ver', $data);
    }

    public function agregar() {
        if ($this->request->getMethod() == 'post') {
            $data = [
                'nombreyapellido' => $this->request->getPost('nombreyapellido'),
                'email' => $this->request->getPost('email'),
                'cuit' => $this->request->getPost('cuit'),
                'usuario' => $this->request->getPost('usuario')
            ];
            $this->clienteModel->agregar_cliente($data);
            return redirect()->to('/clientes');
        } else {
            echo view('clientes/agregar');
        }
    }

    public function editar($id) {
        if ($this->request->getMethod() == 'post') {
            $data = [
                'nombreyapellido' => $this->request->getPost('nombreyapellido'),
                'email' => $this->request->getPost('email'),
                'cuit' => $this->request->getPost('cuit'),
                'usuario' => $this->request->getPost('usuario')
            ];
            $this->clienteModel->actualizar_cliente($id, $data);
            return redirect()->to('/clientes');
        } else {
            $data['cliente'] = $this->clienteModel->obtener_cliente_por_id($id);
            echo view('clientes/editar', $data);
        }
    }

    public function eliminar($id) {
        $this->clienteModel->eliminar_cliente($id);
        return redirect()->to('/clientes');
    }
}
?> -->
