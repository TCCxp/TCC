<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Cadastro extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('inserir', '', TRUE);
    }

    function novo_usuario() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('nome', 'Nome', 'required');
        $this->form_validation->set_rules('sexo', 'Sexo', 'required');
        $this->form_validation->set_rules('login', 'Login', 'required');
        $this->form_validation->set_rules('senha', 'Senha', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('cidade', 'Cidade', 'required');
        $this->form_validation->set_rules('uf', 'Estado', 'required');
        $this->form_validation->set_rules('dia_nasc', 'Data de Nascimento', 'required');
        $this->form_validation->set_rules('mes_nasc', 'Data de Nascimento', 'required');
        $this->form_validation->set_rules('ano_nasc', 'Data de Nascimento', 'required');
        if ($this->form_validation->run() != FALSE) {
            $query = array(
                'nome' => $this->input->post('nome'),
                'sexo' => $this->input->post('sexo'),
                'login' => $this->input->post('login'),
                'senha' => $this->input->post('senha'),
                'email' => $this->input->post('email'),
                'cidade' => $this->input->post('cidade'),
                'uf' => $this->input->post('uf'),
                'data' => $this->input->post('ano_nasc,mes_nasc,dia_nasc'));
            $this->inserir->valida_novo_usuario($query);
            echo ("<script language='JavaScript'>
                    window.alert('Usuário cadastrado')
                    window.location.href='http://localhost:8888/TCC/';                    
                </script>");
            redirect('principal');
        }
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('novo_usuario');
        } else {
            ("<script language='JavaScript'>
                    window.alert('Login ou E-mail j� utilizado!')
                    window.location.href='novo_usuario';
                </script>");
        }
    }
}
/*
 function cadastrar() {
  $this->load->library('form_validation');
  $this->form_validation->set_error_delimiters('<span>', '</span>');
  $validations = array(
  array(
  'field' => 'nome',
  'label' => 'Nome',
  'rules' => 'required|min_length[4]|max_length[45]'
  ),
  array(
  'field' => 'email',
  'label' => 'E-mail',
  'rules' => 'trim|required|valid_email|max_length[45]'
  )
  );
  $this->form_validation->set_rules($validations);
  if ($this->form_validation->run() == FALSE) {
  $this->index();
  } else {
  $data['nome'] = $this->input->post('nome');
  $data['email'] = $this->input->post('email');

  $this->load->model('pessoas_model');
  if ($this->pessoas_model->cadastrar($data)) {
  redirect('pessoas');
  } else {
  log_message('error', 'Erro no cadastro...');
  }
  } */
?>
