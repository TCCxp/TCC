<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Principal extends CI_Controller {

    public function index() {
        $this->load->view('principal');
        $this->load->helper('form');
    }

    public function login() {

        $this->load->view('login');
        //$this->load->helper(array('form'));
        //$this->load->model('autentica');
        //$this->load->model('valida_usuario');
    }

    public function novo_usuario() {
        $this->load->view('novo_usuario');
    }

}
