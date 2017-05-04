<?php
class Usuario extends CI_Model{

     function __construct() {
        parent::__construct();
}
        function validarexiste($username) {
        $query = $this->db->get_where('usuarios',
         array('usuario' => $username));

        return $query->result_object();
        }

        //Auntentica al usuario
    function autenticar($user, $pass) {
    $query = $this->db->get_where('usuarios',
      array('usuario' => $user, 'contrasena' => $pass));

	  return $query->result_object();
  }

             //Registra un nuevo usuario
         function nuevo_usuario($data)
        {
              $this->db->insert('usuarios',$data);
        }

        //Actualiza los usuarios

     function actualizarUser($id,$data)
	{
      $this->db->where('id', $id);
      $this->db->update('usuarios', $data);
    }

        function cargar_users()
       {
         $query = $this->db->get_where('usuarios');

          return $query->result_array();

       }

       //Busca los usuarios por ID
       function buscarRide($id)
 {
    $query = $this->db->get_where('usuarios',array("id"=>$id['id']));
   return $query->result_array();
 }

 }
