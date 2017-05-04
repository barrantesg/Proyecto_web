
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
                            <th>Cedula</th>
                            <th>Apellido</th>
                            <th>Direccion</th>
                            <th>Email</th>
                        </tr>
                    </thead>
                    <tbody>
                     <?php foreach ($users as $user): ?>
                            <tr>
                              <td>
                                  <?php echo $user['nombre']?>
                              </td>
                                <td>
                                    <?php echo $user['cedula']?>
                                </td>

                                <td>
                                    <?php echo $user['apellido_uno']?>
                                </td>
                                <td>
                                    <?php echo $user['direccion']?>
                                </td>
                                <td>
                                    <?php echo $user['email']?>
                                </td>
                                <td><a href="<?php echo base_url()?>ride/editridesP?id=<?php echo $user['id']; ?>">ver</a></td>
                            </tr>
                          <?php endforeach;?>

                    </tbody>
                </table>
            </body>

            </html>
