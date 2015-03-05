<?php
class Cup extends CI_Controller {
	function __construct() {
		parent::__construct ();
	}
	public function index() {
		$this->load->view ( 'head' );
		$this->load->view ( 'footer' );
	}
	function info($idx) {
		$this->load->view ( 'head' );
		$this->load->view ( 'cup_info', array (
				'idx' => $idx 
		) );
		if ($this->session->userdata ( 'is_login' ) == TRUE) {
			$this->load->view ( 'comment_write' );
		}
		$this->load->model ( 'comment_model' );
		$comment = $this->comment_model->get ( array (
				'cupnoodleidx' => $idx,
				'num' => 10 
		) );
		$this->load->view ( 'comment_list', array (
				'comment' => $comment 
		) );
		$this->load->view ( 'footer' );
	}
}
?>