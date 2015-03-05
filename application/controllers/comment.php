<?php
class Auth extends CI_Controller {
	function __construct() {
		parent::__construct ();
	}
	function register() {
		$this->load->view ( 'head' );
		
		$this->load->library ( 'form_validation' );
		
		$this->form_validation->set_rules ( 'email', '이메일 주소', 'required|valid_email|is_unique[user.email]' );
		$this->form_validation->set_rules ( 'nickname', '닉네임', 'required|min_length[5]|max_length[40]' );
		$this->form_validation->set_rules ( 'password', '비밀번호', 'required|min_length[6]|max_length[30]|matches[re_password]' );
		$this->form_validation->set_rules ( 're_password', '비밀번호 확인', 'required' );
		
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