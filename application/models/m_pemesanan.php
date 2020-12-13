<?php 

	class m_pemesanan extends CI_Model {

		function __construct()
		{
			parent::__construct();
		}

		function getAll()
		{
			$q = $this->db->select('*')
					 ->from('pemesanan')
					 ->get();

			return $q->result();
		}


		function getAllJoin()
		{
			$q = $this->db->select('pemesanan.id_pemesanan, pemesanan.id_mobil, pemesanan.nama_pemesan, pemesanan.notlp_pemesan, pemesanan.waktu_pengambilan, pemesanan.waktu_pengembalian, pemesanan.lokasi_pengambilan, pemesanan.lokasi_pengembalian,
				pemesanan.tanggal_pemesanan,
				mobil.merk_mobil,
				mobil.no_polisi,
				mobil.warna,
				mobil.jumlah_kursi')
					 ->from('pemesanan, mobil')
					 ->where('pemesanan.id_mobil = mobil.id_mobil')
					 ->get();

			return $q->result();
		}

		public function getById($xid)
		{
			$q = $this->db->select('*')->from('pemesanan')->where('id_pemesanan',$xid)->get();

			return $q->result();
		}


		public function insertData($data)
		{
			$this->db->insert('pemesanan',$data);
		}

		public function updateData($data,$xid)
		{
			$this->db->where('id_pemesanan',$xid);
			$this->db->update('pemesanan',$data);
		}

		public function hapusData($id)
		{
			$this->db->where('id_pemesanan',$id);
			$this->db->delete('pemesanan');
		}


		public function hapusDataOwner($id)
		{
			$this->db->where('id_owner',$id);
			$this->db->delete('pemesanan');
		}

	}


 ?>