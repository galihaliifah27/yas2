<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('User_model');
        $this->load->library('session');
        $this->load->library('form_validation');
    }

    public function login() {
        //$this->load->view('templates/header');
        $this->load->view('auth/login');
        //$this->load->view('templates/footer');
    }
    public function register() {
        $this->load->view('templates/header');
        $this->load->view('auth/register');
        $this->load->view('templates/footer');
    }

    public function process_register() {
        $this->form_validation->set_rules('username', 'Username', 'required|is_unique[user.username]');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[6]');
        $this->form_validation->set_rules('konfirmasi_password', 'Konfirmasi Password', 'required|matches[password]');
        $this->form_validation->set_rules('role', 'Role', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header');
            $this->load->view('auth/register');
            $this->load->view('templates/footer');
        } else {
            $data = [
                'username' => $this->input->post('username'),
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                'role' => $this->input->post('role'),
            ];
            if ($this->User_model->insert_user($data)) {
                $this->session->set_flashdata('success', 'Pendaftaran Berhasil, silakan login.');
                redirect('auth/login');
            } else {
                $this->session->set_flashdata('error', 'Pendaftaran Gagal, silakan coba lagi.');
                redirect('auth/register');
            }
        }
    }
    public function process_login(){
        $username=$this->input->post('username');
        $password=$this->input->post('password');
        $user=$this->User_model->check_user('$username,$password');
        if($user){
            $this->session->set_underdata([
                'user_id'=>$user->id,
                'username'=>$user->username,
                'role'=>$user->role,
                'logged_in'=>TRUE
            ]);

            $this->redirect_by_role($user->role);
        }else{
            $this->session->set_flashdata('error','Username dan Password salah');
            redirect('auth/login');
        }
    }
    private function redirect_by_role($role){
        switch($role){
            case 'admin':
                redirect('dashboard');
                break;
                case 'user':
                    redirect('user/dasboard');
                    break;
                default:
                redirect('auth/login');
        }
    }
    public function logout(){
        $thhis->session->sess_destroy();
        redirect('auth/login');
    }
}
