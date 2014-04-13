<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Mensagem extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('novo_post', '', TRUE);
    }

    function index() {

        $this->salvarpost();
        $this->carregar();
    }

    function salvarpost() {        
        $this->load->library('form_validation');
        $sessao = $this->session->userdata('logado');
        $query = array(
            'id_usuario' => $sessao['id'],
            'conteudo' => $this->input->post('novo_post'),
            'data' => date("d/m/Y"));
        $this->novo_post->post($query);         
    }

    function carregar() {        
        
        $sessao = $this->session->userdata('logado');
        $dados = $this->perfil->carregarperfil($sessao['id']);        
        $post = array();
        foreach ($dados as $row) {
            $post['conteudo'][] = $row->conteudo;
            $post['data'][] = $row->data;
        }
        //$this->load->view('conteudo_publicado',$post);
        //$this->load->view('home', $post);
    }

}
