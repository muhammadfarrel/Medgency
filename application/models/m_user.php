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
    public function edit($data){
        $id = $data['id'];
        $email = $data['email'];
        $phone = $data['hp'];
        $address = $data['address'];
        $query = "UPDATE `user` SET `email` = '$email', `phonenumber` = '$phone', `address` = '$address' WHERE `user`.`id` = '$id'";
        $this->db->query($query);
    }
    public function dataJson(){
        return $this->db->get('about')->result();
    }
    public function history($id){
        $query = "SELECT * FROM `riwayat` WHERE `id_user` = '$id'";
        return $this->db->query($query)->result_array();
    }
    public function hapus_riwayat($id){
        $query = "DELETE FROM `riwayat` WHERE `riwayat`.`id` = '$id'";
        $this->db->query($query);
    }
    public function num(){
        $data = $this->session->userdata('user');
        $id = $data['id'];
        $query = "SELECT * FROM `booking` WHERE `id_user` = '$id'";
        return $this->db->query($query)->num_rows();
    }
    public function book($id){
        $query = "SELECT `dokter`.`nama` AS `nama_dokter`, `mitra`.`nama` AS `nama_mitra` FROM `booking` INNER JOIN `mitra` ON `mitra`.`id`=`booking`.`id_mitra` INNER JOIN `dokter` ON `dokter`.`id`=`booking`.`id_dokter` WHERE `id_user`='$id'";
        return $this->db->query($query)->row_array();
    }
}
?>