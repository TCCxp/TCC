<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Autentica extends CI_Controller {

    function __construct() {        
        parent::__construct();
        $this->load->model('usuario', '', TRUE);
    }

    function index() {
        $sessao = $this->session->userdata('logado');
        if (!$sessao) {
            //validação dos campos
            $this->load->library('form_validation');
            $this->form_validation->set_rules('login', 'Login', 'required');
            $this->form_validation->set_rules('senha', 'Senha', 'required|callback_verifica_usuario');
            $sessao = $this->session->userdata('logado');

            if ($this->form_validation->run() == FALSE) {
                //Falha de validação
                $this->load->view('principal');
            } else if ($this->form_validation->run() == TRUE) {
                //Vai para perfil
                redirect('home');
            } else
                redirect('principal');
        }
        else {            
            $this->session->sess_destroy();
            echo
            ("<script language='JavaScript'>
                    window.alert('Erro de Logon, Sessão Encerrada!')
                    window.location.href='principal';
                </script>");
                       
        }
    }

    function verifica_usuario($login, $senha) {
        //Validação
        $login = $this->input->post('login');
        $senha = $this->input->post('senha');
        $result = $this->usuario->login($login, $senha);

        if ($result) {
            $sessao = array();
            foreach ($result as $row) {
                $sessao = array(
                    'id' => $row->id,
                    'login' => $row->login,
                    'senha' => $row->senha
                );
                $this->session->set_userdata('logado', $sessao);
            }
            return TRUE;
        } else {
            $this->form_validation->set_message('verifica_usuario', 'Usuario ou senha invalida');
            return false;
        }
    }

}

?>