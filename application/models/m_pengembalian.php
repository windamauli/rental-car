<?php 

	class m_pengembalian extends CI_Model {

		function __construct()
		{
			parent::__construct();
		}

		function getAll()
		{
			$q = $this->db->select('*')
					 ->from('pengembalian')
					 ->get();

			return $q->result();
		}

		function getAllJoin()
		{
			$q = $this->db->select('pengembalian.id_pengembalian, pengembalian.id_peminjaman,
				pengembalian.id_pengguna,
				pengembalian.tgl_pengembalian,
				pengembalian.tgl_seharusnya,
				pengembalian.ketelatan,
				pengembalian.denda,
				peminjaman.total_harga,
				pengguna.id_pengguna')
					 ->from('pengembalian')
					 ->join('peminjaman', 'peminjaman.id_peminjaman = pengembalian.id_peminjaman')
					 ->join('pengguna', 'pengguna.id_pengguna = pengembalian.id_pengguna')
					 ->get();

			return $q->result();
		}

		public function getById($xid)
		{
			$q = $this->db->select('*')->from('pengembalian')->where('id_pengembalian',$xid)->get();

			return $q->result();
		}


		public function insertData($data)
		{
			$this->db->insert('pengembalian',$data);
		}

		public function updateData($data,$xid)
		{
			$this->db->where('id_pengembalian',$xid);
			$this->db->update('pengembalian',$data);
		}

		public function hapusData($id)
		{
			$this->db->where('id_pengembalian',$id);
			$this->db->delete('pengembalian');
		}

	}


 ?>