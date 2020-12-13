<?php 
defined('BASEPATH') OR exit('No Direct script access allowed');

class Page extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('m_pengguna');
		$this->load->model('m_owner');
		$this->load->model('m_mobil');

	}

	public function index()
	{
		$this->load->view('beforelogin/home');

	}

	public function kontak()
	{
		$this->load->view('beforelogin/contact');
	}

	public function daftarmobil()
	{
		$data['result'] = $this->m_mobil->getAll();
		$this->load->view('beforelogin/daftarmobil', $data);
	}

	public function daftarmobilByJumlahKursi()
	{
		$jml_kursi = $this->input->post('jumlah_kursi');
		$data['result'] = $this->m_mobil->getByJumlahKursi($jml_kursi);

		$this->load->view('beforelogin/daftarmobil', $data);
	}

	public function detail($id_mobil)
	{
		$data['result'] = $this->m_mobil->getById($id_mobil);
		$this->load->view('beforelogin/detail', $data);
	}

	public function about()
	{
		$this->load->view('beforelogin/about');
	}

	public function carapesan()
	{
		$this->load->view('beforelogin/carapesan');
	}

	public function login()
	{
		$this->load->view('beforelogin/login');
	}

	public function proseslogin(){
		$data['username'] = $this->input->post('username');
		$data['password'] = $this->input->post('password');

		$id=$this->m_pengguna->login($data);

		if ($id != null) {
			$result = $id->result_array();
			$_SESSION['id_pengguna'] = $result[0]['id_pengguna'];
			$_SESSION['logged_in'] = true;
			$_SESSION['username'] = $result[0]['username'];

			if ($_SESSION['username'] == 'admin') {
				$data['result'] = $this->m_owner->getAll();
				$this->load->view('admin/owner/owner', $data);
				
			}else{
				
				$this->home();
			}
		}else{
			
			echo "Gagal Login";
		}
	}

	public function home(){
		if ($_SESSION['logged_in']) {

			$data['result'] = $this->m_mobil->getAll();
			$this->load->view('afterlogin/home', $data);
		}else{
			echo "Belum Login";
		}
	}


	public function registrasi()
	{
		$this->load->view('beforelogin/registrasi');
	}

	public function prosesRegis(){
			$data['nama_pengguna'] = $this->input->post('nama_pengguna');
			$data['username'] = $this->input->post('username');
			$data['no_ktp'] = $this->input->post('no_ktp');
			$data['alamat'] = $this->input->post('alamat');
			$data['notlp_pengguna'] = $this->input->post('notlp_pengguna');
			$data['email'] = $this->input->post('email');
			$data['password'] = $this->input->post('password');
			
			$this->m_pengguna->insertData($data);
			$this->login();
	
	}


}
?>