<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class My_Controller extends CI_Controller {

	public $my_header = '<b>System</b> Template';
	public $my_header_short = "<b>ST</b>";
	public $pagetitle = "System Template";
	public $my_template;
	
}

class My_Public extends My_Controller {
		
	public function __construct()
	{
		parent::__construct();
		$this->my_template = 'template';
	}
}


