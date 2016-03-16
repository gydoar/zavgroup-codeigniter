<?php 
	/**
	* 
	*/
	class Login extends CI_Controller
	{
		
		public function index(){
			$user		= $this->input->post('user');
			$password   = $this->input->post('password');

			$this->load->model('user');
			$fila = $this->user->getUser($user);

			if($fila != null){
				if($fila->$password == $password){

					$data = array(
					'email' => $user,
					'id'    => $fila->id,
					'login' => true
					);

					$this->session->set_userdata($data);

				}else{
					header("Location: " . base_url());
				}
			}else{
				header("Location: " . base_url());
			}
			

		}
	}
 ?>