<?php 

	class m_owner extends CI_Model {

		function __construct()
		{
			parent::__construct();
		}

		function getAll()
		{
			$q = $this->db->select('*')
					 ->from('owner')
					 ->get();

			return $q->result();
		}

		public function getById($xid)
		{
			$q = $this->db->select('*')->from('owner')->where('id_owner',$xid)->get();

			return $q->result();
		}


		public function insertData($data)
		{
			$this->db->insert('owner',$data);
		}

		public function updateData($data,$xid)
		{
			$this->db->where('id_owner',$xid);
			$this->db->update('owner',$data);
		}

		public function hapusData($id)
		{
			$this->db->where('id_owner',$id);
			$this->db->delete('owner');
		}

	}


 ?>