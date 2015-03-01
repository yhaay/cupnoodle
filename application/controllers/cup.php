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
		$this->load->view ( 'footer' );
	}
}
?>