<?php
defined('BASEPATH') OR exit('No direct script access allowed');
Class Product extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->model('Manage_Product_Model');
		$this->load->model('Manage_Category_Model');
		if(! $this->session->userdata('adminid')) {
			redirect('login');
		}
	}

	public function index(){
		$productlist = $this->Manage_Product_Model->getproductlist();
		$this->load->view('product_detail',['productlist'=>$productlist]);
	}

	public function addproduct(){
		$categorylist = $this->Manage_Category_Model->getcategorylist();
		$this->load->view('add_product',['categorylist'=>$categorylist]);
	}

	public function insertproduct(){

		$product_image = "placeholder.jpg";

		if($_FILES['product_image']['name'] != '') {
			$product_image = $this->Manage_Product_Model->single_file_upload('product_image', 'product', 'jpg|gif|png|jpeg', 0, $_FILES['product_image']['name']);
		}

		$data = array(
			'product_title' => $_REQUEST['productname'],
			'product_slug' => $_REQUEST['productslug'],
			'product_sku' => $_REQUEST['productsku'],
			'product_cat_id' => $_REQUEST['productcategory'],
			'product_description' =>$_REQUEST['product_desc'],
			'product_image'=>$product_image,
			'created_date' => date('Y-m-d H:i:s'),
			'isActive' => $_REQUEST['productstatus'],
		);
		
		$response = $this->Manage_Product_Model->addproduct($data);

		redirect('product');
	}

	public function editForm($id){
		$categorydetails = $this->Manage_Category_Model->getcategorydetails($id);
		$this->load->view('category_edit',['categorydetails'=>$categorydetails]);
	}

	public function editcategory(){
		$data = array(
			'category_name' => $_REQUEST['categoryname'],
			'category_slug' => $_REQUEST['categoryslug'],
			'parent_category' => $_REQUEST['parentcategory'],
			'category_type' => $_REQUEST['categorytype'],
			'category_status' => $_REQUEST['categorystatus'],
			'updated_date' => date('Y-m-d H:i:s'),
		);
		
		$response = $this->Manage_Category_Model->editcategory($_REQUEST['categoryid'], $data);

		redirect('Category');
	}


}