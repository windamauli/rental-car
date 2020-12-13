<?php 

	class m_mobil extends CI_Model {

		function __construct()
		{
			parent::__construct();
		}

		function getAll()
		{
			$q = $this->db->select('*')
					 ->from('mobil')
					 ->get();

			return $q->result();
		}

		function getAllJoin()
		{
			$q = $this->db->select('mobil.id_mobil, mobil.id_owner, mobil.merk_mobil, mobil.warna, mobil.no_polisi, mobil.no_mesin, mobil.no_bpkb, mobil.jumlah_kursi, mobil.status, mobil.harga, mobil.image, owner.nama_owner')
					 ->from('mobil')
					 ->join('owner', 'mobil.id_owner = owner.id_owner')
					 ->get();

			return $q->result();
		}

		public function getById($xid)
		{
			$q = $this->db->select('*')->from('mobil')->where('id_mobil',$xid)->get();

			return $q->result();
		}

		public function getByJumlahKursi($jml_kursi)
		{
			$q = $this->db->select('*')->from('mobil')->where('jumlah_kursi',$jml_kursi)->get();

			return $q->result();
		}


		public function insertData($data)
		{
			$this->db->insert('mobil',$data);
		}

		public function updateData($data,$xid)
		{
		 	
			$this->db->where('id_mobil',$xid);
				
			$this->db->update('mobil',$data);
		}

		public function hapusData($id)
		{
			$this->db->where('id_mobil',$id);
			$this->db->delete('mobil');
		}

		public function hapusDataOwner($id)
		{
			$this->db->where('id_owner',$id);
			$this->db->delete('mobil');
		}

	}


 ?>