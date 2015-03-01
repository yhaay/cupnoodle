<?php
class Cupnoodle_model extends CI_Model {
	
	function __construct() {
		parent::__construct ();
	}
	
	function get_best($num) {
		$this->db->select('name,rate,filepath');
		$this->db->order_by('rate','desc');
		$this->db->limit($num);
		$query = $this->db->get('CUPNOODLE');
		return $query->result();
	}
}
?>