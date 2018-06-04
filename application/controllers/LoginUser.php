<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginUser extends CI_Controller {

	public function index()
	{
		$this->load->view('home');
	}

	public function cekLogin()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('username', 'username', 'trim|required');
		$this->form_validation->set_rules('password', 'password', 'trim|required|callback_cekDb');
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('home');
		} else {
			redirect('pegawai/home_pegawai','refresh');
		}
	}

	public function cekDb($password)
	{
		$this->load->model('ModelUser');
		$username=$this->input->post('username');
		$result = $this->user->login($username, $password);
		if ($result) {
			$sess_array=array();
			foreach ($result as $key) {
				$sess_array = array('id' => $key->id, 'username'=>$key->username,'level'=>$key->level);
				$this->session->set_userdata('logged_in', $sess_array);
			}
			return true;
		}else{
			$this->form_validation->set_message('cekDb',"Login Gagal! Username dan password salah!");
			return false;
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('logged_in');
		$this->session->sess_destroy();
		redirect('login','refresh');
	}

	public function insertUser()
	{
		$this->load->helper('url', 'form');
		$this->load->library('form_validation');
		$this->load->model('User');
		
		$this->form_validation->set_rules('username', 'username', 'trim|required');
		$this->form_validation->set_rules('password', 'password', 'trim|required');
		
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('tambah_user_view');
		} else {
			$this->User->insert();
			$this->load->view('tambah_user_sukses');	
			
		}
	}

	public function register()
	{
		$this->load->view('tambah_user_view');
	}
}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */