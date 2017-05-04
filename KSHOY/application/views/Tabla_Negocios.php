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
  <table class="table">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Direccion</th>
                            <th>Telefono</th>
                            <th>Servicio</th>
                        </tr>
                    </thead>
                    <tbody>
                     <?php foreach ($negocio as $neg): ?>
                            <tr>
                              <td>
                                  <?php echo $neg['nombre']?>
                              </td>
                                <td>
                                    <?php echo $neg['direccion']?>
                                </td>

                                <td>
                                    <?php echo $neg['telefono']?>
                                </td>
                                <td>
                                    <?php echo $neg['servicio']?>
                                </td>
                                <td><a href="<?php echo base_url()?>ride/editridesP?id=<?php echo $neg['id']; ?>">ver</a></td>
                            </tr>
                          <?php endforeach;?>

                    </tbody>
                </table>
            </body>

            </html>
