<?php

    class Negocio_usuario extends CI_Model{

         function __construct() {
         parent::__construct();
     }

     //Agrega un nuevo negocio
     function nuevoNegocio($data)
   {
      $this->db->insert('negocio',$data);
   }


   function cargar_negocios()
  {
    $query = $this->db->get_where('negocio');

     return $query->result_array();

  }
}
