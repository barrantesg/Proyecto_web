
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Registro KS-HOY</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--  <link rel="stylesheet" href="<?=base_url()?>/assets/bootstrap.min.css">-->
  <!--  <link rel="stylesheet" href="<?=base_url()?>/assets/configRegistro.css">-->
<!--    <link href="http://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
<!--    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>-->
  <!--  <script src="<?=base_url()?>/JS/bootstrap.min.js"></script>-->
</head>

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">
<div class="">

<form id="datos" enctype="multipart/form-data" class="" method="post" action="<?=base_url()?>Negocio/guardarNegocio">
                      <div class="">
                          <div class="form-group">
                              <label for="text">Cedula Juridica:</label>
                              <br></br>
                              <input type="text" class="" id="nombre" name="cedula_juridica" placeholder="Ej. 2075304267543" required/> </div>
                              <div class="form-group">
                                  <label for="pwd">Nombre del Negocio:</label>
                                  <br></br>
                                  <input type="text" name="nombre" class="" id="user" placeholder="Ej. Reparaciones al Instante" required /> </div>
                          <div class="form-group">
                              <label for="pwd">Cedúla Propietario:</label>
                              <br></br>
                              <input type="tel" name="cedula_propietario" id="numero" placeholder="Ej. 207530426" required> </div>
                          <div class="form-group">
                              <label for="pwd"> Dirección del Negocio:</label>
                              <br></br>
                              <input type="text" name="direccion" class="" id="user" placeholder="Ej. Cuidad Quesada" required /> </div>

                                  <div class="form-group">
                                      <label for="pwd"> Telefono:</label>
                                      <br></br>
                                      <input type="text" name="telefono" class="" id="user" placeholder="Ej. 838333792" required /> </div>
                                      <div class="form-group">
                                          <label for="pwd"> Servicio:</label>
                                          <br></br>
                                          <input type="text" name="servicio" class="" id="user" placeholder="Ej. Mecanica general" required /> </div>

                                          <div class="form-group">
                                              <label for="pwd"> Logo de la Empresa:</label>
                                              <br></br>
                                              <input type="text" name="logo" class="" id="user" placeholder="Ej. Opcional" required /> </div>
                      </div>
                      <input type="submit" value="Guardar" class="btn btn-default">
                    </form>

                  </div>
              </div>
            </div>
            </div>
            </body>

            </html>
