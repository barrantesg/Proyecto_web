
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

<form id="datos" enctype="multipart/form-data" class="" method="post" action="<?=base_url()?>actualizarCita">
                        <div class="">
                            <div class="form-group">
                                <label for="text">Fecha actual:</label>
                                <br></br>
                                <input type="text" class="" id="nombre" name="nombre" placeholder="Ej. 2017-00-00" required/> </div>
                                <div class="form-group">
                                    <label for="pwd">Fecha de Cita:</label>
                                    <br></br>
                                    <input type="text" name="user" class="" id="user" placeholder="Ej. 2017-00-00" required /> </div>
                            <div class="form-group">
                                <label for="pwd">Hora de Cita:</label>
                                <br></br>
                                <input type="tel" name="numero" id="numero" placeholder="Ej. 2:00pm" required> </div>
                            <div class="form-group">
                                <label for="pwd"> Servicio:</label>
                                <br></br>
                                <input type="text" name="user" class="" id="user" placeholder="Ej. Chequeo General" required /> </div>
                                <div class="form-group">
                                    <label for="pwd"> Cedula Cliente:</label>
                                    <br></br>
                                    <input type="text" name="user" class="" id="user" placeholder="Ej. 207530426" required /> </div>

                        </div>
                        <input type="submit" value="Guardar" class="btn btn-default">
                      </form>

                    </div>
                </div>
              </div>
              </div>

              </body>

              </html>
