<?php 

	class m_peminjaman extends CI_Model {

		function __construct()
		{
			parent::__construct();
		}

		function getAll()
		{
			$q = $this->db->select('*')
					 ->from('peminjaman')
					 ->get();

			return $q->result();
		}

		function getAllJoin()
		{
			$q = $this->db->select('peminjaman.id_peminjaman, peminjaman.id_pemesanan, peminjaman.total_harga, peminjaman.uang_dp, peminjaman.jaminan, pemesanan.nama_pemesan, pemesanan.waktu_pengembalian, pemesanan.lokasi_pengembalian')
					 ->from('peminjaman')
					 ->join('pemesanan', 'pemesanan.id_pemesanan = peminjaman.id_pemesanan')
					 ->get();

			return $q->result();
		}

		public function getById($xid)
		{
			$q = $this->db->select('*')->from('peminjaman')->where('id_peminjaman',$xid)->get();

			return $q->result();
		}


		public function insertData($data)
		{
			$this->db->insert('peminjaman',$data);
		}

		public function updateData($data,$xid)
		{
			$this->db->where('id_peminjaman',$xid);
			$this->db->update('peminjaman',$data);
		}

		public function hapusData($id)
		{
			$this->db->where('id_peminjaman',$id);
			$this->db->delete('peminjaman');
		}

	}


 ?>