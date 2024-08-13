<?php
defined('BASEPATH') OR exit('No direct script access allowed');
Class Category extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->model('Manage_Category_Model');
		if(! $this->session->userdata('adminid')) {
			redirect('login');
		}
	}

	public function index(){
		$categorylist = $this->Manage_Category_Model->getcategorylist();
		$this->load->view('category_detail',['categorylist'=>$categorylist]);
	}

	public function addCategory(){
		$data = array(
			'category_name' => $_REQUEST['categoryname'],
			'category_slug' => $_REQUEST['categoryslug'],
			'parent_category' => $_REQUEST['parentcategory'],
			'category_type' => $_REQUEST['categorytype'],
			'category_status' => $_REQUEST['categorystatus'],
			'created_date' => date('Y-m-d H:i:s'),
		);
		
		$response = $this->Manage_Category_Model->addcategory($data);

		redirect('Category');
	}

	public function editForm($id){
		$this->load->model('Manage_Career_Model');
		$careerdetails = $this->Manage_Career_Model->getcareerdetails($id);
		$this->load->view('career-edit',['careerdetails'=>$careerdetails]);
	}

	public function editCareer(){
		$id = $_REQUEST['id'];
		
		$data = array(
			'rec_date' => date('Y-m-d H:i:s'),
			'title' => $_REQUEST['co_title'],
			'descriptions' => $_REQUEST['co_description'],
			'isActive' => 1
		);
		
		$this->load->model('Manage_Career_Model');
		$response = $this->Manage_Career_Model->editcareer($id, $data);

		redirect('career');
	}


}