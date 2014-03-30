<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    class Perfil extends CI_Model {
        function __construct() {
            parent::__construct();
        }

        function carregarperfil($id)
        {        
            $this -> db -> select('id_usuario, id, conteudo, data');
            $this -> db -> from('post');
            $this -> db -> where('id_usuario',$id);
            //$this -> db -> limit(5);
            $query = $this-> db->get();
            return $query->result();            
        }
    
        function buscarperfil($nome){
            $this -> db -> select('id_usuario, id, conteudo, data');
            $this -> db -> from('post');
            $this -> db -> like('nome',$nome);
            $query = $this-> db->get();
            return $query->result();            
            
        }
        }
?>