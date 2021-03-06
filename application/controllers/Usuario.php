<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Usuario extends CI_Controller{
/**
*   Classe controller de Usuario
*/

public function __construct(){
    parent::__construct();
    permission();
// Carregando modelo de Usuario
$this->load->model('UsuarioModel');
}


    function index(){
        

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

        // pega o metodo store no modelo de Usuario
        $this->UsuarioModel->store($usuario);

        redirect("usuario");
    }


    public function edit($id){

        $dados['usuario'] = $this->UsuarioModel->show($id);
        
        // Carregando o header
        //$this->load->view('templates/header', $dados);

        // Carrega a view e mostra os dados da tabela usuario
        $this->load->view('formulario', $dados);

    }


    public function update($id){
        $usuario = $_POST;
        $this->UsuarioModel->update($id, $usuario);

        redirect("usuario");

    }    

    
    function delete($idUsuario){
        // exclui o dado da tabela pelo seu id
        $this->UsuarioModel->destroy($idUsuario);

        redirect("usuario");


    }
}