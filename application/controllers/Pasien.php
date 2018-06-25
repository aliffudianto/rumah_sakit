<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pasien extends CI_Controller {

	public function index()
	{
		$this->load->view('pasien/home_pasien');
	}

}

/* End of file Pegawai.php */
/* Location: ./application/controllers/Pegawai.php */