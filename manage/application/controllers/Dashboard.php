<?php
defined('BASEPATH') OR exit('No direct script access allowed');
Class Dashboard extends CI_Controller {
	
	function __construct(){
		parent::__construct();

		if(! $this->session->userdata('adminid')) {
			redirect('login');
		}
	}

	public function index(){
		$this->load->view('dashboard');
	}

}
