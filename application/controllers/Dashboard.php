<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->library('session');
        if ($this->session->userdata('status') != 'ONLINE') {

            redirect(base_url('Logincontroller')); 
        }
    }
    public function index() {
        $data['content'] = '<h1>Welcome to AdminLTE 3</h1>';
        $this->load->view('templates/header');
        $this->load->view('dashboard', $data);
        $this->load->view('templates/footer');
    }
}
