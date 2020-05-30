<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Coyo-express</title>
    <link rel="shortcut icon" href="img/logo.png" type="image/png">
    <link rel="stylesheet" href="css/estilos.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800&display=swap" rel="stylesheet">
</head>

<body>
    <header>
        <nav>
            <a href="#Somoscoyotes">Inicio</a>
            <a href="#Alimentos">Acerca de alimentos</a>
            <a href="http://localhost/Modulo/Pedidos.php"
            <?php
            include 'php/Pedidos.php'
            ?>
            >Ingreso</a>
            <a href="#Servicios">Servicios</a>
            <a href="#Contacto">Contacto</a>
        </nav>
        <section class="textos-header">
            <h1>CoyoExpress</h1>
            <h2>Cafeteria escolar</h2>
        </section>
        <div class="wave" style="height: 150px; overflow: hidden;"><svg viewBox="0 0 500 150" preserveAspectRatio="none"
                style="height: 100%; width: 100%;">
                <path d="M0.00,49.98 C150.00,150.00 349.20,-50.00 500.00,49.98 L500.00,150.00 L0.00,150.00 Z"
                    style="stroke: none; fill: #fff;"></path>
            </svg></div>
    </header>
    <main>
        <section class="contenedor sobre-nosotros">
            <h2 class="titulo" id="Somoscoyotes">Somos coyotes</h2>
            <div class="contenedor-sobre-nosotros">
                <img src="img/p6.jpg" alt="" class="imagen-about-us">
                <div class="contenido-textos">
                    <h3><span>1</span>Propositos</h3>
                    <p>Esta pagina web tiene la finalidad de funcionar como un sistema de pedidos de comidad de la cafeteria de la ENP No.6 "Antonio Caso"
                    esto con el fin de hacer mas dinamico y ahorrar el tiempo para el alumnado, profesores y servidores. OJO: Cabe aclarar que este servicio es unicamente a los
                    pertenecientes del mismo plantel.</p>
                    <h3><span>2</span>Funcionamiento</h3>
                    <p>Como ya esta aclarado solamente los que son parte de esta institucion pueden "ingresar".<br>
                    Funcionamos de la siguiente manera: Usted debe de elegir que tipo de usuario es, entre las opciones esta ser alumno o profesor, y ya dependiendo del que sea
                    se le pedira informacion a rellenar, una vez ingresada puede escoger los productos que desea asi mismo como el tipo de recoleccion. Puede recoger en la cafeteria o por entrega(si pasa de un horario acordado tendra una sanción)</p>
                </div>
            </div>
        </section>
        <section class="portafolio">
            <div class="contenedor">
                <h2 class="titulo" id="Alimentos">Ejemplos de Alimentos</h2>
                <div class="galeria-port">
                    <div class="imagen-port">
                        <img src="img/cafe.jpg" alt="">
                        <div class="hover-galeria">
                            <img src="img/Escudo.jpg" alt="">
                            <p>Productos</p>
                        </div>
                    </div>
                    <div class="imagen-port">
                        <img src="img/cuernitos.png" alt="">
                        <div class="hover-galeria">
                            <img src="img/Escudo.jpg" alt="">
                            <p>Productos</p>
                        </div>
                    </div>
                    <div class="imagen-port">
                        <img src="img/lechitas.jpg" alt="">
                        <div class="hover-galeria">
                            <img src="img/Escudo.jpg" alt="">
                            <p>Productos</p>
                        </div>
                    </div>
                    <div class="imagen-port">
                        <img src="img/galletas.jpg" alt="">
                        <div class="hover-galeria">
                            <img src="img/Escudo.jpg" alt="">
                            <p>Productos</p>
                        </div>
                    </div>
                    <div class="imagen-port">
                        <img src="img/sandwich.jpg" alt="">
                        <div class="hover-galeria">
                            <img src="img/Escudo.jpg" alt="">
                            <p>Productos</p>
                        </div>
                    </div>
                    <div class="imagen-port">
                        <img src="img/papas.jpg" alt="">
                        <div class="hover-galeria">
                            <img src="img/Escudo.jpg" alt="">
                            <p>Productos</p>
                        </div>
                    </div>
                    <div class="imagen-port">
                        <img src="img/jugo.jpg" alt="">
                        <div class="hover-galeria">
                            <img src="img/Escudo.jpg" alt="">
                            <p>Productos</p>
                        </div>
                    </div>
                    <div class="imagen-port">
                        <img src="img/yakult.jpg" alt="">
                        <div class="hover-galeria">
                            <img src="img/Escudo.jpg" alt="">
                            <p>Productos</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="clientes contenedor">
            <h2 class="titulo">Que dicen nuestros clientes</h2>
            <div class="cards">
                <div class="card">
                    <img src="img/chavo.jpg" alt="">
                    <div class="contenido-texto-card">
                        <h4>Ernesto de la Cruz Hernandez</h4>
                        <p>Me ha facilitado bastante, cuando tengo clases juntas y no tengo la disponibilidad de salir se convierte en la herrmienta perfecta.
                        Este sitio web me ha ayudado a sobrellevar las clases, comer a mis tiempos y poder rendir en el dia</p>
                    </div>
                </div>
                <div class="card">
                    <img src="img/chava.jpg" alt="">
                    <div class="contenido-texto-card">
                        <h4>Juanita </h4>
                        <p>Antes creia que era una perdida de tiempo, yo podia ir facil a comprar, sin embargo una vez me salvo, no habia desayunado, tenia examen
                        y no tenia tiempo para salir, asi que la utilize y WOW! muy accesible, facil de usar y demasiado practico.<br>
                        No dejo de utilizarla:)</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="about-services">
            <div class="contenedor">
                <h2 class="titulo" id="Servicios">Nuestros servicios</h2>
                <div class="servicio-cont">
                    <div class="servicio-ind">
                        <img src="img/UNAM.png" alt="">
                        <h3>UNAM</h3>
                        <p>Somos na empresa perteneciente a la UNAM sin fines de lucro que busca innovar en muchos sentidos
                        para poder seguir siendo una gran comunidad y tanto los docentes como el alumnado pueda rendir en el dia a dia</p>
                    </div>
                    <div class="servicio-ind">
                        <img src="img/logo.png" alt="">
                        <h3>Nuestra empresa</h3>
                        <p>Nuestra compañia sirve principalmente a la Universidad y a sus instituciones en esta ocasión en especifico a la ENP6. <br> Somos una empresa que se dedica a la innovación buscando soluciones factibles.</p>
                    </div>
                    <div class="servicio-ind">
                        <img src="img/prepa6.png" alt="">
                        <h3>Escuela Nacional Preparatoria No.6</h3>
                        <p>Somos alumnos pertenecientes de este plantel, en esta ocasión estamos sirviendo para este pero el proposito es expandir a nuevos horizontes.</p>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer>
        <div class="contenedor-footer" id="Contacto">
            <div class="content-foo">
                <h4>Phone</h4>
                <p>8296312 (El numero es falso)</p>
            </div>
            <div class="content-foo">
                <h4>Email</h4>
                <p>Express.6@hotmail.com</p>
            </div>
            <div class="content-foo">
                <h4>Ubicación</h4>
                <p>Corina 3, Del Carmen, Coyoacán, 04100 Ciudad de México, CDMX</p>
            </div>
        </div>
        <h2 class="titulo-final">&copy; CoyoExpress | FOFL S.A C.V</h2>
    </footer>
</body>

</html>
