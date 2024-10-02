<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Noticias extends CI_Controller {

	public $datos = array(
			"principal" => false,
			"sitio_titulo" => "Bienvenido!",
			"sitio_empresa" => "Lulu",
			"sitio_dominio" => "www.lulu.com",
			"sitio_url" => "https://lulu.com"
		);

	public function index()
	{
		$noticias = array();

		$noticias[] = array(
			"Titulo" => "Noticia 1",
			"contenido" => " 1Lorem	Lorem ipsum, dolor sit amet consectetur adipisicing elit. Facere perferendis aliquid nobis odio deserunt corporis doloremque. Assumenda eveniet facilis amet! Maxime, illo tenetur reprehenderit numquam obcaecati voluptatum culpa, quia eius."
		);


		$noticias[] = array(
			"Titulo" => "Noticia 2",
			"contenido" => " 2Lorem	Lorem ipsum, dolor sit amet consectetur adipisicing elit. Facere perferendis aliquid nobis odio deserunt corporis doloremque. Assumenda eveniet facilis amet! Maxime, illo tenetur reprehenderit numquam obcaecati voluptatum culpa, quia eius."
		);


		$noticias[] = array(
			"Titulo" => "Noticia 2",
			"contenido" => " 3 Lorem	Lorem ipsum, dolor sit amet consectetur adipisicing elit. Facere perferendis aliquid nobis odio deserunt corporis doloremque. Assumenda eveniet facilis amet! Maxime, illo tenetur reprehenderit numquam obcaecati voluptatum culpa, quia eius."
		);

		$area_publicidad = $this->load->view('componentes/publicidad_vertical', null, true);

		$this->load->view('plantilla/head', $this->datos);
		$this->load->view('paginas/noticias', array("noticias" => $noticias));
		$this->load->view('plantilla/footer');
	}
	
}
