<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pegawai extends CI_Controller {

	public function index()
	{
		$this->load->view('home');
	}

	public function halamanPegawai()
	{
		$this->load->view('pegawai/home_pegawai');
	}

	public function profile($username)
	{
		$this->load->model('Function_model');
		$data['admin']=$this->Function_model->tampilUser($username);
		$this->load->view('pegawai/profile',$data);
	}

	public function halamanPasien()
	{
		$this->load->model('Function_model');
		$data['biodata_pasien']=$this->Function_model->tampilDataDetailsPasien();
		$this->load->view('pegawai/home_pasien',$data);
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
				$this->Function_model->insertDataPasien();
				$this->load->view('tambah_pegawai_sukses');
			}	
	}

	public function update($id_pasien){
		$this->load->helper('url','form');
		$this->load->library('form_validation');

		$this->form_validation->set_rules('nama', 'Nama', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'trim|required');
		$this->form_validation->set_rules('no_hp', 'Nomor Hp', 'trim|required');

		$this->load->model('Function_model');
		$data['pasien']=$this->Function_model->selectionOfPasien($id_pasien);

		if ($this->form_validation->run() == FALSE) {
			
		} else {
			
		}
	}


}

/* End of file Pegawai.php */
/* Location: ./application/controllers/Pegawai.php */