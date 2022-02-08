<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PORTAFOLIO ANAKG</title>
    <link rel="shortcut icon" href="img/ana.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@300;700&display=swap" rel="stylesheet">


</head>

<body>
    <header>
        <nav>
            
            <a href="#yo">Sobre mi</a>
            <a href="#conocimientos">Conocimientos</a>
            <a href="#experiencia">Experiencia Laboral</a>
            <a href="blog/vista/mostrar_blog.php">Blog</a>
            <a href="#contacto">Contacto</a>

        </nav>
        <section class="textos-header" >
            <h1>HOLA! <b>SOY</b> ANA</h1>
            <h2>Bienvenido a mi portafolio</h2>
        </section>
        <div class="wave" style="height: 150px; overflow: hidden;"><svg viewBox="0 0 500 150" preserveAspectRatio="none"
                style="height: 100%; width: 100%;">
                <path d="M0.00,49.98 C150.00,150.00 349.20,-50.00 500.00,49.98 L500.00,150.00 L0.00,150.00 Z"
                    style="stroke: none; fill: #fff;"></path>
            </svg></div>
            
    </header>
    <main>
        <section id="yo" class="contenedor sobre-nosotros">
            
            <div class="contenedor-sobre-nosotros">
                <img src="img/yo.png" alt="" class="imagen-about-us">
                <div class="contenido-textos">
                    <h2 class="titulo">SOBRE MI</h2>
                    <p>Hay muchas formas en las que puedo presentarme, decir mi nombre, mi edad, incluso la ciudad donde nací, 
                        pero prefiero describirme diciendo que soy una persona que cree fuertemente que trabajando duro y con 
                        perseverancia se pueden cumplir los sueños, por eso, aunque tengo poco tiempo en el mundo de la programación, 
                        tengo muchas ganas de seguir aprendiendo y mejorar, y me voy a esforzar en lograrlo.</p>
                    
                </div>
            </div>
        </section>
        
        <section id="conocimientos" class="about-services">
            <div class="contenedor">
                <h2 class="titulo">Conocimientos</h2>
                <div class="servicio-cont">
                    <div class="servicio-ind">
                        <img src="img/html.png" alt="">
                        <h3>HTML</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore, qui?</p>
                    </div>
                    <div class="servicio-ind">
                        <img src="img/css.png" alt="">
                        <h3>CSS</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore, qui?</p>
                    </div>
                    <div class="servicio-ind">
                        <img src="img/js.png" alt="">
                        <h3>Java Script</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore, qui?</p>
                    </div>
                    <div class="servicio-ind">
                        <img src="img/php.png" alt="">
                        <h3>PHP</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore, qui?</p>
                    </div>
                </div>
            </div>
        </section>
        
        <section id="experiencia"  class="curriculum contenedor">
            <h2 class="titulo">Experiencia Laboral</h2>
                <div class="contenedor-tabla">                        
                    <?php
                        include "funciones.php";
                        if (isset($_POST["boton"])){
                            $fecha=$_POST["fecha"];
                            $empresa=$_POST["empresa"];
                            $cargo=$_POST["cargo"];
                            $contra=$_POST["contra"];
                            if($contra=="1234"){
                                insertar($fecha, $empresa, $cargo);
                                header("location:index.php#experiencia");
                            }           
                        }                    
                        mostrar();
                    ?>
                </div>
        </section>

        <section class="actualizar contenedor">
            <h2 class="titulo">Actualizar Experiencia Laboral </h2>
            <div class="contenedor-formulario">
                <form method="POST" action="<?php $_SERVER['PHP_SELF']?>" >
                    <fieldset> 
                        <legend>Fecha</legend>
                        <input type="date" name="fecha" required>
                    </fieldset>
                    <fieldset> 
                        <legend>Empresa</legend>
                        <input type="text" name="empresa" placeholder="Nombre de empresa" required autocomplete="off"> 
                    </fieldset>
                    <fieldset> 
                        <legend>Cargo</legend>
                        <input type="text" name="cargo" placeholder="Cargo que llevaste a cabo" required autocomplete="off">
                    </fieldset>
                    <fieldset> 
                        <legend>Contraseña</legend>
                        <input type="password" name="contra" placeholder="Necesaria para validar" required>
                    </fieldset>
                    <input class="botones" type="submit" name="boton"  value="Añadir">
                </form>
            </div>
        </section>
        
    </main>
    <footer>
        <div id="contacto" class="contenedor-footer">
            <div class="content-foo">
                <h4>Telefono</h4>
                <p>9990000</p>
            </div>
            <div class="content-foo">
                <h4>Email</h4>
                <p>anajemplo@gmail.com</p>
            </div>
            <div class="content-foo">
                <h4>Ubicación</h4>
                <p>Móstoles-Madrid</p>
            </div>
        </div>
        <h2 class="titulo-final"> Ana Karina | Guevara Robles</h2>
    </footer>
</body>

</html>