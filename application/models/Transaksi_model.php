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

	public function tampilBiayaKamar($id_pasien)
	{
		$this->db->where('fk_pasien', $id_pasien);
		$query= $this->db->get('transaksi');
		//$this->db->join('*', 'user.username = pegawai.username', 'inner');
		return $query->result();	
	}

	public function nota($id_pasien)
	{
		 $this->db->select('*');
		 $this->db->from('transaksi');
		 $this->db->join('pasien','pasien.username=transaksi.fk_pasien');
		 $query = $this->db->get();
		 return $query->result();
	}

	public function transaksiNonTunai($id){
		$total=$this->input->post('total');
		$jumlah=$this->input->post('jumlah');
		$sisa=$total-$jumlah;
		$data = array(
			'fk_pasien' => $this->input->post('id_pasien'),
			'jumlah' => $sisa,
			);
		$this->db->where('fk_pasien',$id);
		$this->db->update('transaksi', $data);

	}
	// public function paymentPasien($id)
	// {
	// 	$tagihan=$this->input->post('jumlah');
	// 	$jumlah=$
	// 	$total = ($tagihan-jumlahTransaksi());

	// 	$object = array(		
	// 		'jumlah' => $total,
	// 	);
	// 	$this->db->where('id_pasien', $id);
	// 	$this->db->update('transaksi', $object);

	// }


}

/* End of file Transaksi_model.php */
/* Location: ./application/models/Transaksi_model.php */