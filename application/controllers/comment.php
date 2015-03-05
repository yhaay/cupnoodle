<?php
class Comment extends CI_Controller {
	function __construct() {
		parent::__construct ();
	}
	function write() {
		$this->load->view ( 'head' );
		
		$this->load->model ( 'comment_model' );
		$this->comment_model->add ( array (
				'useridx' => $this->session->userdata ( 'useridx' ),
				'nickname' => $this->session->userdata ( 'nickname' ),
				'description' => $this->input->post ( 'description' ),
				'cupnoodleidx' => $this->input->post ( 'cupnoodleidx' ) 
		) );
		
		$this->load->helper ( 'url' );
		redirect ( '/cup/info/' . $this->input->post ( 'cupnoodleidx' ) );
		
		$this->load->view ( 'footer' );
	}
}
?>