<?php
$pagina = "contacto";
?>
<!DOCTYPE html>
<html lang="es" class="h-100">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/estilos.css">
    <title>portafolio</title>
</head>

<body id="contacto" class="d-flex flex-column h-100">
    <header class= "container">
        <?php include_once "menu.php";?>
    </header>
    <main class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="py-5">Contacto</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-6">
                <p>Te invito a que me contactes o por medio de Whatsapp</p>
            </div>
            <div class="col-12 col-sm-6">
                <form action="" method="POST">
                    <div class="pb-3">
                        <input type="text" id="txtNombre" name="txtNombre" placeholder="Nombre" class="form-control">
                    </div>
                    <div class="pb-3">
                        <input type="email" id="txtCorreo" name="txtCorreo" placeholder="Correo" class="form-control">
                    </div>
                    <div class="pb-3">
                        <input type="tel" id="txtTelefono" name="txtTelefono" placeholder="Teléfono/Whatsapp"
                            class="form-control">
                    </div>
                    <div class="pb-3">
                        <textarea name="txtMensaje" id="txtMensaje" class="form-control"
                            placeholder="Escribe aquí tu mensaje"></textarea>
                    </div>
                    <div class="pb-3">
                        <button class="btn btn-blanco px-3">ENVIAR</button>
                    </div>
                </form>
            </div>
        </div>

    </main>
    <footer class="container mt-auto py-4">
        <div class="row">
            <div class="col-sm-3 col-12">
                <a href="https://github.com"><i class="fa-brands fa-github"></i></a>
                <a href="https://linkedin.com"><i class="fa-brands fa-linkedin-in"></i></a>
            </div>
            <div class="col-sm-3 col-12">
                Sponsor <a href="https://depcsuite.com">DePC Suite</a>
            </div>
            <div class="col-sm-3 col-12">
               <a href="mailto:evalvarez1@hotmail.com">evalvarez1@hotmail.comr</a>
            </div>
        </div>
        <a href=""><i class="fa-brands fa-whatsapp px-3 pt-3 pb-4"></i></a>
    </footer>

</body>

</html>