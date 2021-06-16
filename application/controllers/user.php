<?php

class  User extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

    function __construct(){
        parent::__construct();
        //LOAD MODEL "M_USER"
		$this->load->model('m_user');
		$this->load->model('m_mitra');
        //LOAD LIBRARY FORM VALIDATION
        $this->load->library('form_validation');
		$this->load->library('unit_test');

    }
	public function index()
	{
        // $this->load->model('m_user');
        // $dat = $this->session->userdata('user');
        // if(empty($dat)){
		$this->load->view('login');

		// $test = 1 + 1;
		// $expected_result = 2;
		// $test_name = 'login page';

		// echo $this->unit->run($test, $expected_result, $test_name);
        // }
		// $this->load->view('header');
		// $this->load->view('v_home_user');
	}
	public function home(){
		$this->load->view('header');
		$this->load->view('v_home_user');
		$this->load->view('footer');
	}

	public function regis(){

        $this->load->model('m_user');
        $this->load->view('signup');
		
		$this->form_validation->set_rules('username','Username', 'required');
		$this->form_validation->set_rules('email','Email', 'required');
		$this->form_validation->set_rules('name','name', 'required');
		$this->form_validation->set_rules('password','Password', 'required');
		$this->form_validation->set_rules('phonenumber','Phonenumber', 'required');
		$this->form_validation->set_rules('address','Address', 'required|trim');

		if($this->form_validation->run() == false){
			$this->load->view('signup');
		}
		else{
			$data = [
				'username' => $this->input->post('username'),
				'nama' => $this->input->post('name'),
				'email' => $this->input->post('email'),
				'password' => $this->input->post('password'),
				'phonenumber' => $this->input->post('phonenumber'),
                'address' => $this->input->post('address'),
                'role' => '1'
			];
			$user = $this->input->post('username');
			$cek = $this->m_user->cari_id($user)->num_rows();
			if($cek>0){
				echo '<script>alert("Username Already Used, let`s try another one!");</script>';
			}
			// $this->session->set_flashdata('message','<div class="alert alert-success" role="alert"> Your account has been created, Please login</div>');
			else{
				$this->m_user->insertUser($data);
				redirect('user', 'refresh');
			}
		}
    }
    
    public function login(){

        $this->load->model('m_user');
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $where = array(
            'username' => $username,
            'password' => $password
			);
		$cek = $this->m_user->login("user",$where)->num_rows();
        if($cek > 0){
			$dat = $this->m_user->cari_id($username)->row_array();
			$nam = $this->m_user->cari_nama($dat['id'])->row_array();
			if($dat['role'] == 1){
				$data = array(
					'nama' => $username,
					'nama_user' => $nam['nama'],
					'id' => $dat['id']
				);
				$this->session->set_userdata('user',$data);
				$this->load->view('header');
				$this->load->view('v_home_user');
				$this->load->view('footer');
			}
            else{
				#rencana ke admin
			}
        }else{
            $this->load->view('login');
        }
	}
	
	public function logout()
    {
        $this->session->sess_destroy();
        redirect('user', 'refresh');
	}
	
	public function showMitra_rs()
	{
		$data['mitra'] = $this->m_user->liatmitra_rs();
		$data['nama'] = "Rumah sakit";
		$this->load->view('header');
		$this->load->view('show_mitra', $data);
		$this->load->view('footer');
	}

	public function showMitra_c()
	{
		$data['mitra'] = $this->m_user->liatmitra_c();
		$data['nama'] = "Klinik";
		$this->load->view('header');
		$this->load->view('show_mitra', $data);
		$this->load->view('footer');
	}
	public function dokterMitra($id){
		$data['dokter'] = $this->m_user->dataDokter($id);
		$this->load->view('header');
		$this->load->view('table_dokter', $data);
		// $this->load->view('footer');
	}
	public function prebooking($id){
		$data['dokter'] = $this->m_user->showPreBook($id);
		$this->load->view('header');
		$this->load->view('booking', $data);

		$this->form_validation->set_rules('keterangan','keterangan', 'required');

		if($this->form_validation->run() == false){

		}
		else{
			$i = $this->m_user->num();
			if($i>0){
				echo '<script>alert("Anda Sedang Booking dokter untuk konsultasi!");</script>';
			}
			else{
				$this->m_user->tambahBooking();
				redirect('user/home');
			}
		}
	}

	public function liatprofile(){
		$data = $this->session->userdata('user');
		$data['profile'] = $this->m_user->cari_id($data['nama'])->row_array();
		$this->load->view('header');
		$this->load->view('myprofile',$data);
		$this->load->view('footer');
	}
	public function editProfile(){
		$dat = [
			'id' => $this->input->post('id'),
			'email' => $this->input->post('email'),
			'hp' => $this->input->post('phonenumber'),
			'address' => $this->input->post('address')
		];
		$this->m_user->edit($dat);
		$dataa = $this->session->userdata('user');
		$data['profile'] = $this->m_user->cari_id($dataa['nama'])->row_array();
		$this->load->view('header');
		$this->load->view('myprofile',$data);
		$this->load->view('footer');
	}
	public function aboutUs()
	{
		$data['data'] = $this->m_user->dataJson();
		$this->load->view('header');
		$this->load->view('aboutus',$data);
		$this->load->view('footer');
	}
	public function riwayat(){
		$dataa = $this->session->userdata('user');
		$data['riwayat'] = $this->m_user->history($dataa['id']);
		$this->load->view('header');
		$this->load->view('riwayat',$data);
		// $this->load->view('footer');
	}
	public function hapusriwayat($id){
		$this->m_user->hapus_riwayat($id);
		$dataa = $this->session->userdata('user');
		$data['riwayat'] = $this->m_user->history($dataa['id']);
		$this->load->view('header');
		$this->load->view('riwayat',$data);
	}
	public function article()
	{
		$data['data'] = $this->m_user->dataArtikelJson();
		$this->load->view('header');
		$this->load->view('list_article',$data);
		$this->load->view('footer');
	}
	public function articlePage()
	{
		$id = $this->uri->segment(3);
		$data['data'] = $this->m_user->dataArtikel($id);
		$this->load->view('header');
		$this->load->view('articlepage',$data);
		$this->load->view('footer');
	}
	public function getBooking(){
		$data['booking'] = $this->m_user->getBook();
		if(!empty($data)){
			$this->load->view('header');
			$this->load->view('showBook', $data);
			// $this->load->view('footer');
		}
	}
	public function check_username_ada(){
		if($this->m_user->cari_id($_POST['username'])->num_rows()>0){
			echo '<label class="text-danger"><span class ="glyphicon glyphicon-remove"></span>Username Already Used</label>';
		}
		else{
			echo '<label class="text-success"><span class ="glyphicon glyphicon-ok"></span>Username Available</label>';
		}
	}
	public function hapus_book(){
		// $this->m_user->edit($dat);
		// $dataa = $this->session->userdata('user');
		// $data['profile'] = $this->m_user->cari_id($dataa['nama'])->row_array();
		// $this->load->view('header');
		// $this->load->view('myprofile',$data);
		// $this->load->view('footer');
		$this->m_user->hapus_b();
		$data['booking'] = $this->m_user->getBook();
		if(!empty($data)){
			$this->load->view('header');
			$this->load->view('showBook', $data);
			// $this->load->view('footer');
		}
	}
}
?>