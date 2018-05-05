<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends My_Public {

	public function index()
	{
		$data['navbar'] = "user1/navbar";
		$data['content'] = "user1/testcontent";
		$this->load->view($this->my_template, $data);
	}
}
