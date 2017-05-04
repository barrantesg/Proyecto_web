<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Negocio extends CI_Controller {


	 public function __construct()
	{
		parent::__construct();
    $this->load->model('Negocio_usuario');
	}

	public function index()
	{
		$this->load->view('Registro_Negocios');

	}

	public function cargarNegocios(){

		$this->load->model('Negocio_usuario');

		$data['negocio'] = $this->Negocio_usuario->cargar_negocios();

			$this->load->view('Tabla_Negocios',$data);
	}

	public function Tabla_Negocios()
	{
		$this->load->view('Tabla_Negocios');
	}

  //Guarda el negocio
function guardarNegocio() {

  $this->load->model('Negocio_usuario');
  $negocio['cedula_juridica'] = $this->input->post('cedula_juridica');
  $negocio['nombre'] = $this->input->post('nombre');
  $negocio['direccion'] = $this->input->post('direccion');
  $negocio['telefono'] = $this->input->post('telefono');
  $negocio['servicio'] = $this->input->post('servicio');
	$negocio['cedula_propietario'] = $this->input->post('cedula_propietario');
  $negocio['logo'] = $this->input->post('logo');

   $result = $this->Negocio_usuario->nuevoNegocio($negocio);

         //redirect('');
}
}
