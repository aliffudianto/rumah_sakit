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
		$this->load->view('pasien/home_pasien');
	}



}

/* End of file Pegawai.php */
/* Location: ./application/controllers/Pegawai.php */