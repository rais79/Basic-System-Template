<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Logs extends My_Db_Model {

	function __construct()
	{
		parent::__construct();
		$this->_table = 'logs';
	}
	
	public function get_logs()
	{
		$args = func_get_args();
		if(count($args)>1 || is_array($args[0])):
			$this->db->where($args[0]);
		else:
			$this->db->where('id', $args[0]);
		endif;
		$this->db->order_by('datelog', 'ASC');	
		return $this->db->get($this->_table)->result();
	}
}
	