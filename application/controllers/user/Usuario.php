<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Usuario extends CI_Controller{

    function index(){
        //  Carregando modelo de Usuario
        $this->load->model('UsuarioModel');
        // 
        $dados['usuarios'] = $this->UsuarioModel->listarUsuarios();
        
        // Carrega a view e mostra os dados da tabela usuario
        $this->load->view('lista_usuarios', $dados);

    }

    function formulario(){
        $this->load->view('formulario');
    }
    
    function gravar(){
        //$this->load->model('UsuarioModel');
        //$modelo = new UsuarioModel;
        //$modelo = model('App\Models\UsuarioModel');
        
        //print_r($this->request->getPost() );
        //$modelo->insert( $this->request->getPost() );
        
        $this->idUsuario = $_POST['idUsuario']; 
        $this->nome = $_POST['nome']; 
        $this->login = $_POST['login'];
        $this->senha = $_POST['senha'];
        $this->cargo = $_POST['cargo'];

        if ($this->db->insert('usuario', $this)){
            return $this->load->view('home_page');
            
        }
    }
}