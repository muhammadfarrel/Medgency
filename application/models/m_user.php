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
    public function liatmitra_rs()
    {
        $query = "SELECT * FROM `mitra` where jenis LIKE 'rumah sakit'";
        return $this->db->query($query)->result_array();
    }
    public function liatmitra_c()
    {
        $query = "SELECT * FROM `mitra` where jenis LIKE 'clinic'";
        return $this->db->query($query)->result_array();
    }
    public function dataDokter($id){
        $query = "SELECT * FROM `dokter` WHERE `id_mitra` = '$id'";
        return $this->db->query($query)->result_array();
    }

    public function showPreBook($id){
        $query = "SELECT * FROM `dokter` WHERE `id`='$id'";
        return $this->db->query($query)->row_array();
    }
    public function tambahBooking()
	{
		$data = [
            "id_user" => $this->input->post('id_user', true),
			"id_mitra" => $this->input->post('id_mitra', true),
			"id_dokter" => $this->input->post('id_dokter', true),
            "keterangan" => $this->input->post('keterangan', true),
		];
		$this->db->insert('booking', $data);
    }
}
?>