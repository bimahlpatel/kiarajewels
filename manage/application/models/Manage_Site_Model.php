<?php
defined('BASEPATH') OR exit('No direct script access allowed');
Class Manage_Site_Model extends CI_Model {


	public function getsite_setting(){
		$query = $this->db->get('company_setting');
		return $query->row();  
	}
	public function company_setting($id, $data){
		if($id==''){
			$this->db->insert('company_setting',$data);
			$company_setting = $this->db->insert_id();
			return ($this->db->affected_rows() != 1) ? false : true; 
		} else{
			$sql_query=$this->db->where('id', $id)
					->update('company_setting', $data); 
			return ($this->db->affected_rows() != 1) ? false : true; 
		}
		
	}

	public function getpagedetails($pagename){
		$query = $this->db->where('option_key',$pagename)
				->get('site_options');
		return $query->row();      
	}

	
	public function editpage($id, $data){
		$sql_query = $this->db->where('id', $id)
					->update('site_options', $data); 
		return $sql_query;
	}


	public function getsitesettings(){
		$settings = [];

		$query1 = $this->db->where('option_key', 'welcome-status')
					->get('site_options');
		$settings['welcomemodel'] = $query1->row(); 

		$query2 = $this->db->where('option_key', 'facebookpixel')
					->get('site_options');
		$settings['fbpixelvalue'] = $query2->row();

		$query3 = $this->db->where('option_key', 'facebookdomain')
					->get('site_options');
		$settings['fbdomainvalue'] = $query3->row();

		$query4 = $this->db->where('option_key', 'smssenderid')
					->get('site_options');
		$settings['smssenderid'] = $query4->row();

		$query5 = $this->db->where('option_key', 'fbaccesstoken')
			->get('site_options');
		$settings['fbaccesstoken'] = $query5->row();

		$query6 = $this->db->where('option_key', 'fbeventname')
			->get('site_options');
		$settings['fbeventname'] = $query6->row();

		$query7 = $this->db->where('option_key', 'fbeventid')
			->get('site_options');
		$settings['fbeventid'] = $query7->row();

		$query11 = $this->db->where('option_key', 'wpcampaignmain')
			->get('site_options');
		$settings['wpcampaignmain'] = $query11->row();

		$query12 = $this->db->where('option_key', 'wpcampaignoffer')
			->get('site_options');
		$settings['wpcampaignoffer'] = $query12->row();

		$query13 = $this->db->where('option_key', 'wpcampaignsuccess')
			->get('site_options');
		$settings['wpcampaignsuccess'] = $query13->row();

		return $settings;
	}

}

?>