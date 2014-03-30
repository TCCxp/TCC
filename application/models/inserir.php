<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
    class Inserir extends CI_Model {

        function __construct() {
            parent::__construct();
        }

        function valida_novo_usuario($dados){

            $this -> db -> select('login, email');
            $this -> db -> from('usuario');
            $this -> db -> where('login', $dados['login']);
            $this -> db -> where('email', $dados['email']);            
            $query = $this -> db -> get();
            if($query -> num_rows() == 0)
            {
                return $this->novo_usuario($dados);
            }
            else
            {
                echo 
                ("<script language='JavaScript'>
                    window.alert('Sucesso!')
                </script>");
                redirect('principal');             
            }            
        }

        function novo_usuario($dados){
            
            return $this->db->insert('usuario', $dados);
        }
    }
?>