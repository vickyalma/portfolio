<?php
$pagina = "sobre-mi";
?>
<!DOCTYPE html>
<html lang="es" class="h-100">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre mí</title>
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/estilos.css">
</head>

<body id="sobre-mi" class="d-flex flex-column h-100">
<header class= "container">
        <?php include_once "menu.php";?>
    </header>
    <main>
        <section id="bio" class="container">
            <div class="row">
                <div class="col-12 col-sm-7">
                    <h1 class="col-12 py-5">Sobre mí</h1>
                    <p>Soy Médica general egresada de la Universidad Nacional de Colombia. Con amplia experiencia en los
                        servicios de promoción y prevención, urgencias, hospitalización y consulta externa.</p>
                    <a href="contacto.php" class="btn btn-rojo my-5 d-none d-sm-block w-25">Enviar mensaje</a>
                </div>
                <div class="col-10 col-sm-3 py-5 pe-5 d-none d-sm-block">
                    <img src="images/cachorro.jpg" alt="Homero" class="img-fluid">
                </div>
                <div class="col-6 d-sm-block d-sm-none py-3">
                    <img src="images/cachorro.jpg" alt="Homero" class="img-fluid">
                </div>
                <div class="col-6 d-sm-block d-sm-none py-3">
                    <a href="contacto.php" class="btn btn-rojo my-5 d-sm-block d-sm-none">Enviar mensaje</a>
                </div>
            </div>
        </section>
        <section id="stack">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2 class="py-5">Servicios</h2>
                    </div>
                    <div class="col-6 col-sm-3">
                        <div class="tecnologia mb-4">
                            <h3 class="pt-5 pb-1">Promoción y prevención</h3>
                            <i class="fa-sharp fa-solid fa-hands-holding-child pb-5"></i>
                        </div>
                    </div>
                    <div class="col-6 col-sm-3">
                        <div class="tecnologia mb-4">
                            <h3 class="pt-5 pb-1">Hospitalización</h3>
                            <i class="fa-solid fa-circle-h pb-5"></i>
                        </div>
                    </div>
                    <div class="col-6 col-sm-3">
                        <div class="tecnologia mb-4">
                            <h3 class="pt-5 pb-1">Urgencias</h3>
                            <i class="fa-solid fa-truck-medical pb-5"></i>

                        </div>
                    </div>
                    <div class="col-6 col-sm-3">
                        <div class="tecnologia mb-4">
                            <h3 class="pt-5 pb-1">Consulta externa</h3>
                            <i class="fa-solid fa-kit-medical pb-5"></i>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="experiencia" class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="pt-5 pb-4">Experiencia laboral</h2>
                </div>
            </div>
            <div class="row shadow">
                <div class="col-sm-2 d-none d-sm-block p-5">
                    <i class="fa-solid fa-people-group"></i>
                </div>
                <div class="col-sm-10 col-12 my-3">
                    <h3>Jefe de médicos</h3>
                    <h4>Hospital Emiro Quintero Cañizares</h4>
                    <h5>2013 - 2014</h5>
                    <p>Desempeñé el cargo de médica general en los servicios de urgencias y hospitalización. Estuve a
                        cargo de la coordinación de las labores de todos los médicos de la institución.</p>
                </div>
                <div class="col-sm-2 d-none d-sm-block p-5">
                    <i class="fa-solid fa-truck-medical"></i>
                </div>
                <div class="col-sm-10 col-12 my-3">
                    <h3>Médica de urgencias</h3>
                    <h4>Hospital Manuela Beltrán</h4>
                    <h5>2014 - 2015 </h5>
                    <p>Desempeñé con éxito mi ejercicio médico en el area de urgencias del hospital de cuarto nivel.</p>
                </div>
                <div class="col-sm-2 d-none d-sm-block p-5">
                    <i class="fa-solid fa-house-medical"></i>
                </div>
                <div class="col-sm-10 col-12 my-3">
                    <h3>Médica general</h3>
                    <h4>Hospital San Juan de Dios</h4>
                    <h5>2015 -2017</h5>
                    <p>Desempeñé correctamente mi labor como médica general a cargo de los servicios de urgencias
                        (diurno y nocturno), consulta externa y hospitalización.</p>
                </div>
                <div class="col-sm-2 d-none d-sm-block p-5">
                    <i class="fa-solid fa-house-medical"></i>
                </div>
                <div class="col-sm-10 col-12 my-3">
                    <h3>Médica general</h3>
                    <h4>Clínica Meta</h4>
                    <h5>2018 - 2023</h5>
                    <p>Médica a cargo de Hospitalización Medicina Prepagada.</p>
                </div>

        </section>
        <section id="formacion" class="container">
            <div class="row">
                <div class="col-12 pt-5 pb-4">
                    <h2>Formación acádémica</h2>
                </div>
            </div>
            <div class="row shadow bg-white rounded p-1">
                <div class="col-12 col-sm-6">
                    <div class="row">
                        <div class="col-2 py-3 my-auto d-none d-sm-block text-center">
                            <i class="fa-solid fa-landmark" alt="depcsuite"></i>
                        </div>
                        <div class="col-12- col-sm-10 p-3">
                            <h3>Médica Cirujana</h3>
                            <h4>Universidad Nacional de Colombia</h4>
                            <h5>2014</h5>
                            <p>https://bogota.unal.edu.co/</p>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </section>
        <section id="formacion" class="container mb-5">
            <div class="row">
                <div class="col-12 pt-5 pb-4">
                    <h2>Cursos de desarrollo profesional</h2>
                </div>
            </div>
            <div class="row shadow bg-white rounded p-1">
                <div class="col-12 col-sm-6">
                    <div class="row">
                        <div class="col-2 py-3 my-auto d-none d-sm-block">
                            <i class="fa-solid fa-kit-medical"></i>
                        </div>
                        <div class="col-12- col-sm-10 p-3">
                            <h3>Curso de reanimación básica y avanzada, BLS-ACLS.</h3>
                            <h4>Asociación Colombiana de Anestesiología.</h4>
                            <h5>Expedición: 2022</h5>
                            <p></p>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </section>
        <section id="idiomas">
            <div class="container">
                <div class="row py-5 mx-0">
                    <div class="col-sm-6 col-12 pb-3 pb-sm-0">
                        <div class="row mr-sm-1 bg-white card-idioma shadow me-sm-1">
                            <div class="col-4 text-center card">
                                <i class="fas fa-comment-alt"></i>
                            </div>
                            <div class="col-8 p-5 pb-3">
                                <h2>IDIOMAS</h2>
                                <ul>
                                    <li>ESPAÑOL - Nativo</li>
                                    <li>INGLÉS - Avanzado</li>
                                    <li>ALEMAN - Intermedio</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="row ml-sm-2 bg-white card-idioma shadow ms-sm-1">
                            <div class="col-4 text-center card">
                                <i class="fas fa-star"></i>
                            </div>
                            <div class="col-8 p-5">
                                <h2>HOBBIES</h2>
                                <ul>
                                    <li>Artes Marciales</li>
                                    <li>Piano</li>
                                    <li>Programación</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="formacion">

        </section>
        <section id="cursos">

        </section>
    </main>
    <footer class="container mt-auto py-4">
        <div class="row">
            <div class="col-sm-3 col-12">
                <a href="https://github.com"><i class="fa-brands fa-github"></i></a>
                <a href="https://linkedin.com"><i class="fa-brands fa-linkedin-in"></i></a>
            </div>
            <div class="col-sm-3 col-12">
                Sponsor <a href="https://medicina.bogota.unal.edu.co/">Facultad de Medicina Universidad Nacional.</a>
            </div>
            <div class="col-sm-3 col-12">
                <a href="mailto:evalvarez1@hotmail.com">evalvarez1@hotmail.com</a>
            </div>
        </div>
        <a href="https://api.whatsapp.com/send?phone=+541162442898" target="_blank"><i
                class="fa-brands fa-whatsapp px-3 pt-3 pb-4"></i></a>
    </footer>
</body>

</html>