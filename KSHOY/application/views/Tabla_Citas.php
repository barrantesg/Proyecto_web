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

                            <th>Fecha de cita</th>
                            <th>Hora de Cita</th>
                            <th>Servicio</th>
                            <th>Cliente</th>
                        </tr>
                    </thead>
                    <tbody>
                     <?php foreach ($cita as $cit): ?>
                            <tr>
                              <td>
                                  <?php echo $cit['fecha_cita']?>
                              </td>
                                <td>
                                    <?php echo $cit['hora_cita']?>
                                </td>

                                <td>
                                    <?php echo $cit['servicio']?>

                                </td>
                                <td>
                                    <?php echo $cit['cedula_cliente']?>
                                </td>
                                <td><a href="<?php echo base_url()?>ride/editridesP?id=<?php echo $cit['id']; ?>">ver</a></td>
                            </tr>
                          <?php endforeach;?>

                    </tbody>
                </table>
            </body>

            </html>
