<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use CodeIgniter\Model;

class UsuarioModel extends CI_Model{
    protected $table = 'usuario';
    protected $primaryKey = 'idUsuario';
    protected $allowedFields = ['nome', 'login', 'senha', 'cargo'];

    function listarUsuarios(){
        
        
        //if (id){
            $query = $this->db->get('usuario');
            return $query->result_array();
        //}

       // $query = $this->db->get_where('usuario', array('nome'));
        //return $query->row_array();
    }
}
?>