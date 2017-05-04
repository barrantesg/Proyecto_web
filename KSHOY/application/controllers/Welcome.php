<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	    	 public function __construct()
		{
			parent::__construct();
		}
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('Registro_Usuarios');
  }

public function TablaUsers()
{
	$this->load->view('TablaUsuarios');
}

public function carga_actualiza()
{
	$this->load->view('Actualiza_Usuarios');
}

public function carga_login()
{
	$this->load->view('Inicio_Sesion');
}

//Autentifica el usuario
	public function autenticar() {
	$user = $this->input->post('user');
	$pass = $this->input->post('pass');

	$this->load->model('Usuario');
	$r = $this->Usuario->autenticar($user, $pass);


	if(sizeof($r) > 0) {
		echo '<script language="javascript">alert("Acesso correcto");</script>';
	 		 redirect('/', 'refresh');

				//redirect('');
			}
	else {
		 echo '<script language="javascript">alert("Acceso Invalido");</script>';
				 redirect('/', 'refresh');

	}
}

	public function cargarUsers(){

		$this->load->model('Usuario');

		$data['users'] = $this->Usuario->cargar_users();

			$this->load->view('TablaUsuarios',$data);
	}

	// Carga el formulario para edtar los usuarios
	 public function editarUsuarios()
{
			 $this->load->model('Usuario');
	 $id['id'] =$_GET['id'];

	 $data['ride']=$this->Usuario->buscarUsuario($id);

	$this->load->view('Actualiza_Usuarios',$data);
					//redirect('');
}


	function guardarUsuario() {

	  $this->load->model('Usuario');

	  $user['cedula'] = $this->input->post('cedula');
		$user['nombre'] = $this->input->post('nombre');
		$user['apellido_uno'] = $this->input->post('ape1');
		$user['apellido_dos'] = $this->input->post('ape2');
		$user['telefono'] = $this->input->post('tel');
	  $user['direccion'] = $this->input->post('dir');
	  $user['email'] = $this->input->post('email');
	  $user['tipo_usuario'] = $this->input->post('tipo_usuario');
	  $user['usuario'] = $this->input->post('usuario');
	  $user['contrasena'] = $this->input->post('password');

		var_dump($user);

	  $comprobar=$this->Usuario->validarexiste($user['usuario']);

	  if(sizeof($comprobar) > 0){

	      echo '<script language="javascript">alert("El usuario ya existe");</script>';

	  }
	  else{
	         $result = $this->Usuario->nuevo_usuario($user);
					  //  redirect('');
	  }

	}

	//Carga el formulario para actualizar usuarios
public function actualizarUsuario() {
			$id['id'] =$_GET['id'];

			$user['cedula'] = $this->input->post('cedula');
			$user['nombre'] = $this->input->post('nombre');
			$user['apellido_uno'] = $this->input->post('ape1');
			$user['apellido_dos'] = $this->input->post('ape2');
			$user['telefono'] = $this->input->post('tel');
		  $user['direccion'] = $this->input->post('dir');
		  $user['email'] = $this->input->post('email');
		  $user['tipo_usuario'] = $this->input->post('tipo_usuario');
		  $user['usuario'] = $this->input->post('usuario');
		  $user['contrasena'] = $this->input->post('password');

		  $user_user['id']=$var->id;

					 $result = $this->Usuario->actualizarUser($id['id'],$user_user);

				// redirect('');
}

}
