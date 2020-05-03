<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang extends CI_Controller {

	    function __construct(){
    	parent::__construct();
    	$this->load->model('m_barang');
    }

	public function index(){

		$data['barang'] = $this->m_barang->tampil_data()->result();

		$this->load->view('v_header');
		$this->load->view('barang/v_barang',$data);
		$this->load->view('v_footer');
	}
	public function tambah()
	{
		$this->load->view('v_header');
		$this->load->view('barang/v_tambah');
		$this->load->view('v_footer');
	}

	public function tambah_aksi()
	{
		$nama_barang = $this->input->post('nama_barang');
		$kondisi = $this->input->post('kondisi');
		$stok = $this->input->post('stok');
		$harga_satuan = $this->input->post('harga_satuan');

		$data =  array(
		  'nama_barang' => $nama_barang,
		  'kondisi' => $kondisi,
		  'stok' => $stok,
		  'harga_satuan' => $harga_satuan,
		);
		$this->m_barang->simpan_data($data);

		redirect('barang');
	}

	public function edit($id){
		
		$where =  array('id_barang'=>$id);
		$data['barang'] = $this->m_barang->edit_data($where)->result();

		$this->load->view('v_header');
		$this->load->view('barang/v_edit',$data);
		$this->load->view('v_footer');
	}

	public function edit_aksi()
	{

		$id = $this->input->post('id');
		$nama_barang = $this->input->post('nama_barang');
		$kondisi = $this->input->post('kondisi');
		$stok = $this->input->post('stok');
		$harga_satuan = $this->input->post('harga_satuan');

		$data =  array(
		  'nama_barang' => $nama_barang,
		  'kondisi' => $kondisi,
		  'stok' => $stok,
		  'harga_satuan' => $harga_satuan,
		);
		$where = array('id_barang'=>$id);
		$this->m_barang->update_data($where,$data);

		redirect('barang');
	}

	public function hapus($id){
		$where = array('id_barang'=>$id);
		$this->m_barang->hapus_data($where);
			
		redirect('barang');
	}
}
