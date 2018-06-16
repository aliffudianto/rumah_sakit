<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PesanKamar extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}

	public function index()
	{
		
	}

	public function addKamar()
	{
		$this->load->model('Kamar_model');
		$this->load->helper('url','form');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('kamar_kosong', 'Kamar', 'trim|required');
		$this->form_validation->set_rules('id_pasien', 'Pasien', 'trim|required');


		$data['kamar']=$this->Kamar_model->kamarKosong();

		//$this->load->view('pegawai/daftar_kamar',$data);

		if ($this->form_validation->run() == false) {
				$this->load->view('pegawai/daftar_kamar',$data);
			}else{
				$this->Kamar_model->addKamarPasien();
				echo "pendaftaran kamar telah berhasil";
			}	
	}



}

/* End of file PesanKamar.php */
/* Location: ./application/controllers/PesanKamar.php */