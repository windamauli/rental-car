<?php 

	class m_pengguna extends CI_Model {

		function __construct()
		{
			parent::__construct();
		}

		function getAll()
		{
			$q = $this->db->select('*')
					 ->from('pengguna')
					 ->get();

			return $q->result();
		}

		public function getById($xid)
		{
			$q = $this->db->select('*')->from('pengguna')->where('id_pengguna',$xid)->get();

			return $q->result();
		}


		public function insertData($data)
		{
			$this->db->insert('pengguna',$data);
		}

		public function updateData($data,$xid)
		{
			$this->db->where('id_pengguna',$xid);
			$this->db->update('pengguna',$data);
		}

		public function hapusData($id)
		{
			$this->db->where('id_pengguna',$id);
			$this->db->delete('pengguna');
		}

		public function login($data)
		{
		
			$cond = array('username' => $data['username'] ,'password' => $data['password'] );
			$this->db->select('*');
			$this->db->from('pengguna');
			$this->db->where($cond);
			$query = $this->db->get();
			if ($query->num_rows() > 0) {
				return $query;
			}else{
				return null;
			}
		}

	}


 ?>