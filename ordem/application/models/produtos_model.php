<?php
    class Produtos_model extends CI_model{
        public function buscaTodos(){
            return $this->db->get("usetblprodutosr")->result_array();
            $lista = $this->produtos_model->buscaTodos();
            $dados = array("tblprodutos" => $lista);
            $this->load->view('index', $dados);
        }

    }