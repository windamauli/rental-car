<?php 
defined('BASEPATH') OR exit('No Direct script access allowed');

class Pageafterlogin extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('m_pengguna');
		$this->load->model('m_pemesanan');
		$this->load->model('m_mobil');
	}

	public function about(){
		if ($_SESSION['logged_in']) {

			$this->load->view('afterlogin/about');
		}else{
			echo "Belum Login";
		}
	}

	public function kontak(){
		if ($_SESSION['logged_in']) {

			$this->load->view('afterlogin/contact');
		}else{
			echo "Belum Login";
		}
	}

	public function daftarmobil(){
		if ($_SESSION['logged_in']) {

			$data['result'] = $this->m_mobil->getAll();
			$this->load->view('afterlogin/daftarmobil', $data);
		}else{
			echo "Belum Login";
		}
	}

	public function carapesan(){
		if ($_SESSION['logged_in']) {

			$this->load->view('afterlogin/carapesan');
		}else{
			echo "Belum Login";
		}
	}


	public function daftarmobilByJumlahKursi()
	{
		$jml_kursi = $this->input->post('jumlah_kursi');
		
		$data['result'] = $this->m_mobil->getByJumlahKursi($jml_kursi);

		$this->load->view('afterlogin/daftarmobil', $data);
	}

	public function detail($id_mobil){
		if ($_SESSION['logged_in']) {

			$data['result'] = $this->m_mobil->getById($id_mobil);
			$this->load->view('afterlogin/detail', $data);
		}else{
			echo "Belum Login";
		}
	}

	public function rentalmobil($id_mobil){
		if ($_SESSION['logged_in']) {

			$data['result'] = $this->m_mobil->getById($id_mobil);
			$this->load->view('afterlogin/rentalmobil', $data);
		}else{
			echo "Belum Login";
		}
	}

	public function pesan(){


		$data['tanggal_pemesanan'] = date("ymd");
		
		$data['lokasi_pengambilan'] = $this->input->post('lokasi_pengambilan');
		$data['lokasi_pengembalian'] = $this->input->post('lokasi_pengembalian');
		$data['waktu_pengambilan'] = $this->input->post('waktu_pengambilan');
		$data['waktu_pengembalian'] = $this->input->post('waktu_pengembalian');
		$data['id_mobil'] = $this->input->post('id_mobil');
		$data['nama_pemesan'] = $this->input->post('nama_pemesan');
		$data['notlp_pemesan'] = $this->input->post('notlp_pemesan');
			
		$this->m_pemesanan->insertData($data);

		if($data >= 1) {
         echo $this->session->set_flashdata('message', 'Pesanan anda berhasil..' . '<br>' . 'Silahkan tunggu SMS konfirmasi dari pihak kami, terimakasih.');
         	$this->rentalmobil(1);
            
        } else {
            echo $this->session->set_flashdata('message', 'anda gagal menginput data...!!!');
            $this->rentalmobil(1);
        }
	
	}



	function profile()
	{
		$id =  $_SESSION['id_pengguna'];
		$data['result'] = $this->m_pengguna->getById($id);
		$this->load->view('afterlogin/profile',$data);
	}

}