<?php

class Jobs extends CI_Controller {

	function __construct()
    {
        // this is your constructor
        parent::__construct();
		$this->load->model('jobs_model');
		//$this->show_cats();
		
		
    }
		
	function index() {
		
		$data = array();
		
	$query = $this->jobs_model->get_listings();
	
	//print_r($query);
	
	if($query = $this->jobs_model->get_listings()){
		
		$data['records'] = $query;
	}
	   
		$this->load->view('jobs', $data, $this->show_cats());
		
		
	
	}
	
	function show_cats(){
		
		$data = array();
		
		$query = array(
			'title' => 'rgergreg'
		);
		
		$data['cats'] = $query;
		
		//$this->load->view('jobs', $data);
		
		
	}

	function add_listing() {
		
		$data = array(
			'title' => $this->input->post('title'),
			'body' => $this->input->post('body'),
			'category' => $this->input->post('normalSelect')
		);
		
		
		$this->jobs_model->add_listing($data);
		$this->index();
		
	}
	
	function delete_listing() {
		
		$data = array(
			'id' => $this->input->post('id')
		);
		
		
		$this->jobs_model->delete_listing($data);
		$this->index();
		
	}
	
		
}