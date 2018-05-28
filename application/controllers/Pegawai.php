<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pegawai extends CI_Controller {

	public function index()
	{
		$this->load->view('mainPage');
	}

	public function halamanPegawai()
	{
		$this->load->model('Function_model');
		$data['biodata_pasien']=$this->Function_model->tampilDataDetailsPasien();
		$this->load->view('home_pasien',$data);
	}

	public function create()
	{
		$this->load->helper('url','form');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('nama', 'Nama', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'trim|required');
		$this->form_validation->set_rules('no_hp', 'Nomor Hp', 'trim|required');

			if ($this->form_validation->run() ==FALSE) {
				$this->load->view('tambah_pegawai_view');
			}else{
				$this->Function_model->masukkanDataPasien();
				$this->load->view('tambah_pegawai_sukses');
			}	
	}

	public function update(){
		
	}
}

/* End of file Pegawai.php */
/* Location: ./application/controllers/Pegawai.php */