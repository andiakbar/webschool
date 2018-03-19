<?php
/**
* 
*/
class Chat extends CI_Controller
{
	
	public function index()
	{
		if (!$this->session->userdata('id')){
			redirect('auth/login');
		}
		$this->load->view('chat');
	}
}

?>