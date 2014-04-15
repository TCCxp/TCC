<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Home extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('perfil', '', TRUE);
    }

    function index() {
        $this->carregar();
    }

    function carregar() {
        $sessao = $this->session->userdata('logado');
        if ($sessao) {
            $dados = $this->perfil->carregarperfil($sessao['id']);
            $post = array();
            foreach ($dados as $row) {
                $post['conteudo'][] = $row->conteudo;
                $post['data'][] = $row->data;
            }
            $this->load->view('home', $post);
        } else {
            echo
            ("<script language='JavaScript'>
                    window.alert('Voce não está logado!')
                    window.location.href='principal';
                </script>");
        }
    }
	
	function perfil(){
		$sessao = $this->session->userdata('logado');
		if($sessao){
			$perfil = $this->perfil->informusr($sessao['id']);
			$info = array();
			foreach ($perfil as $row) {
                $info['nome'][] = $row->nome;
                $info['cidade'][] = $row->cidade;
				$info['uf'][] = $row->uf;
				$info['sexo'][] = $row->sexo;
            }
			$this->load->view('home', $info);
		} else {
			echo("<script language='JavaScript'>
                    window.alert('Erro em resgatar informações!')
                    window.location.href='principal';
                </script>");
        }
	}
		
    
    function buscaperfil() {
        $busca = $this->input->get('busca');
        if (isset($busca)) {
            $this->load('perfil/buscaperfil', $busca);
            //suggest($cidade);
        }
    }

    function logout() {

        $this->session->sess_destroy();
        redirect('principal');
    }

}

?>