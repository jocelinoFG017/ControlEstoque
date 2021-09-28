<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller{
    public function index(){
        //$dados = 
        $this->load->view('login');

    }

    public function store(){
        $this->load->model('LoginModel');

      $login = $_POST["login"];
      $senha = md5($_POST["senha"]);
      $usuario =$this->LoginModel->store($login, $senha);
    
      if ($usuario) {
          $this->session->set_userdata("usuario_logado", $usuario);
          redirect('home');

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