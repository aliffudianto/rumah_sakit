<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pegawai extends CI_Controller {

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
		$this->load->view('home');
	}

	public function halamanPegawai()
	{
		$session_data= $this->session->userdata('logged_in');
		$data['username']=$session_data['username'];
		$data['level']=$session_data['level'];
		$this->load->model('Function_model');
		$this->load->model('Transaksi_model');
		//$data['user']=$this->Function_model->tampilUser($username);
		$data['jumlah']=$this->Function_model->totalPasien();
		$data['nKamar']=$this->Function_model->jumlahKamar();
		$data['nTransaksi']=$this->Transaksi_model->jumlahTransaksi();

		$this->load->view('pegawai/home_pegawai',$data);
	}

	public function profile($username)
	{
		$session_data= $this->session->userdata('logged_in');
		$data['username']=$session_data['username'];
		$data['level']=$session_data['level'];
		$this->load->model('Function_model');
		$this->load->model('Transaksi_model');
		//$data['user']=$this->Function_model->tampilUser($username);
		$data['jumlah']=$this->Function_model->totalPasien();
		$data['nKamar']=$this->Function_model->jumlahKamar();
		$data['nTransaksi']=$this->Transaksi_model->jumlahTransaksi();
		$data['admin']=$this->Function_model->tampilUser($username);
		$this->load->view('pegawai/profile',$data);
	}

	public function halamanPasien($username)
	{
		$session_data= $this->session->userdata('logged_in');
		$data['username']=$session_data['username'];
		$data['level']=$session_data['level'];
		$this->load->model('Function_model');
		$this->load->model('Transaksi_model');
		//$data['user']=$this->Function_model->tampilUser($username);
		$data['jumlah']=$this->Function_model->totalPasien();
		$data['nKamar']=$this->Function_model->jumlahKamar();
		$data['nTransaksi']=$this->Transaksi_model->jumlahTransaksi();

		$data['biodata_pasien']=$this->Function_model->tampilDataDetailsPasien();
		$this->load->view('pegawai/home_pasien',$data);
	}

	public function dataKamar()
	{
		$session_data= $this->session->userdata('logged_in');
		$data['username']=$session_data['username'];
		$data['level']=$session_data['level'];
		$this->load->model('Function_model');
		$this->load->model('Transaksi_model');
		//$data['user']=$this->Function_model->tampilUser($username);
		$data['jumlah']=$this->Function_model->totalPasien();
		$data['nKamar']=$this->Function_model->jumlahKamar();
		$data['nTransaksi']=$this->Transaksi_model->jumlahTransaksi();
		$this->load->view('pegawai/home_kamar');
	}

	public function jsKamar()
	{
		$this->load->model('Function_model');
		$result['dataKamar']=$this->Function_model->tampilDataKamar();
		header("Content-Type: application/json");
        echo json_encode($result);
	}







	public function kamarAktif()
	{
		$this->load->model('Function_model');
		$active['dataKamar']=$this->Function_model->dataKamarAktif();
		$this->load->view('pegawai/kamar_aktif', $active);
	}

	public function viewTransaksi()
	{	
		$session_data= $this->session->userdata('logged_in');
		$data['username']=$session_data['username'];
		$data['level']=$session_data['level'];
		$this->load->model('Function_model');
		$this->load->model('Transaksi_model');

		$data['jumlah']=$this->Function_model->totalPasien();
		$data['nKamar']=$this->Function_model->jumlahKamar();
		$data['nTransaksi']=$this->Transaksi_model->jumlahTransaksi();
		$this->load->view('pegawai/data_transaksi',$data);
	}

	public function dataTransaksi()
	{	
		$this->load->model('Function_model');
		$result['data_transaksi']=$this->Function_model->tampilDataTransaksi();
		header("Content-Type: application/json");
        echo json_encode($result);
	}

	public function createPasien()
	{
		$this->load->helper('url','form');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('nama', 'Nama', 'trim|required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'trim|required');
		$this->form_validation->set_rules('no', 'Nomor Hp', 'trim|required');
		//$this->form_validation->set_rules('foto', 'Foto', 'trim|required');

		$this->load->model('Function_model');

			if ($this->form_validation->run() ==FALSE) {
				$this->load->view('pegawai/daftar_pasien');
			}else{
				$config['upload_path'] = './assets/uploads/';
				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_size'] = '10000';
				$config['max_width'] = '1024';
				$config['max_height'] = '768';

				$this->load->library('upload', $config);
				
				if(! $this->upload->do_upload('foto')){
					$error = array('error' =>$this->upload->display_errors());
					$this->load->view('daftar_pasien', $error);
				}else{
					$this->Function_model->createUser();
					$this->Function_model->insertDataPasien();
					

				}
			}	
	}

	public function updatePasien($id_pasien){
		$this->load->helper('url','form');
		$this->load->library('form_validation');

		$this->form_validation->set_rules('nama', 'Nama', 'trim|required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'trim|required');
		$this->form_validation->set_rules('no', 'Nomor Hp', 'trim|required');

		$this->load->model('Function_model');
		$data['pasien']=$this->Function_model->seleksiPasien($id_pasien);

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('pegawai/update_pasien', $data);
		} else {
			$this->Function_model->updatePasien($id_pasien);
			echo "edit sukses";
		}
	}

	public function deletePasien($id_pasien)
	{
		$this->load->helper('url','form');
		$this->load->library('form_validation');
		$this->load->model('Function_model');

		$this->Function_model->hapusPasien($id_pasien);
		$data['biodata_pasien']=$this->Function_model->tampilDataDetailsPasien();

		$this->load->view('pegawai/home_pasien',$data);

	}

	public function tambahKamar(){
        $this->load->model('Function_model');
        $this->Pasien_model->addKamar();
    }

    public function hapusKamar()
    {
        $this->load->model('Function_model');
        $id = $this->input->post('id_kamar'); 
        $this->Pasien_model->deleteKamar($id);
    }
     public function editKamar()
    {
       $this->load->model('Function_model');
       $id=$this->input->post('id_kamar');
       $this->Pasien_model->updateKamar($id);


	
    }
	
}

/* End of file Pegawai.php */
/* Location: ./application/controllers/Pegawai.php */