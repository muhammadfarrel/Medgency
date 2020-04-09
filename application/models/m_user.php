<?php
 // write your name and student id here
class M_user extends CI_model
{

    public function insertUser($data)
    {
        //use query builder to get data table "mahasiswa"
        $this->db->insert('user',$data);
    }

    public function login($table,$where){		
		return $this->db->get_where($table,$where);
    }
    
    public function cari_id($username)
    {
        return $this->db->get_where('user', ['username' => $username]);
    }
}
?>