<?php

class Jobs_model extends CI_Model {
	
	function get_listings() {
		
		$q = $this->db->get('jobs');
		return $q->result();
		
	}
	
	function get_cats() {
		
		$q = $this->db->get('categories');
		return $q->result();
		
	}
	
	function add_listing($data){
	
		$this->db->insert('jobs', $data);
		return;	
		
	}
	
	function update_listing($data){
		
		$this->db->where('id', 14);
		$this->db->update('jobs', $data);
	}
	
	function delete_listing($data){
		
		//$this->db->where('id', $this->uri->segment(3));
		$this->db->delete('jobs', $data);
		
	}
}