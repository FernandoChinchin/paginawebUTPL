<?php include 'html/head.php'; ?>

<body>

<?php include 'html/nav.php'; ?>

    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="first-slide img-fluid" src="img/slide.jpg" alt="First slide">
                <div class="container">
                    <div class="carousel-caption text-left">
                        <h1 class="h1">CURSOS</h1>
                        <p class="h1">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi
                            porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                        <p><a class="btn btn-lg btn-warning" href="#" role="button">REGISTRO</a></p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="second-slide img-fluid" src="img/slide.jpg" alt="Second slide">
                <div class="container">
                    <div class="carousel-caption">
                        <h1>TALLERES</h1>
                        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta
                            gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                        <p><a class="btn btn-lg btn-warning" href="#" role="button">REGISTRO</a></p>
                    </div>
                </div>
            </div>

        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

<?php include 'html/galeria.php'?>

    <section class="encuentra mt-5">
        <div class="container">
            <div class="row align-items-center text-light">
                <div class="col">
                    <h3>Encuentra el TALLER o CURSO que necesitas</h3>
                    <p>Llena el formulario de contacto y un asesor se pondrá en contacto a la brevedad.</p>
                    <a href="#" class="btn btn-warning text-uppercase py-2 mt-4">Contactános</a>
                </div>
            </div>
        </div>
    </section>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <h2 class="text-center mb-5">NOTICIAS</h2>
                <div class="row noticia mb-4">
                    <div class="col-sm-5">
                        <img src="img/noticia1.jpg" class="img-fluid">
                    </div>
                    <div class="col-md-6">
                        <h3 class="my-2">Noticia 1</h3>
                        <p class="meta">
                            Escrito el: <span>20/10/2019</span> por: <span>Admin</span>
                        </p>
                        <p>Mauris malesuada arcu nec felis fermentum tempor. Sed dignissim facilisis purus, quis ornare
                            velit lobortis vitae. In nibh augue, tincidunt nec vulputate sed, </p>
                        <a href="#" class="btn btn-outline-success">Leer más</a>
                    </div>
                </div>
                <div class="row noticia mb-4">
                    <div class="col-sm-5">
                        <img src="img/noticia2.jpg" class="img-fluid">
                    </div>
                    <div class="col-md-6">
                        <h3 class="my-2">Noticia 2</h3>
                        <p class="meta">
                            Escrito el: <span>20/10/2019</span> por: <span>Admin</span>
                        </p>
                        <p>Mauris malesuada arcu nec felis fermentum tempor. Sed dignissim facilisis purus, quis ornare
                            velit lobortis vitae. In nibh augue, tincidunt nec vulputate sed, </p>
                        <a href="#" class="btn btn-outline-success">Leer más</a>
                    </div>
                </div>
                <div class="row noticia mb-4">
                    <div class="col-sm-5">
                        <img src="img/noticia3.jpg" class="img-fluid">
                    </div>
                    <div class="col-md-6">
                        <h3 class="my-2">Noticia 3</h3>
                        <p class="meta">
                            Escrito el: <span>20/10/2019</span> por: <span>Admin</span>
                        </p>
                        <p>Mauris malesuada arcu nec felis fermentum tempor. Sed dignissim facilisis purus, quis ornare
                            velit lobortis vitae. In nibh augue, tincidunt nec vulputate sed, </p>
                        <a href="#" class="btn btn-outline-success">Leer más</a>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <?php include 'html/footer.php'; ?>

<?php include 'html/scripts.php'; ?>

</body>

</html>