<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Usuario extends CI_Controller{
/**
*   Classe controller de Usuario
*/
    function index(){
        // Carregando modelo de Usuario
        $this->load->model('UsuarioModel');

        // Chama o metodo listar Usuarios do modelo e atribui a uma variavel, passando como parametro
        // o objeto a ser utilizado posteriormente na view 
        $dados['usuarios'] = $this->UsuarioModel->listarUsuarios();
        
        // Carregando o header
        $this->load->view('templates/header', $dados);

        // Carrega a view e mostra os dados da tabela usuario
        $this->load->view('lista_usuarios', $dados);

    }


    function formulario(){
        $this->load->view('formulario');
    }


    public function store(){
        $usuario = $_POST;

        // Carrega o modelo
        $this->load->model('UsuarioModel');
        // pega o metodo store no modelo de Usuario
        $this->UsuarioModel->store($usuario);

        redirect("usuario");
    }

    public function edit($id){
        $this->load->model('UsuarioModel');

        $dados['usuario'] = $this->UsuarioModel->show($id);
        
        // Carregando o header
        $this->load->view('templates/header', $dados);

        // Carrega a view e mostra os dados da tabela usuario
        $this->load->view('formulario', $dados);

    }


    public function update($id){
        $this->load->model('UsuarioModel');
        $usuario = $_POST;
        $this->UsuarioModel->update($id, $usuario);

        redirect("home_page");

    }
    

    function gravar(){

        #$this->idUsuario = $_POST['idUsuario']; 
        $this->nome = $_POST['nome']; 
        $this->login = $_POST['login'];
        $this->senha = $_POST['senha'];
        $this->cargo = $_POST['cargo'];

        if ($this->db->insert('usuario', $this)){
            return $this->load->view('home_page');
            
        }
    }
    

    function delete($idUsuario){
        // Carrega o modelo de usuario
        $this->load->model('UsuarioModel');
        // exclui o dado da tabela pelo seu id
        $this->UsuarioModel->destroy($idUsuario);


        redirect("usuario");


    }
}