<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
    class Novo_post extends CI_Model {

        function __construct() {
            parent::__construct();
        }

        function post($dados){            
            return $this->db->insert('post', $dados);
        }
    }
?>