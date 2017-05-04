<?php


    class Cita_usuario extends CI_Model{

         function __construct() {
         parent::__construct();
     }

     //Agrega un nueva cita
     function nuevaCita($data)
   {
      $this->db->insert('cita',$data);
   }

   function cargar_citas()
  {
    $query = $this->db->get_where('cita');

     return $query->result_array();

  }

  //Actualiza las citas
function actualizaCita($id,$data)
{
$this->db->where('id', $id);
$this->db->update('citas', $data);
}

 //Busca las citas por ID
 function buscarCita($id)
{
$query = $this->db->get_where('citas',array("id"=>$id['id']));
return $query->result_array();
}

}
