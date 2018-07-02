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
				redirect('pegawai/halamanPegawai','refresh');
			}
		}else{
			redirect('','refresh');
		}
	}

	public function index()
	{
		$this->load->view('pasien/home_pasien');
	}

	public function profilepasien($username)
	{
		$session_data= $this->session->userdata('logged_in');
		$data['username']=$session_data['username'];
		$data['level']=$session_data['level'];
		$this->load->model('Function_model');
		$this->load->model('Transaksi_model');
		$data['user']=$this->Function_model->tampilUser($username);
		$data['jumlah']=$this->Function_model->totalPasien();
		$data['nKamar']=$this->Function_model->jumlahKamar();
		$data['nTransaksi']=$this->Transaksi_model->jumlahTransaksi();
		$data['admin']=$this->Function_model->tampilUser($username);
		$this->load->view('pasien/profilepasien',$data);
	}

}

/* End of file Pegawai.php */
/* Location: ./application/controllers/Pegawai.php */