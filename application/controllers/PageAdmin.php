<?php 
defined('BASEPATH') OR exit('No Direct script access allowed');

class PageAdmin extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('m_pengguna');
		$this->load->model('m_owner');
		$this->load->model('m_mobil');
		$this->load->model('m_pemesanan');
		$this->load->model('m_peminjaman');
		$this->load->model('m_pengembalian');
		$this->load->model('m_laporan');

	}

	public function owner(){
		if ($_SESSION['logged_in']) {

			$data['result'] = $this->m_owner->getAll();
			$this->load->view('admin/owner/owner', $data);

		}else{
			echo "Belum Login";
		}
	}

	public function formUpdateOwner($id_owner){
		if ($_SESSION['logged_in']) {

			$data['result'] = $this->m_owner->getById($id_owner);
			$this->load->view('admin/owner/update', $data);
		}else{
			echo "Belum Login";
		}
	}

	public function formInsertOwner(){
		if ($_SESSION['logged_in']) {

			$this->load->view('admin/owner/insert');
		}else{
			echo "Belum Login";
		}
	}

	function deleteOwner()
	{
		$id=  $this->uri->segment(3);
		$this->m_mobil->hapusDataOwner($id);
		$this->m_owner->hapusData($id);
		$this->owner();
		
	}

	public function updateOwner(){

		$xid = $this->input->post('id_owner');
		$data['nama_owner'] = $this->input->post('nama_owner');
		$data['notlp_owner'] = $this->input->post('notlp_owner');
		$data['alamat_owner'] = $this->input->post('alamat_owner');
			
		$this->m_owner->updateData($data, $xid);
		$this->owner();
	
	}

	public function insertOwner(){
		
		$data['nama_owner'] = $this->input->post('nama_owner');
		$data['notlp_owner'] = $this->input->post('notlp_owner');
		$data['alamat_owner'] = $this->input->post('alamat_owner');
			
		$this->m_owner->insertData($data);
		$this->owner();
	
	}

	public function mobil(){
		if ($_SESSION['logged_in']) {

			$data['resultmobil'] = $this->m_mobil->getAllJoin();
			$this->load->view('admin/mobil/mobil', $data);

		}else{
			echo "Belum Login";
		}
	}

	public function formUpdateMobil($id_mobil){
		if ($_SESSION['logged_in']) {

			$data['result'] = $this->m_mobil->getById($id_mobil);
			$this->load->view('admin/mobil/update', $data);
		}else{
			echo "Belum Login";
		}
	}

	public function updateMobil(){

		$xid = $this->input->post('id');
		$data['status'] = $this->input->post('status');	
		
		$this->m_mobil->updateData($data, $xid);
		$this->mobil();
	
	}

	function deleteMobil()
	{
		$id=  $this->uri->segment(3);
		$this->m_mobil->hapusData($id);
		$this->mobil();
		
	}

	public function formInsertMobil(){
		if ($_SESSION['logged_in']) {

			$data['result'] = $this->m_mobil->getAllJoin();
			$this->load->view('admin/mobil/insert', $data);
		}else{
			echo "Belum Login";
		}
	}

	public function insertMobil(){
		
		$data['id_owner'] = $this->input->post('id_owner');
		$data['merk_mobil'] = $this->input->post('merk_mobil');
		$data['warna'] = $this->input->post('warna');
		$data['no_polisi'] = $this->input->post('no_polisi');
		$data['no_mesin'] = $this->input->post('no_mesin');
		$data['no_bpkb'] = $this->input->post('no_bpkb');
		$data['jumlah_kursi'] = $this->input->post('jumlah_kursi');
		$data['status'] = $this->input->post('status');
		$data['harga'] = $this->input->post('harga');
		$data['image'] = $this->input->post('image');
			
		$this->m_mobil->insertData($data);
		$this->mobil();
	
	}

	public function user(){
		if ($_SESSION['logged_in']) {

			$data['result'] = $this->m_pengguna->getAll();
			$this->load->view('admin/user/user', $data);

		}else{
			echo "Belum Login";
		}
	}

	public function pemesanan(){
		if ($_SESSION['logged_in']) {

			$data['result'] = $this->m_pemesanan->getAllJoin();
			$this->load->view('admin/pemesanan/pemesanan', $data);

		}else{
			echo "Belum Login";
		}
	}

	function deletePemesanan()
	{
		$id=  $this->uri->segment(3);
		$this->m_pemesanan->hapusData($id);
		$this->pemesanan();
	}

	function deletePeminjaman()
	{
		$id=  $this->uri->segment(3);
		$this->m_peminjaman->hapusData($id);
		$this->peminjaman();
	}

	public function peminjaman(){
		if ($_SESSION['logged_in']) {

			$data['result'] = $this->m_peminjaman->getAllJoin();
			$this->load->view('admin/peminjaman/peminjaman', $data);

		}else{
			echo "Belum Login";
		}
	}

	public function formInsertPeminjaman(){
		if ($_SESSION['logged_in']) {

			$data['result'] = $this->m_pemesanan->getAllJoin();
			$this->load->view('admin/peminjaman/insert', $data);
		}else{
			echo "Belum Login";
		}
	}

	public function insertPeminjaman(){
		
		$data['id_pemesanan'] = $this->input->post('id_pemesanan');
		$data['total_harga'] = $this->input->post('total_harga');
		$data['uang_dp'] = $this->input->post('uang_dp');
		$data['jaminan'] = $this->input->post('jaminan');
			
		$this->m_peminjaman->insertData($data);
		$this->peminjaman();
	
	}

	public function pengembalian(){
		if ($_SESSION['logged_in']) {

			$data['result'] = $this->m_pengembalian->getAllJoin();
			$this->load->view('admin/pengembalian/pengembalian', $data);

		}else{
			echo "Belum Login";
		}
	}

	function deletePengembalian()
	{
		$id=  $this->uri->segment(3);
		$this->m_pengembalian->hapusData($id);
		$this->pengembalian();
	}

	public function formInsertPengembalian(){
		if ($_SESSION['logged_in']) {

			$data['result'] = $this->m_peminjaman->getAllJoin();
			$this->load->view('admin/pengembalian/insert', $data);
		}else{
			echo "Belum Login";
		}
	}

	public function insertPengembalian(){
		
		$data['id_peminjaman'] = $this->input->post('id_peminjaman');
		$data['id_pengguna'] = $this->input->post('id_pengguna');
		$data['tgl_pengembalian'] = $this->input->post('tgl_pengembalian');
		$data['tgl_seharusnya'] = $this->input->post('tgl_seharusnya');
		$data['ketelatan'] = $this->input->post('ketelatan');
		$data['denda'] = $this->input->post('denda');
			
		$this->m_pengembalian->insertData($data);
		$this->pengembalian();
	
	}


	public function laporan(){
		if ($_SESSION['logged_in']) {

			$data['result'] = $this->m_laporan->getAllJoin();
			$this->load->view('admin/laporan/laporan', $data);

		}else{
			echo "Belum Login";
		}
	}

	function deleteLaporan()
	{
		$id=  $this->uri->segment(3);
		$this->m_laporan->hapusData($id);
		$this->laporan();
	}
		

}
