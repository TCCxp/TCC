<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    class Usuario extends CI_Model {
        function login($login, $senha)
        {
            
            $this -> db -> select('id, login, senha');
            $this -> db -> from('usuario');
            $this -> db -> where('login', $login);
            $this -> db -> where('senha', $senha);
            $this -> db -> limit(1);
            $query = $this -> db -> get();
            
            if($query -> num_rows() == 1)
            {
                return $query->result();
            }
            else
            {
                return false;
            }
        }
    }
?>