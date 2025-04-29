<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class matakuliah_model extends CI_Model {

    public function get_all_matakuliah() {
        return $this->db->get('matakuliah')->result_array();
    }

    public function insert_matakuliah($data) {
        return $this->db->insert('matakuliah', $data);
    }

    public function delete_matakuliah($kode_matakuliah){
        return $this->db->delete('matakuliah',['kode_matakuliah'=>$kode_matakuliah]);
    }

    public function get_matakuliah_by_kode($kode_matakuliah) {
        return $this->db->get_where('matakuliah', ['kode_matakuliah' =>$kode_matakuliah])->row_array();
    }
    
    public function update_matakuliah($kode_matakuliah, $data) {
        $this->db->where('kode_matakuliah', $kode_matakuliah);
        return $this->db->update('matakuliah', $data);
    }
   
}
