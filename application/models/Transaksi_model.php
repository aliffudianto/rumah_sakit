<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}

	public function jumlahTransaksi()
	{
		$transaksi=$this->db->get('transaksi');
		$total= $transaksi->num_rows();
		return $total;		
	}

	public function tampilBiayaKamar($id_transaksi)
	{
		$query=$this->db->query('select * from transaksi where id_pasien=id_transaksi');
		return $query->result();		
	}

	public function transaksiNonTunai($id){
		$data = array(
			'id_transaksi' => $this->input->post('id'),
			'jumlah' => $this->input->post('jumlah'),
			'tanggal' => $this->input->post('tanggal'),
			);
		$this->db->where('id_transaksi',$id);
		$this->db->update('transaksi', $data);
	}



}

/* End of file Transaksi_model.php */
/* Location: ./application/models/Transaksi_model.php */