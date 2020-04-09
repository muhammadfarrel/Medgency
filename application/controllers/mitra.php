<?php

class  mitra extends CI_Controller {

    function __construct(){
        parent::__construct();
        //LOAD MODEL "M_USER"
        $this->load->model('m_mitra');
        //LOAD LIBRARY FORM VALIDATION
        $this->load->library('form_validation');

    }
	public function index()
	{
        $this->load->view('m_login');
    }
    
    public function login(){

        $this->load->model('m_mitra');
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $where = array(
            'username' => $username,
            'password' => $password
            );
        $cek = $this->m_mitra->login_m("mitra",$where)->num_rows();
        if($cek > 0){
			$dat = $this->m_mitra->id_mitra($username)->row_array();
			$data = array(
				'nama' => $username,
				'id' => $dat['id']
			);
            $this->session->set_userdata('mitra',$data);
            $pas['pasien'] = $this->m_mitra->getPasien($data['id']);
			$this->load->view('v_mitra', $pas);
        }else{
            $this->load->view('m_login');
        }
    }
    
}
?>