<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Utils extends My_Db_Model {

	function __construct()
	{
		parent::__construct();
	}
	
	public function selecteddd($a, $b)
	{
		if($a==$b) echo "selected";
	}
}
	