<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logincontroller extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('loginmodel'); 
        $this->load->library('session');  
    }
    
    public function index() {
        if ($this->session->userdata('status') == 'ONLINE') {
            redirect(base_url('Dashboard'));
        }
        $this->load->view('auth/login');
    }

    public function aksi_login() {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        
        $where = array(
            'username' => $username,
        );
        
        $user_data = $this->loginmodel->get_user_data_by_username($username);
        
        if ($user_data) {
            if (md5($password) === $user_data->password) {
                $data_session = array(
                    'status' => "ONLINE",
                    'level' => $user_data->role,
                    'user_id' => $user_data->id,
                );
                
                $this->session->set_userdata($data_session);

                redirect(base_url('Dashboard'));
            } else {
                $this->session->set_flashdata('error', 'Username or password is incorrect!');
                redirect(base_url('Logincontroller')); 
            }
        } else {
            $this->session->set_flashdata('error', 'Username or password is incorrect!');
            redirect(base_url('Logincontroller'));
        }
    }

    public function logout() {
        $this->session->sess_destroy();
        redirect(base_url('Logincontroller')); 
    }
}
