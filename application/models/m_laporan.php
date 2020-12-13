<?php 

	class m_laporan extends CI_Model {

		function __construct()
		{
			parent::__construct();
		}

		function getAll()
		{
			$q = $this->db->select('*')
					 ->from('laporan')
					 ->get();

			return $q->result();
		}

		function getAllJoin()
		{
			$q = $this->db->select('laporan.id_laporan, laporan.id_peminjaman, laporan.id_pengembalian,  pemesanan.nama_pemesan, pemesanan.tanggal_pemesanan, pemesanan.waktu_pengambilan, pemesanan.waktu_pengembalian, pengembalian.tgl_seharusnya, pengembalian.ketelatan, pengembalian.denda,  peminjaman.total_harga')
					 ->from('laporan')
					 ->join('peminjaman', 'peminjaman.id_peminjaman = laporan.id_peminjaman')
					 ->join('pemesanan', 'pemesanan.id_pemesanan = laporan.id_pemesanan')
					 ->join('pengembalian', 'pengembalian.id_pengembalian = laporan.id_pengembalian')
					 ->get();

			return $q->result();
		}

		public function getById($xid)
		{
			$q = $this->db->select('*')->from('laporan')->where('id_laporan',$xid)->get();

			return $q->result();
		}


		public function insertData($data)
		{
			$this->db->insert('laporan',$data);
		}

		public function updateData($data,$xid)
		{
			$this->db->where('id_laporan',$xid);
			$this->db->update('laporan',$data);
		}

		public function hapusData($id)
		{
			$this->db->where('id_laporan',$id);
			$this->db->delete('laporan');
		}

	}


 ?>