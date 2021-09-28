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

    public function destroy($idProduto){
        $this->db->where("idProduto",$idProduto);
        return $this->db->delete("produto");
        redirect("lista_produtos");
    }
}
?>