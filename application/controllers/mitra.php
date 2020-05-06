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
        $this->load->model('m_mitra');
        $dat = $this->session->userdata('mitra');
        if(empty($dat)){
            $this->load->view('m_login');
        }
        $pas['pasien'] = $this->m_mitra->getPasien($dat['id']);
		if ($this->input->post('keyword')) {
			$pas['pasien'] = $this->m_mitra->cariDataPasien($dat['id']);
		}
        $this->load->view('v_mitra', $pas);
    }
    
    public function login(){
        $this->load->model('m_mitra');
        
        $this->form_validation->set_rules('username','Username', 'required');
        $this->form_validation->set_rules('password','Password', 'required');
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
    public function logout()
    {
        $this->session->sess_destroy();
        redirect('user', 'refresh');
    }

    public function hapus($id)
	{
		$this->m_mitra->hapusBooking($id);
		redirect('mitra/index', 'refresh');
    }
    
    public function showDoctor()
	{
        $dat = $this->session->userdata('mitra');
        $data['dokter'] = $this->m_mitra->getDokter($dat['id']);
        $this->load->view('v_dokter', $data);
    }

    public function hapusDokter($id)
	{
        if($this->m_mitra->getBooking($id) > 0){
            $this->session->set_flashdata('flash');
            echo '<script>alert("Ada Pasien yang Membooking Dokter");</script>';
        }
        else{
            $this->m_mitra->deleteDokter($id);
            redirect('mitra/showDoctor', 'refresh');
        }
        redirect('mitra/showDoctor', 'refresh');
    }

    public function tambahDokter(){
		$this->load->view('tambah');
		$this->form_validation->set_rules("nama", "nama", 'required');
		$this->form_validation->set_rules("waktu", "waktu", 'required');
		$this->form_validation->set_rules("spesialis", "spesialis", 'required');
		//conditon in form_validation, if user input form = false, then load page "tambah" again
		if($this->form_validation->run()){
			$this->m_mitra->tambahDokter();
			redirect('mitra/showDoctor', 'refresh');
		}
    }
    public function cariDoctor(){
        $keyword = $this->input->post('keyword_dokter');
        $dat = $this->session->userdata('mitra');
        $data['dokter'] = $this->m_mitra->cariDokter($dat['id'], $keyword);
        $this->load->view('v_dokter', $data);
    }
    public function profile(){
        $dat = $this->session->userdata('mitra');
        $data['mitra'] = $this->m_mitra->id_mitra($dat['nama'])->row_array();
        $this->load->view('mitra_profile', $data);
    }

    public function show($id){
        $data['mitra'] = $this->m_mitra->liat($id);
        $this->load->view('edit_dokter', $data);
    }

    public function editt(){
		$this->form_validation->set_rules("nama", "nama", 'required');
		$this->form_validation->set_rules("waktu", "waktu", 'required');
		$this->form_validation->set_rules("spesialis", "spesialis", 'required');
		if($this->form_validation->run()){
			$this->m_mitra->update();
			redirect('mitra/showDoctor', 'refresh');
		}
    }

    public function editmitra(){
        $dat = $this->session->userdata('mitra');
        $data['mitra'] = $this->m_mitra->tampil($dat['id']);
        $this->load->view('form_edit_mitra',$data);
    }

    public function edit_mitra(){
        $this->form_validation->set_rules("namamitra", "namamitra", 'required');
		$this->form_validation->set_rules("waktu", "waktu", 'required');
		$this->form_validation->set_rules("alamat", "alamat", 'required');
		if($this->form_validation->run() == true){
			$this->m_mitra->update_mitra();
			redirect('mitra/index', 'refresh');
		}
    }

    public function do_upload()
        {
            $img = $_FILES['img'];
            if($img != ''){}    
                $config['upload_path']          =  './assets/uploads';//isi dengan nama folder temoat menyimpan gambar
                $config['allowed_types']        =  'gif|jpg|png|jfif';//isi dengan format/tipe gambar yang diterima

                $this->load->library('upload', $config);

                //lengkapi kondisi berikut
                if ( ! $this->upload->do_upload('img'))
                {
                        die();
                }
                else
                {
                        $img = $this->upload->data('file_name');
                        $this->m_mitra->photo($img);
			            redirect('mitra/profile');
                }
        }
    }
?>