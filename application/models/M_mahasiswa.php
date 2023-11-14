<?php 
defined("BASEPATH") OR exit("No direct script access allowed");

class M_mahasiswa extends CI_Model{
    public function getDataMahasiswa(){
        $this->db->select("*");
        $this->db->from("tb_mahasiswa");
        $query = $this->db->get();
        return $query->result();
    }
    public function InsertMhs($data){
        $this->db->insert("tb_mahasiswa",$data);
    }

    public function EditMhs($data, $id){
        $this->db->where('nim', $id);
        $this->db->update('tb_mahasiswa',$data);
    }
    public function getDataMhsDetail($id){
        $this->db->where('nim', $id);
        $query = $this->db->get('tb_mahasiswa');
        return $query->row();
    }
    public function deleteMhs($id){
        $this->db->where('nim', $id);
        $this->db->delete('tb_mahasiswa');
    }
}