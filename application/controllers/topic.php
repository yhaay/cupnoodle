<?php
if (! defined ( 'BASEPATH' ))
	exit ( 'No direct script access allowed' );

class Topic extends CI_controller {
	public function index() {
		$this->load->view ( 'head' );
		$this->load->view ( 'main' );
		$this->load->view ( 'footer' );
	}
	public function get($id) {
		$this->load->view ( 'head' );
		$this->load->view ( 'get', array (
				'id' => $id 
		) );
		$this->load->view ( 'footer' );
	}
}

?>