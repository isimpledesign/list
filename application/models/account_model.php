<?php

class Account_model extends CI_Model {
	
	
	
	function add_cats($data){
	
		$this->db->insert('categories', $data);
		return;	
		
	}
	
	
}