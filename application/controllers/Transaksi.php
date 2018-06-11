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

		$this->form_validation->set_rules('id_transaksi', 'Id Transaksi', 'trim|required');
		$this->form_validation->set_rules('biaya', 'Biaya', 'trim|required');
		$this->form_validation->set_rules('tanggal', 'Tanggal', 'trim|required');
	
		$this->load->model('Function_model');
		$data['pasien']=$this->Transaksi_model->transaksiNonTunai($id);

		if ($this->form_validation->run() == FALSE) {
			echo "Pembayaran Telah Berhasil";
		} else {
			echo "Pembayaran Gagal";		
		}
	}

	
		
}

/* End of file Transaksi.php */
/* Location: ./application/controllers/Transaksi.php */