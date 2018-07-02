<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pasien extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		if($this->session->userdata('logged_in')){
			$session_data= $this->session->userdata('logged_in');
			$data['username']=$session_data['username'];
			$level=$data['level']=$session_data['level'];
			if($level!='user'){
				redirect('pasien','refresh');
			}
		}else{
			redirect('','refresh');
		}
	}

	public function index()
	{
		$session_data= $this->session->userdata('logged_in');
		$data['username']=$session_data['username'];
		$data['level']=$session_data['level'];
		$username=$session_data['username'];
		$this->load->model('Kamar_model');
		$data['tersedia']=$this->Kamar_model->kamarKosong()->num_rows();
		
		$this->load->model('Function_model');
		$data['user']=$this->Function_model->tampilPasien($username);
		$this->load->view('pasien/home_pasien',$data);
	}
	public function about()
	{
		$session_data= $this->session->userdata('logged_in');
		$data['username']=$session_data['username'];
		$data['level']=$session_data['level'];
		$username=$session_data['username'];
		
		$this->load->model('Function_model');
		$data['user']=$this->Function_model->tampilPasien($username);
		$this->load->view('pasien/about',$data);
	}

	public function profilePasien($username)
	{
		$session_data= $this->session->userdata('logged_in');
		$data['username']=$session_data['username'];
		$data['level']=$session_data['level'];
		$this->load->model('Function_model');
		$data['user']=$this->Function_model->tampilPasien($username);
		$this->load->view('pasien/profile',$data);
	}

}

/* End of file Pegawai.php */
/* Location: ./application/controllers/Pegawai.php */