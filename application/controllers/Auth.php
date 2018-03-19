<?php

	/**
	* 
	*/
	class Auth extends CI_Controller
	{
		
		public function login()
		{
			if ($this->input->post()){
				$this->load->model('M_login');
				if ($this->M_login->validation(['username'=>$this->input->post('username'),'password'=>$this->input->post('password')]) <= 0){
					echo "Username atau password Tidak ada";
				}
				else{
					$this->session->set_userdata('id',$this->input->post('username'));
					redirect('chat');
				}
			}
			$this->load->view('login');
		}

		public function registrasi()
		{
			if ($this->input->post()){
				$this->load->model('M_login');
				if ($this->M_login->save(['username' => $this->input->post('username'),'password'=>$this->input->post('password'),'nama'=>$this->input->post('nama')])){
					redirect('auth/login');
				}
				else{
					
				}
			}
			$this->load->view('registrasi');
		}
	}
?>