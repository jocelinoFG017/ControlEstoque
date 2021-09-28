<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use CodeIgniter\Model;

class ProdutoModel extends CI_Model{
    protected $table = 'produto';
    protected $primaryKey = 'idProduto';
    protected $allowedFields = ['nome', 'descricao', 'valor', 'quantidade', 'img','data_cadastro'];

    function listarProdutos(){
        
        
        //if (id){
            $query = $this->db->get('produto');
            return $query->result_array();
        //}

       // $query = $this->db->get_where('usuario', array('nome'));
        //return $query->row_array();
    }
     
    public function store($produto){
        // Armazena os dados de entrada na tabela usuario
        $this->db->insert("produto",$produto);

    }
    public function show($id){
        return $this->db->get_where("produto", array(
            "idProduto" => $id
        ))->row_array();

    }

    public function update($id, $produto){
        $this->db->where("idProduto", $id);
        return $this->db->update("produto", $produto);

    }


    public function destroy($idProduto){
        $this->db->where("idProduto",$idProduto);
        return $this->db->delete("produto");
        redirect("lista_produtos");
    }
}
?>