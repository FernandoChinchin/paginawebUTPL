<?php
include 'PHP/conexion.php'; 
include 'html/head.php'; 
?>

<body>

<?php include 'html/nav.php'; ?>

    <div class="container mt-4">
        <div class="card-deck">
            <div class="card border-primary">
                <div class="card-body">
                    <h4 class="card-title text-center text-primary">CURSOS</h4>
                    
                    <?php
                        $cursos=$con->query("SELECT * FROM cursos");
                        $row_cnt=$cursos->num_rows;
                    ?>

                    <h1 class="card-text text-center text-primary"><?php echo $row_cnt ;?></h1>
                </div>
            </div>
            <div class="card border-info">
                <div class="card-body">
                    <h4 class="card-title text-center text-info">TALLERES</h4>

                    <?php
                        $talleres=$con->query("SELECT * FROM talleres");
                        $row_cnt=$talleres->num_rows;
                    ?>

                    <h1 class="card-text text-center text-info"><?php echo $row_cnt ;?></h1>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="py-5 text-center">
            <h2>REGISTRO</h2>
            <p class="lead">Recuerde que solo puede escoger <strong>solo un CURSO</strong> y <strong>varios
                    TALLERES</strong>
            </p>
        </div>

        <div class="row">
            <div class="col-lg-12 col-md-12">
                
                <form action="PHP/agregar.php" method="POST">
                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <label for="nombres">Nombres</label>
                            <input type="text" class="form-control" name="nombre" required>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="apellidos">Apellidos</label>
                            <input type="text" class="form-control" name="apellidos" required>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="correo">Correo</label>
                            <input type="email" class="form-control" name="correo" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="direccion">Dirección</label>
                            <input type="text" class="form-control" name="direccion" required>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="nacionalidad">Nacionalidad</label>
                            <input type="text" class="form-control" name="nacionalidad" required>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="cedula">Cedula</label>
                            <input type="number" class="form-control" name="cedula" required>
                        </div>
                    </div>

                    <hr class="mb-4">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="country">CURSOS</label>
                            <select class="custom-select d-block w-100" name="idc" required>
                                <option value="">Escoger...</option>

                                <?php
                                    $cursos=$con->query("SELECT * FROM cursos");
                                    while($c=$cursos->fetch_object()):
                                        $id=$c->idc;
                                        $nombre=$c->nombrec;
                                        $valor=$c->valorc;
                                ?>

                                <option value="<?php echo $id; ?>"><?php echo $nombre;?></option>

                                <?php endwhile; ?>

                            </select>
                            <small class="text-muted">Puede escoger solo un CURSO $.<?php echo $valor; ?></small>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="state">TALLERES</label>
                            <select class="custom-select d-block w-100"  name="idt[]" multiple required>
                                <option value="">Escoger...</option>

                                <?php
                                    $talleres=$con->query("SELECT * FROM talleres");
                                    while($t=$talleres->fetch_object()):
                                        $id=$t->idt;
                                        $nombre=$t->nombret;
                                        $valor=$t->valort;
                                ?>

                                <option value="<?php echo $id; ?>"><?php echo $nombre; ?></option>

                                <?php endwhile; ?>

                            </select>
                            <small class="text-muted">Puede escoger varios TALLERES</small>
                        </div>
                    </div>
                    <hr class="mb-4">
                    <div class="text-center">
                        <button class="btn btn-outline-warning" type="submit">REGISTRAR</button>
                    </div>
                </form>

            </div>
        </div>

            <div class="row">
                <div class="col-12 col-md-12">
                    <table class="table table-bordered table-responsive-sm mt-5">
                        <thead>
                            <tr>
                                <th class="text-center">Acciones</th>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Apellidos</th>
                                <th>Correo</th>
                                <th>Dirección</th>
                                <th>Nacionalidad</th>
                                <th>Cedula</th>
                            </tr>
                        </thead>

                        <?php
                            $registro = $con->query("SELECT * FROM registro");
                            while($r=$registro->fetch_object()):   
                        ?>     

                        <tbody>
                            <tr>
                                <td class="btn-group text-center"><a class="btn btn-outline-primary" title="EDITAR" 
                                
                                href="editar.php?idreg=<?php echo $r->idreg; ?>">

                                <i class="fa fa-edit"></i></a>
                                    <a class="btn btn-outline-success" title="PRE-FACT" 
                                    
                                href="prefactura.php?idreg=<?php echo $r->idreg; ?>">
                                
                                <i class="fa fa-file"></i></a>
                                
                                
                                </td>

                                <td><?php echo $r->idreg; ?></td>
                                <td><?php echo $r->nombre; ?></td>
                                <td><?php echo $r->apellidos; ?></td>
                                <td><?php echo $r->correo; ?></td>
                                <td><?php echo $r->direccion; ?></td>
                                <td><?php echo $r->nacionalidad; ?></td>
                                <td><?php echo $r->cedula; ?></td>
                            </tr>
                        </tbody>
                        <?php endwhile; ?> 
                    </table>
                </div>


            </div>
        </div>
    </div>

    <?php include 'html/scripts.php'; ?>

</body>

</html>