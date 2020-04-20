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

    }
	public function index()
	{
        // $this->load->model('m_user');
        // $dat = $this->session->userdata('user');
        // if(empty($dat)){
            $this->load->view('login');
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
		$this->form_validation->set_rules('password','Password', 'required');
		$this->form_validation->set_rules('phonenumber','Phonenumber', 'required');
		$this->form_validation->set_rules('address','Address', 'required|trim');

		if($this->form_validation->run() == false){
			$this->load->view('signup');
		}
		else{
			//echo "Data berhasil ditambahkan";

			$data = [
				'username' => $this->input->post('username'),
				'name' => $this->input->post('name'),
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
			if($dat['role'] == 1){
				$data = array(
					'nama' => $username,
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
		$this->load->view('header');
		$this->load->view('show_mitra', $data);
		$this->load->view('footer');
	}

	public function showMitra_c()
	{
		$data['mitra'] = $this->m_user->liatmitra_c();
		$this->load->view('header');
		$this->load->view('show_mitra', $data);
		$this->load->view('footer');
	}
	public function dokterMitra($id){
		$data['dokter'] = $this->m_user->dataDokter($id);
		$this->load->view('header');
		$this->load->view('table_dokter', $data);
		$this->load->view('footer');
	}
	public function prebooking($id){
		$data['dokter'] = $this->m_user->showPreBook($id);
		$this->load->view('header');
		$this->load->view('booking', $data);

		$this->form_validation->set_rules('keterangan','keterangan', 'required');

		if($this->form_validation->run() == false){

		}
		else{
			$this->m_user->tambahBooking();
			redirect('user/home');
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
}
?>