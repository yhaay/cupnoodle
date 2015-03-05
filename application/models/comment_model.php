<?php
class Comment_model extends CI_Model {
	function __construct() {
		parent::__construct ();
	}
	function get($option) {
		$this->db->select ( 'nickname,description' );
		$this->db->where ( 'cupnoodleidx', $option ['cupnoodleidx'] );
		$this->db->limit ( $option ['num'] );
		$query = $this->db->get ( 'comment' );
		return $query->result ();
	}
	function add($option) {
		$this->db->set ( 'useridx', $option ['useridx'] );
		$this->db->set ( 'nickname', $option ['nickname'] );
		$this->db->set ( 'description', $option ['description'] );
		$this->db->set ( 'cupnoodleidx', $option ['cupnoodleidx'] );
		$this->db->set ( 'writedate', 'NOW()', false );
		$this->db->insert ( 'comment' );
		$result = $this->db->insert_id ();
		return $result;
	}
}