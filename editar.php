<?php 
include 'html/head.php';
include 'PHP/conexion.php';

$idreg=$_GET['idreg'];

?>

<body>

<?php include 'html/nav.php'; ?>
      
        <div class="container mt-5">
                <div class="card-deck">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title text-center">CURSOS</h4>
                            <h1 class="card-text text-center">2</h1>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title text-center">TALLERES</h4>
                            <h1 class="card-text text-center">3</h1>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="container">
                <div class="py-5 text-center">
                    <h2>EDITAR REGISTRO</h2>
                </div>
            
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

                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <form action="PHP/editar.php" method="POST">
                            <div class="row">
                                <div class="col-md-4 mb-5">
                                    <input type="text" class="form-control" name="nombre" placeholder="Nombre" value="<?php echo $nombre?>" required>
                                    <input type="hidden" name="idreg" value="<?php echo $idreg?>">
                                    <input type="hidden" name="idc" value="<?php echo $idc?>">
                                   
                                </div>
                                <div class="col-md-4 mb-5">
                                    <input type="text" class="form-control" name="apellidos" placeholder="Apellidos" value="<?php echo $apellidos; ?>" required>
                                </div>
                                <div class="col-md-4 mb-5">
                                    <input type="email" class="form-control" name="correo" placeholder="Correo" value="<?php echo $correo; ?>" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-5">
                                    <input type="text" class="form-control" name="direccion" placeholder="Dirección" value="<?php echo $direccion; ?>" required>
                                </div>
                                <div class="col-md-3 mb-5">
                                    <input type="text" class="form-control" name="nacionalidad" placeholder="Nacionalidad" value="<?php echo $nacionalidad; ?>" required>
                                </div>
                                <div class="col-md-3 mb-5">
                                    <input type="numer" class="form-control" name="cedula" placeholder="Cedula" value="<?php echo $cedula; ?>" required>
                                </div>
                            </div>
            
                            <hr class="mb-5">
            
                            <div class="text-center">
                                <button class="btn btn-outline-warning " type="submit">EDITAR</button>
                            </div>
            
                        </form>
            
                    </div>
                </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>


