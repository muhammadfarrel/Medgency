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
        //LOAD LIBRARY FORM VALIDATION
        $this->load->library('form_validation');

    }
	public function index()
	{
        
        $this->load->view('login');
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
			//$this->session->set_flashdata('message','<div class="alert alert-success" role="alert"> Your account has been created, Please login</div>');
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
}
?>