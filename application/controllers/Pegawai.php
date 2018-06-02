<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pegawai extends CI_Controller {

	public function index()
	{
		$this->load->view('home');
	}

	public function halamanPegawai()
	{
		$this->load->model('Function_model');
		//$data['user']=$this->Function_model->tampilUser($username);
		$data['jumlah']=$this->Function_model->totalPasien();
		$this->load->view('pegawai/home_pegawai',$data);
	}

	public function profile($username)
	{
		$this->load->model('Function_model');
		$data['admin']=$this->Function_model->tampilUser($username);
		$this->load->view('pegawai/profile',$data);
	}

	public function halamanPasien($username)
	{
		$this->load->model('Function_model');
		$data['biodata_pasien']=$this->Function_model->tampilDataDetailsPasien();
		$data['user']=$this->Function_model->tampilUser($username);
		$data['jumlah']=$this->Function_model->totalPasien();
		$this->load->view('pegawai/home_pasien',$data);
	}

	public function dataKamar()
	{
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
		$active['dataKamar']=$this->Function_model->tampilDataKamar();
		$this->load->view('pegawai/kamar_aktif', $active);
	}

	public function viewTransaksi()
	{	
		$this->load->model('Function_model');
		//$data['user']=$this->Function_model->tampilUser($username);
		$data['jumlah']=$this->Function_model->totalPasien();
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

	public function updatePasien($id_pasien){
		$this->load->helper('url','form');
		$this->load->library('form_validation');

		$this->form_validation->set_rules('nama', 'Nama', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'trim|required');
		$this->form_validation->set_rules('no_hp', 'Nomor Hp', 'trim|required');

		$this->load->model('Function_model');
		$data['pasien']=$this->Function_model->seleksiPasien($id_pasien);

		if ($this->form_validation->run() == FALSE) {
			echo "Berhasil Update";
		} else {
			echo "Gagal Update";		
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