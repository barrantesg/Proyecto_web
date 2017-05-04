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
                    <form id="datos" method="post" action="<?php echo base_url()?>ride/actualizarUsuario?id=<?php echo $info['id']; ?>">
                                        <div class="">
                                            <div class="form-group">
                                                <label for="text">Cedula :</label>
                                                <br></br>
                                                <input type="text" class="" id="nombre" name="cedula" placeholder="Ej. 2075304267543" required/> </div>
                                                <div class="form-group">
                                                    <label for="text">Nombre :</label>
                                                    <br></br>
                                                    <input type="text" class="" id="nombre" name="nombre" placeholder="Ej. 2075304267543" required/> </div>
                                                <div class="form-group">
                                                    <label for="pwd">Apellido Paterno:</label>
                                                    <br></br>
                                                    <input type="text" name="ape1" class="" id="user" placeholder="Ej. Reparaciones al Instante" required /> </div>
                                            <div class="form-group">
                                                <label for="pwd">Apellido Materno:</label>
                                                <br></br>
                                                <input type="tel" name="ape2" id="numero" placeholder="Ej. 207530426" required> </div>
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
                                                            <input type="text" name="email" class="" id="user" placeholder="Ej. Mecanica general" required /> </div>

                                                            <div class="form-group">
                                                                <label for="pwd">Tipo Usuario:</label>
                                                                <br></br>
                                                                <input type="text" name="tipo_usuario" class="" id="user" placeholder="Ej. Opcional" required /> </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="pwd">Usuario:</label>
                                            <br></br>
                                            <input type="text" name="usuario" class="" id="user" placeholder="Ej. Opcional" required /> </div>
                    </div>
                    <div class="form-group">
                        <label for="pwd">Contrasena:</label>
                        <br></br>
                        <input type="text" name="password" class="" id="user" placeholder="Ej. Opcional" required /> </div>
</div>
                                        <input type="submit" value="Guardar" class="btn btn-default">
                                      </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
