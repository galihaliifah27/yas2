<?php

class User_model extends CI_Model {

    public function insert_user($data){
        return $this->db->insert('user', $data);
    }
    public function check_user($username, $password){
        $this->db->where('username',$username);
        $user = $this->db->get('user')->row();

        if($user && password_verify($password, $user->password)){
            return $user;
        }
        return false;
    }
}