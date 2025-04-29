<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class loginmodel extends CI_Model {

    function data_login($table, $where) {
        return $this->db->get_where($table, $where);
    }

    public function get_user_data($username) {
        $this->db->select('role');
        $this->db->from('user');
        $this->db->where('username', $username);
        $query = $this->db->get();
        return $query->row();
    }

    public function get_user_data_by_username($username) {
        $this->db->select('role, username, password');
        $this->db->from('user');
        $this->db->where('username', $username);
        $query = $this->db->get();
        return $query->row();
    }
}
