<?php
defined('BASEPATH') OR exit('No direct script access allowed');
Class Infopage extends CI_Controller {
	
	public function index(){
		$this->load->view('index');
	}
}
