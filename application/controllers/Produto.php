<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Produto extends CI_Controller{

    public function __construct(){
        parent::__construct();
    // Carregando modelo de Usuario
    $this->load->model('ProdutoModel');
    }
    
    
    function index(){
        //  Carregando modelo de Produto
        $this->load->model('ProdutoModel');

        $dados['produtos'] = $this->ProdutoModel->listarProdutos();

        // Carregando o header
        $this->load->view('templates/header');

        // Carrega a view e mostra os dados da tabela usuario
        $this->load->view('lista_produtos', $dados);
    


                
    }
    function formulario_produto(){
        $this->load->view('formulario_produto');
    }
    

    public function edit($id){

        $dados['produto'] = $this->ProdutoModel->show($id);
        
        // Carregando o header
        $this->load->view('templates/header', $dados);

        // Carrega a view e mostra os dados da tabela usuario
        $this->load->view('formulario_produto', $dados);

    }
    
    function delete($idProduto){
        // exclui o dado da tabela pelo seu id
        $this->ProdutoModel->destroy($idProduto);

        redirect("produto");


    }
}
?>
