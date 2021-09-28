<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller{
    public function index(){
        $this->load->view('login');
    }


    public function store(){
        // carrega o modelo de login
        $this->load->model('LoginModel');
        // pega a tabela 
        $this->db->get("usuario");
        

      $login = $_POST["login"];
      $senha = $_POST["senha"];
      $cargo = $_POST["cargo"];

      //$this->db->where("idCargo", $cargo);

      $usuario =$this->LoginModel->store($login, $senha);
    

      if ($usuario) {
          $this->session->set_userdata("usuario_logado", $usuario);
          redirect('home');
          /*
          if($cargo == "administrador"){
            redirect('superhome');
          }else{

            redirect('home');
            }*/
          

      }else{
        redirect('login');
      }
    }


    public function logout(){
        $this->session->unset_userdata("usuario_logado");
        redirect('login');
    }
}
?>