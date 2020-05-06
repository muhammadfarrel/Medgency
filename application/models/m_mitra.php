<?php
 
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
        $query = "SELECT `id_user`,`dokter`.`nama` AS `nama_dokter`,`mitra`.`nama` AS `nama_mitra`,`keterangan` FROM `booking` INNER JOIN `user` ON `booking`.`id_user`=`user`.`id` INNER JOIN `mitra` ON `mitra`.`id` = `booking`.`id_mitra` INNER JOIN `dokter` ON `dokter`.`id`=`booking`.`id_dokter` WHERE `booking`.`id` = '$id'";
        $arr = $this->db->query($query)->row_array();
        $id_user = $arr['id_user'];
        $mitra = $arr['nama_mitra'];
        $dokter = $arr['nama_dokter'];
        $ket = $arr['keterangan'];
        echo $id_user. " " . $mitra . " " . $dokter. " " .$ket;
        $quer = "INSERT INTO `riwayat` (`id`, `id_user`, `mitra`, `dokter`, `keterangan`) VALUES (NULL, '$id_user', '$mitra', '$dokter', '$ket')";
        $this->db->query($quer);
        
		$que = "DELETE FROM `booking` WHERE `booking`.`id` = '$id'";
		return $this->db->query($que);
    }

    public function getPasien($id)
    {
        $query = "SELECT `booking`.`id`,`user`.`nama` AS `nama_user`, phonenumber,keterangan,`dokter`.`nama` FROM `booking` INNER JOIN `user` ON `booking`.`id_user`=`user`.`id` INNER JOIN `dokter` ON `dokter`.`id`=`booking`.`id_dokter` WHERE `booking`.`id_mitra` = '$id'";
        return $this->db->query($query)->result_array();
    }
    
    public function cariDataPasien($id)
	{
		$keyword = $this->input->post('keyword', true);
		$query = "SELECT `booking`.`id`,`user`.`nama` AS `nama_user`, phonenumber,keterangan,`dokter`.`nama` FROM `booking` INNER JOIN `user` ON `booking`.`id_user`=`user`.`id` INNER JOIN `dokter` ON `dokter`.`id`=`booking`.`id_dokter` WHERE `booking`.`id_mitra` = '$id' AND (`user`.`nama`LIKE '%$keyword%' OR `user`.`phonenumber`LIKE '%$keyword%' OR `dokter`.`nama`LIKE '%$keyword%')";
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

    public function liat($id){
        $query = "SELECT * FROM `dokter` WHERE id = '$id'";
        return $this->db->query($query)->row_array();
    }

    public function update(){
        $nama = $this->input->post('nama', true);
        $spesialis = $this->input->post('spesialis', true);
        $waktu = $this->input->post('waktu', true);
        $id = $this->input->post('id', true);
        $query = "UPDATE `dokter` SET `nama` = '$nama', `spesialis` = '$spesialis', `waktu` = '$waktu' WHERE `dokter`.`id` = '$id'";
        return $this->db->query($query);
    }

    public function photo($url)
    {
        $dat = $this->session->userdata('mitra');
		$data = [
            "username" => $dat['nama'],
			"url" => $url
		];
		$this->db->insert('photo', $data);
    }

    public function tampil($id){
        $query = "SELECT * FROM `mitra` WHERE `id` = '$id'";
        return $this->db->query($query)->row_array();
    }

    public function update_mitra(){
        $data = $this->session->userdata('mitra');
        $dat = $data['id'];
        $nama = $this->input->post('namamitra',true);
        $alamat = $this->input->post('alamat', true);
        $waktu = $this->input->post('waktu', true);
        $query = "UPDATE `mitra` SET `nama` = '$nama', `address` = '$alamat', `waktu` = '$waktu' WHERE `mitra`.`id` = '$dat'";
        $this->db->query($query);
    }
}
?>