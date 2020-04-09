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

    public function hapusDokter($id)
	{
		//use query builder to delete data based on id 
		$this->db->where("id", $id);
		$this->db->delete("dokter");
    }

    public function getPasien($id)
    {
        $query = "SELECT `booking`.`id`,username, phonenumber,keterangan,`dokter`.`nama` FROM `booking` INNER JOIN `user` ON `booking`.`id_user`=`user`.`id` INNER JOIN `dokter` ON `dokter`.`id`=`booking`.`id_dokter` WHERE `booking`.`id_mitra` = '$id'";
        return $this->db->query($query)->result_array();
    }
    
    public function cariDataDokter($id)
	{
		$keyword = $this->input->post('keyword', true);
		$query = "SELECT * FROM `dokter` WHERE id_mitra = '$id' and kerja LIKE 'on' and (nama LIKE '%$keyword%' OR spesialis LIKE '%$keyword%')";
		return $this->db->query($query)->result_array();
    }
    
    public function id_mitra($username)
    {
        return $this->db->get_where('mitra', ['username' => $username]);
    }
}
?>