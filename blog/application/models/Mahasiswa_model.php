<?php

// Buat Class
class Mahasiswa_model extends CI_Model{
    //  Buat Struktur Data
    private $table = 'mahasiswa';

    public function getALL(){
        // select *form mahasiswa
       $query = $this->db->get($this->table); 
       return $query->result();
    }

}
?>