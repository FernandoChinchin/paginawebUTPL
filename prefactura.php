

<?php 
include 'html/head.php'; 
include 'PHP/conexion.php';

$idreg=$_GET['idreg'];

?>

<body>

<?php include 'html/nav.php'; ?>

    <section class="container mt-5">
        <h2 class="text-center mb-5">PRE - FACTURA</h2>
    </section>

    <?php
                    $registro=$con->query("SELECT * FROM registro WHERE idreg='$idreg'");
                    $row=mysqli_num_rows($registro);
                    while ($r = $registro->fetch_assoc()){
                        foreach ($r as $col){
                            $idreg = $r['idreg'];
                            $nombre = $r['nombre'];
                            $apellidos = $r['apellidos'];
                            $correo = $r['correo'];
                            $direccion = $r['direccion'];
                            $nacionalidad = $r['nacionalidad'];
                            $cedula = $r['cedula'];
                            $idc = $r['idc'];
                        }
                    }
                ?>

    <div class="container">
        <div class="row">
            <div class="offset-2 col-8">
                <table class="table table-bordered table-hover table-sm-responsive">
                    <tbody>
                        <tr>
                            <th scope="row">Nombre y Apellidos</th>
                            <td><?php echo $nombre." ".$apellidos;?></td>
                        </tr>
                        <tr>
                            <th scope="row">Correo</th>
                            <td><?php echo $correo;?></td>
                        </tr>
                        <tr>
                            <th scope="row">Dirección</th>
                            <td><?php echo $direccion;?></td>
                        </tr>
                        <tr>
                            <th scope="row">Nacionalidad</th>
                            <td><?php echo $nacionalidad;?></td>
                        </tr>
                        <tr>
                            <th scope="row">Cédula</th>
                            <td><?php echo $cedula;?></td>
                        </tr>
                        <tr>
                            <th scope="row">ID Registro</th>
                            <td colspan="2"><?php echo $idreg;?></td>
                        </tr>
                        <tr>
                        <?php
                            $sel = $con->query("SELECT * FROM registro WHERE idreg='$idreg' ");
							 $row = mysqli_num_rows($sel);
                             while($f= $sel->fetch_assoc()){  
                                $idreg=$f['idreg'];
                                $ins=$f['ins'];
                        ?>

                            <th class="text-center" scope="row">Inscripción Evento</th>
                            <td class="border-success text-center" colspan="2">$ <?php echo number_format($ins,2) ?></td>
                        </tr>
                        <?php
                            }
                        ?>

                        <tr>

                        <?php
                                                $sel = $con->query("SELECT
                                                cursos.valorc,
                                                cursos.nombrec
                                                FROM
                                                registro
                                                INNER JOIN cursos ON registro.idc = cursos.idc
                                                WHERE idreg = '$idreg'");
                                                     $row = mysqli_num_rows($sel);
                                                     while($f= $sel->fetch_assoc()){  
                                                     $nombrec=$f['nombrec'];
                                                     $valorc=$f['valorc'];
                                                     ?>
                                                 
                        

                            <th class="text-center" scope="row"><?php echo $nombrec?></th>
                            <td class="border-primary text-center" colspan="2">$ <?php echo number_format($valorc,2) ?></td>
                        </tr>
                        <?php
                             }
                        ?>
                        <tr>

                        <?php
                                                $sel = $con->query("SELECT
                                                talleres.valort,
                                                talleres.nombret
                                                FROM
                                                prefactura
                                                INNER JOIN talleres ON prefactura.idt = talleres.idt
                                                WHERE idreg = '$idreg'");
                                                 $row = mysqli_num_rows($sel);
                                                 $valor_total = 0;
                                                 $valor = 0;
                                                 while($f= $sel->fetch_assoc()){  
                                                 $nombret=$f['nombret'];
                                                 $valort=$f['valort'];
                                                 $valor_total = $valor += $f['valort'];
                                                 
                        ?>

                            <th class="text-center" scope="row"> <?php echo $nombret?></th>
                            <td class="border-info text-center" colspan="2">$ <?php echo $valort?></td>
                        </tr>
                        <?php
                             }
                        ?>
                        <tr>
                            <th class="text-center" scope="row">TOTAL GENERAL</th>
                            <?php $total_general = $ins + $valorc + $valor_total;?>
                            <td colspan="2" class="border-danger font-weight-bold text-center">$ <?php echo number_format($total_general,2);?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>

</html>