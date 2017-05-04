<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cita extends CI_Controller {


	 public function __construct()
	{
		parent::__construct();
    $this->load->model('Cita_usuario');
	}

	public function index()
	{
		$this->load->view('Registro_Cita');

	}

	public function carga_actualiza()
	{
		$this->load->view('Actualiza_Cita');
	}

	public function cargarCitas(){

		$this->load->model('Cita_usuario');

		$data['cita'] = $this->Cita_usuario->cargar_citas();

			$this->load->view('Tabla_Citas',$data);
	}

	public function Tabla_Cita()
	{
		$this->load->view('Tabla_Citas');
	}

	// Carga el formulario para edtar las citas

	 public function editarCitas()
{
			 $this->load->model('Cita_Usuario');
	 $id['id'] =$_GET['id'];

	 $data['ride']=$this->Cita_Usuario->buscarCita($id);

	$this->load->view('Actualiza_Cita',$data);
					//redirect('');
}

  //Guarda la cita
function guardarCitas() {

  $this->load->model('Cita_usuario');
        $cita['fecha_actual'] = $this->input->post('fecha_actual');
		    $cita['fecha_cita'] = $this->input->post('fecha_cita');
        $cita['hora_cita'] = $this->input->post('hora_cita');
       	$cita['servicio'] = $this->input->post('servicio');
				$cita['cedula_cliente'] = $this->input->post('cedula_cliente');

        $result = $this->Cita_usuario->nuevaCita($cita);

         //redirect('');
}

//Carga el formulario para actualizar las citas

public function actualizarCita() {
		$id['id'] =$_GET['id'];

		$cita['fecha_actual'] = $this->input->post('fecha_actual');
		$cita['fecha_cita'] = $this->input->post('fecha_cita');
		$cita['hora_cita'] = $this->input->post('hora_cita');
		$cita['servicio'] = $this->input->post('servicio');
		$cita['cedula_cliente'] = $this->input->post('cedula_cliente');

		$cita_user['id']=$var->id;

				 $result = $this->Cita_Usuario->actualizaCita($id['id'],$cita_user);

			// redirect('');

}

}
