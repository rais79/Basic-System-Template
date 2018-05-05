<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends My_Public {

	public function index()
	{
		$data['navbar'] = "navbar_public";
		$data['content'] = "welcome";
		$this->load->view($this->my_template,$data);
	}

	public function loginpage()
	{
		$data['navbar'] = "navbar_public";
		$data['content'] = "landing_page";
		$this->load->view($this->my_template,$data);
	}
	
	public function login()
	{
		//var_dump($_POST);
		$login['userid'] = $this->input->post("userid");
		$login['password'] = md5($this->input->post("password"));
		$data['list'] = $this->users->get($login);
		if(!$data['list']==NULL)
		{
			$session_data = array(
			'userid' => $data['list']->userid
			);
		// Add user data in session
		$this->session->set_userdata('logged_in', $session_data);
		$this->session->set_userdata('level', $data['list']->level);
		if($data['list']->level==0)	redirect('Main');
		if($data['list']->level==1)	redirect('Student');
		}
		$this->session->set_flashdata('status','Wrong User ID / Password');
		redirect('Welcome/loginpage');
		//var_dump($this->session->userdata('logged_in'));
		//var_dump($data);
	}
	
	// Logout from admin page
	public function logout() {
	
		// Removing session data
		$sess_array = array(
		'userid' => ''
		);
		$this->session->unset_userdata('logged_in', $sess_array);
		$data['message_display'] = 'Successfully Logout';
		$this->session->set_flashdata('status','Logout Successful');
		redirect('Welcome/index');
		//$this->load->view('login_form', $data);
	}

}
