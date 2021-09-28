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

    
    public function store($usuario){
        // Armazena os dados de entrada na tabela usuario
        $this->db->insert("usuario",$usuario);

    }


    public function show($id){
        return $this->db->get_where("usuario", array(
            "idUsuario" => $id
        ))->row_array();

    }

    public function update($id, $usuario){
        $this->db->where("idUsuario", $id);
        return $this->db->update("usuario", $usuario);

    }



    public function destroy($idUsuario){
        $this->db->where("idUsuario",$idUsuario);
        return $this->db->delete("usuario");
        redirect("lista_usuarios");
    }
}
?>