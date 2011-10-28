<?php

class account extends CI_Controller {

	function __construct()
    {
        // this is your constructor
        parent::__construct();
		$this->load->model('account_model');
		
    }
		
	function index() {
	
		$this->load->view('account');
	
	}

	function add_cat() {
		
		$data = array(
			'name' => $this->input->post('cat')
		);
		
		
		$this->account_model->add_cats($data); 
		$this->index();
		
	}
	
	
		
}