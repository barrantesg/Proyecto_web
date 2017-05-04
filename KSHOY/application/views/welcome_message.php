<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

	<style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body {
		margin: 0 15px 0 15px;
	}

	p.footer {
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}

	#container {
		margin: 10px;
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;
	}
	</style>
</head>
<body>
  <form id="datos" enctype="multipart/form-data" class="" method="post" action="<?=base_url()?>User/guardarUsuario">
      <div class="">
          <div class="form-group">
              <label for="text">Cedula:</label>
              <br></br>
              <input type="text" class="" id="nombre" name="nombre" placeholder="Ej. 207530426" required/> </div>
          <div class="form-group">
              <label for="pwd">Nombre:</label>
              <br></br>
              <input type="tel" name="numero" id="numero" placeholder="Ej. Dayann " required> </div>
          <div class="form-group">
              <label for="pwd"> Primer Apellido:</label>
              <br></br>
              <input type="text" name="ape1" class="" id="user" placeholder="Ej. Barrantes" required /> </div>
          <div class="form-group">
              <label for="pwd">Segundo Apellido:</label>
              <br></br>
              <input type="text" name="ape2" class="" id="user" placeholder="Ej. Guzman" required /> </div>

              <div class="form-group">
                  <label for="pwd"> Direccion:</label>
                  <br></br>
                  <input type="text" name="dir" class="" id="user" placeholder="Ej. Cuidad Quesada" required /> </div>

                  <div class="form-group">
                      <label for="pwd"> Telefono:</label>
                      <br></br>
                      <input type="text" name="tel" class="" id="user" placeholder="Ej. 838333792" required /> </div>
                      <div class="form-group">
                          <label for="pwd"> Email:</label>
                          <br></br>
                          <input type="text" name="email" class="" id="user" placeholder="Ej. kdbarrantes@gmail.com" required /> </div>

                          <div class="form-group">
                              <label for="pwd"> Tipo de Usuario:</label>
                              <br></br>
                              <input type="text" name="tipo_usuario" class="" id="user" placeholder="Ej. T/F" required /> </div>

                          <div class="form-group">
                              <label for="pwd"> Usuario:</label>
                              <br></br>
                              <input type="text" name="user" class="" id="user" placeholder="Ej. kdbarrantes" required /> </div>

                              <div class="form-group">
                                  <label for="pwd">Contraseña:</label>
                                  <br></br>
                                  <input type="password" maxlength="6" name="pass" minlength="6" class="" id="pass" placeholder="12345" required> </div>

      </div>
      <input type="submit" value="Guardar" class="btn btn-default">
    </form>
</body>
</html>
