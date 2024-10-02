<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Principal extends CI_Controller {

	public $datos = array(
			"principal" => false,
			"sitio_titulo" => "Bienvenido!",
			"sitio_empresa" => "Lulu",
			"sitio_dominio" => "www.lulu.com",
			"sitio_url" => "https://lulu.com"
		);

	public function index()
	{
		$this->datos["principal"] = true;

		$this->load->view('plantilla/head', $this->datos);
		$this->load->view('paginas/inicio');
		$this->load->view('plantilla/footer');
	}


	public function apt($archivo)
	{

		$this->datos["sitio_titulo"] = "".$archivo;
		
		$this->load->view('plantilla/head', $this->datos);
		$this->load->view('paginas/'.$archivo);
		$this->load->view('plantilla/footer');
	}
}
