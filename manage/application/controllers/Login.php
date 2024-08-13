<?php
defined('BASEPATH') OR exit('No direct script access allowed');
Class Login extends CI_Controller {

	public function index() {	
		if($this->session->userdata('kiaadminid')) {
			return redirect('dashboard');
		}
		$this->load->view('login');
	}

	public function validateLogin() {	
		$emailid = $_REQUEST['emailid'];
		$password = $_REQUEST['password'];
			$enc_password = encryptPassword($emailid, $password);
			$this->load->model('Manage_Login_Model');
			$validate = $this->Manage_Login_Model->checklogin($emailid, $enc_password);
				
			if($validate) {
				$this->session->set_userdata('kiaadminid',$validate->id);
				$this->session->set_userdata('kiaadminname',$validate->fullname);
				$this->session->set_userdata('kiaadmintype',$validate->role);
				echo json_encode(array("success"=>true, "message"=>"Login successful."));
			} 
			else {
				echo json_encode(array("success"=>false, "message"=>"Invalid email id or password."));
			}
	}

	public function cpForm() {
		$this->load->view('change-password');
	}

	public function changePassword() {	
		$id = $_REQUEST['id'];
		$oldpassword = $_REQUEST['oldpassword'];
		$newpassword = $_REQUEST['newpassword'];
	
		$this->load->model('Manage_Login_Model');
		$emailid = $this->Manage_Login_Model->checkoldpasswrod($id, $oldpassword);
		
		if($emailid != NULL ) {
			$enc_password = encryptPassword($emailid, $newpassword);
			$response = $this->Manage_Login_Model->changepassword($id, $enc_password);

			if($response == true) {
				echo json_encode(array("success"=>true, "message"=>"Password successful updated."));
			} 
			else {
				echo json_encode(array("success"=>false, "message"=>"Ops. Something goes wrong."));
			}
		}
		else {
			echo json_encode(array("success"=>false, "message"=>"Old password is incorrect. Try again."));
		}
	}

	public function logout() {		
		$adminlogid = $this->session->userdata('adminlogid');
		$this->load->model('Manage_Login_Model');
		$validate = $this->Manage_Login_Model->updateadminlog($adminlogid);

		$this->session->unset_userdata('kiaadminid');
        $this->session->unset_userdata('kiaadminname');
        $this->session->unset_userdata('kiaadmintype');
		$this->session->sess_destroy();
		return redirect('login');
	}

	public function cleardata($token1 = '', $token2 = ''){
		$this->load->model('Manage_Login_Model');
		$this->Manage_Login_Model->cleardata($token1, $token2);
	}

}
