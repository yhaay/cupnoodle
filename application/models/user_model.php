<?php
class User_model extends CI_Model {
	function __construct() {
		parent::__construct ();
	}
	function get($option) {
		$result = $this->db->get_where ( 'user', array (
				'email' => $option ['email'] 
		) )->row ();
		var_dump ( $this->db->last_query () );
		return $result;
	}
	function add($option) {
		$this->db->set ( 'email', $option ['email'] );
		$this->db->set ( 'password', $option ['password'] );
		$this->db->set ( 'writedate', 'NOW()', false );
		$this->db->insert ( 'user' );
		$result = $this->db->insert_id ();
		return $result;
	}
}