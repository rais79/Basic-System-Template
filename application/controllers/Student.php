<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Student extends My_Public {
	
	var $dir = "Student";
	var $navbar = "student/navbar";

	function __construct()
	{
		parent::__construct();
		if(!$this->session->userdata('logged_in'))
        {
        	$this->session->unset_userdata('logged_in');
        	$this->session->set_flashdata('status','Timeout, Please login'); 
            redirect('Welcome/loginpage');
			exit;
        }
	}
	
	public function index()
	{
		$data['navbar'] = $this->navbar;
		$data['content'] = $this->dir."/testcontent";
		$this->load->view($this->my_template, $data);
	}
	
	public function listlog()
	{
		$data['navbar'] = $this->navbar;
		$data['content'] = $this->dir."/listlog";
		$data['list'] = $this->Logs->get_logs(array('studentid' => $this->session->userdata('logged_in')['userid']));
		$this->load->view($this->my_template, $data);	
	}
	
	public function log()
	{
		//var_dump(!$this->session->userdata('logged_in'));
		if($_POST):
			$insert_data['datelog'] = $this->input->post('tarikhsatu');
			$insert_data['updated_at'] = date('Y-m-d H:i:s');
			$insert_data['logs'] = $this->input->post('log');
			$insert_data['duration'] = $this->input->post('jam');
			$insert_data['studentid'] = $this->session->userdata('logged_in')['userid'];
			
			$result = $this->Logs->insert($insert_data);
			if($result):
				$this->session->set_flashdata('error', 'success insert: id='.$result);
				redirect($this->dir.'/log','refresh');
			else:
				$this->session->set_flashdata('error', 'Insert Fail');
				redirect($this->dir.'/log','refresh');
			endif;
		endif;
		$data['navbar'] = $this->navbar;
		$data['content'] = $this->dir."/logli";
		$this->load->view($this->my_template, $data);
	}
	
	public function dellog()
	{
		$id = $this->uri->segment('3');
		$this->Logs->delete($id);
		$this->session->set_flashdata('error', 'Delete Success: id='.$id);
		redirect($this->dir.'/listlog','refresh');
	}
	
	public function editlog()
	{
		if($_POST):
			$data['datelog'] = $this->input->post('tarikhsatu');
			$data['updated_at'] = date('Y-m-d H:i:s');
			$data['logs'] = $this->input->post('log');
			$data['duration'] = $this->input->post('jam');
			$id = $this->input->post('id');
			$this->Logs->update($id, $data);
			$this->session->set_flashdata('error', 'Update Success');
			redirect($this->dir.'/listlog','refresh');
		endif;
		$id = $this->uri->segment('3');
		$data['list'] = $this->Logs->get_many($id);		
		$data['navbar'] = $this->navbar;
		$data['content'] = $this->dir."/editlogli";
		$this->load->view($this->my_template, $data);
	}	
	
}
