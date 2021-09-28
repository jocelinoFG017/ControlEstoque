<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Produto extends CI_Controller{
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
}
?>
