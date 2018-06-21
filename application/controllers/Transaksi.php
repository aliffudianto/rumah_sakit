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

	public function biayaKamar()
	{		
		//echo $id_pasien;
		$this->load->model('Transaksi_model');
		$this->load->helper('url','form');
		$this->load->library('form_validation');
		//$id=$this->input->post('id_pasien');
		$id_pasien=$this->input->post('id_pasien');

		$data['total']=$this->Transaksi_model->tampilBiayaKamar($id_pasien);
			if(!$data['total']){
				echo "<script>alert('pasien tidak valid')</script>";
				redirect('pegawai/halamanPegawai','refresh');
			}else{
		$this->load->view('pegawai/pembayaran',$data);
	}
	}

	public function bayarKamar()
	{		
		$this->load->helper('url','form');
		$this->load->library('form_validation');

		$this->form_validation->set_rules('jumlah', 'Masukkan Jumlah Nominal', 'trim|required');
	
		$this->load->model('Transaksi_model');

		//$uang=$this->input->post('jumlah');
		$id=$this->input->post('id_pasien');
		$this->Transaksi_model->transaksiNonTunai($id);
	
		if ($this->form_validation->run() == FALSE) {
			echo "Pembayaran gagal";
		} else {
			$id_pasien=$this->input->post('id_pasien');
			$data['jml']=$this->input->post('jumlah');
			$data['total']=$this->Transaksi_model->tampilBiayaKamar($id_pasien);
			$this->load->view('pegawai/nota_pembayaran',$data);
		}
	}

	public function cetakNota(){

		$this->load->library('pdf');
		$this->load->model('Transaksi_model');
			$id_pasien=$this->input->post('id_pasien');
			$data['jml']=$this->input->post('jumlah');
			$data['total']=$this->Transaksi_model->tampilBiayaKamar($id_pasien);
			$this->load->view('pegawai/nota_pembayaran',$data);
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