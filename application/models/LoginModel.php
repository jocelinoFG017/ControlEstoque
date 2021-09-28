<?php

class LoginModel extends CI_Model{
    public function store($login, $senha){

        $this->db->where("login", $login);
        $this->db->where("senha", $senha);
        //$this->db->where("idCargo", $cargo);

        $usuario = $this->db->get("usuario")->row_array();
        return $usuario;
    }
}