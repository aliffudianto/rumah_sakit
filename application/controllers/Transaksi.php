<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		if($this->session->userdata('logged_in')){
			$session_data= $this->session->userdata('logged_in');
			$data['username']=$session_data['username'];
			$level=$data['level']=$session_data['level'];
			if($level!='admin'){
				redirect('pasien','refresh');
			}
		}else{
			redirect('loginUser','refresh');
		}
	}

	public function index()
	{	

	}

	public function biayaKamar($id_pasien)
	{		
		//echo $id_pasien;
		$this->load->model('Transaksi_model');
		$this->load->helper('url','form');
		$this->load->library('form_validation');
		//$id=$this->input->post('id_pasien');
		$data['total']=$this->Transaksi_model->tampilBiayaKamar($id_pasien);
		$this->load->view('pegawai/pembayaran',$data);
		
	}

	public function bayarKamar($id)
	{		
		$this->load->helper('url','form');
		$this->load->library('form_validation');

		$this->form_validation->set_rules('jumlah', 'Masukkan Jumlah Nominal', 'trim|required');
	
		$this->load->model('Transaksi_model');

		$uang=$this->input->post('jumlah');
		$dat[0]=$this->Transaksi_model->tampilBiayaKamar($id);

		$data=$this->Transaksi_model->transaksiNonTunai($id);
		echo $dat;
		if ($this->form_validation->run() == FALSE) {
			echo "Pembayaran gagal";
			echo $dat[0];
		} else {
			echo "Pembayaran Berhasil";		
		}
	}

	
	// public function payment($id)
	// {
	// 	$this->load->helper('url','form');
	// 	$this->load->library('form_validation');
	// 	$this->form_validation->set_rules('jumlah', 'Masukkan Jumlah Nominal', 'trim|required');
	// 	$this->load->model('Transaksi_model');

	// 	$data['pasien']=$this->Transaksi_model->paymentPasien($id);

	// 		if ($this->form_validation->run() == FALSE) {
	// 			echo "pembayaran gagal";
	// 		} else {
	// 			echo "pembayaran telah berhasil";
	// 		}
	// }

		
}

/* End of file Transaksi.php */
/* Location: ./application/controllers/Transaksi.php */