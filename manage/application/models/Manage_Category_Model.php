<?php
defined('BASEPATH') OR exit('No direct script access allowed');
Class Manage_Category_Model extends CI_Model {

	public function getcategorylist(){
		$query = $this->db->where('category_status', 1)
				->order_by('category_id  asc')
				->get('category');
		return $query->result();      
	}

	public function getcategorydetails($id){
		$query = $this->db->where('category_id', $id)
				->get('category');
		return $query->row();      
	}

	public function addcategory($data){
		$this->db->insert('category',$data);
		$category = $this->db->insert_id();

		return ($this->db->affected_rows() != 1) ? false : true; 
	}

	public function editcategory($id, $data){
		$sql_query=$this->db->where('category_id', $id)
					->update('category', $data); 
		return $sql_query;
	}


	public function changestatus($statusid, $id){
		if($statusid == 1) {
			$data = array(
			   'category_status' => 0
			);
		}
		else {
			$data = array(
			   'category_status' => 1
			);
		}
		$sql_query=$this->db->where('category_id', $id)
					->update('category', $data); 
	}

	public function deletecategory($id){
		$data = array(
		   'isDelete' => 1
		);
		$sql_query=$this->db->where('category_id', $id)
					->update('category', $data); 
	}

}

