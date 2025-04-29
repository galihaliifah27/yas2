<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berita_model extends CI_Model {

    public function get_all_berita() {
        return $this->db->get('berita')->result_array();
    }

    public function insert_berita($data) {
        return $this->db->insert('berita', $data);
    }

    public function delete_berita($id_berita){
        return $this->db->delete('berita',['id_berita'=>$id_berita]);
    }

    public function get_berita_by_id($id_berita) {
        return $this->db->get_where('berita', ['id_berita' =>$id_berita])->row_array();
    }
    
    public function update_berita($id, $data) {
        $this->db->where('id_berita', $id);
        return $this->db->update('berita', $data);
    }
   
}
