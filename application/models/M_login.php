<?php

	/**
	* 
	*/
	class M_login extends CI_Model
	{
		
		public function validation($kondition)
		{
			return $this->db->get_where('tbl_user',$kondition)->num_rows();
		}

		public function save($data)
		{
			return $this->db->insert('tbl_user',$data);
		}
	}
?>