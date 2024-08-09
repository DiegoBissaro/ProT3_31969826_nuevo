<?php
// application/models/Cliente_model.php
class Cliente_model extends CI_Model {

    public function __construct() {
        $this->load->database();
    }

    public function obtener_clientes() {
        $query = $this->db->get('clientes');
        return $query->result_array();
    }

    public function obtener_cliente_por_id($id) {
        $query = $this->db->get_where('clientes', array('id' => $id));
        return $query->row_array();
    }

    public function agregar_cliente($data) {
        return $this->db->insert('clientes', $data);
    }

    public function actualizar_cliente($id, $data) {
        $this->db->where('id', $id);
        return $this->db->update('clientes', $data);
    }

    public function eliminar_cliente($id) {
        $this->db->where('id', $id);
        return $this->db->delete('clientes');
    }
}
?>
