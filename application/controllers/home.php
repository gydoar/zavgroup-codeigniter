<?php 

/**
*  Primer Controlador para imprimir Hola mundo
*/
class Home extends CI_Controller
{
	
	public function index()
	{
		//$this->session->sess_destroy();
		$data = array('title' => 'Home');
		$this->load->view("/guest/head", $data);

		$data = array('app' => 'Blog');
		$this->load->view('/guest/nav', $data);

		$data = array('post' => 'Blog', 'descripcion' => 'Bienvenido a mi página web con Codeigniter');
		$this->load->view("/guest/header", $data);

		$result = $this->post->getPost();
		$data = array('consulta' => $result);
		$this->load->view('/guest/content', $data);
		$this->load->view('/guest/footer');


		//$this->load->view("home", $data);
		
	}
}

 ?>