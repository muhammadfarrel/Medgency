<?php
 // write your name and student id here
class M_mitra extends CI_model
{
    public function getDokter($id)
    {
        return $this->db->get_where('dokter', ['id_mitra' => $id])->result_array();
    }

    public function login_m($table,$where){		
		return $this->db->get_where($table,$where);
    }

    public function hapusBooking($id)
	{
		//use query builder to delete data based on id 
		$this->db->where("id", $id);
		$this->db->delete("booking");
    }

    public function getPasien($id)
    {
        $query = "SELECT `booking`.`id`,username, phonenumber,keterangan,`dokter`.`nama` FROM `booking` INNER JOIN `user` ON `booking`.`id_user`=`user`.`id` INNER JOIN `dokter` ON `dokter`.`id`=`booking`.`id_dokter` WHERE `booking`.`id_mitra` = '$id'";
        return $this->db->query($query)->result_array();
    }
    
    public function cariDataPasien($id)
	{
		$keyword = $this->input->post('keyword', true);
		$query = "SELECT `booking`.`id`,username, phonenumber,keterangan,`dokter`.`nama` FROM `booking` INNER JOIN `user` ON `booking`.`id_user`=`user`.`id` INNER JOIN `dokter` ON `dokter`.`id`=`booking`.`id_dokter` WHERE `booking`.`id_mitra` = '$id' AND (`user`.`username`LIKE '%$keyword%' OR `user`.`phonenumber`LIKE '%$keyword%' OR `dokter`.`nama`LIKE '%$keyword%')";
		return $this->db->query($query)->result_array();
    }
    
    public function id_mitra($username)
    {
        return $this->db->get_where('mitra', ['username' => $username]);
    }

    public function deleteDokter($id){
        $this->db->where("id", $id);
		$this->db->delete("dokter");
    }

    public function getBooking($id){
        $query = "SELECT * FROM `booking` WHERE `id_dokter` = '$id'";
        return $this->db->query($query)->num_rows();
    }

    public function tambahDokter()
	{
        $dat = $this->session->userdata('mitra');
		$data = [
            "id_mitra" => $dat['id'],
			"nama" => $this->input->post('nama', true),
			"spesialis" => $this->input->post('spesialis', true),
            "waktu" => $this->input->post('waktu', true),
		];
		$this->db->insert('dokter', $data);
    }
    
    public function cariDokter($id, $keyword){
        $query = "SELECT * FROM `dokter` WHERE `id_mitra` = '$id' AND (`nama` LIKE '%$keyword%' OR `spesialis` LIKE '%$keyword%' OR `waktu` LIKE '%$keyword%')";
        return $this->db->query($query)->result_array();
    }
}
?>