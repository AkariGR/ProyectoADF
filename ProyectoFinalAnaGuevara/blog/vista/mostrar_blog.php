<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BLOG ANAKG</title>
    <link rel="shortcut icon" href="../../img/ana.ico" type="image/x-icon">
    <link rel="stylesheet" href="../../css/estilosBlog.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@300;700&display=swap" rel="stylesheet">


</head>
<body>
    <header>
        <nav>
            <a href="../../index.php">Portafolio</a>
            <a href="formulario.php">Añadir Entrada</a>
            <a href="#contacto">Contacto</a>

        </nav>
        <section class="textos-header" >
            <h1><b>JAPON</b</h1>
            <h2>Descubre el país del sol naciente</h2>
        </section>
        <div class="wave" style="height: 150px; overflow: hidden;"><svg viewBox="0 0 500 150" preserveAspectRatio="none"
                style="height: 100%; width: 100%;">
                <path d="M0.00,49.98 C150.00,150.00 349.20,-50.00 500.00,49.98 L500.00,150.00 L0.00,150.00 Z"
                    style="stroke: none; fill: #fff;"></path>
            </svg></div>
            
    </header>
    <main>        
   
        <section class="contenedor sobre-nosotros">
        <?php
       include_once("../modelo/Manejo_Objetos.php");
        try{
        $miconexion=new PDO('mysql:host=127.0.0.1; dbname=portafolio','root','mysql');
        $miconexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            $Manejo_Objetos=new Manejo_Objetos($miconexion);
            $tabla_blog=$Manejo_Objetos->getContenidoPorFecha();
            if(empty($tabla_blog)){
                echo "no hay entradas de blog todavía";
            }else{
                foreach($tabla_blog as $valor){
                    ?>
            <div class="contenedor-sobre-nosotros" >
                <div class="imagen-about-us">
                    <?php if($valor->getImagen()!=""){                                
                                echo "<img class='imagen-blog' src='../imagenes/";
                                echo $valor->getImagen() . "'  alt='' />";
                            }            
                    ?>                 
                </div>
                <div class="contenido-textos">
                    <?php echo "<p class='fecha'>" .$valor->getFecha() ."</p>";  
                            echo "<h2 class='titulo'>" .$valor->getTitulo() ."</h2>"; 
                            echo "<p class='textos'>" . $valor->getComentarios() . "</p>" ;                    
                       ?> 
                </div>  
            </div>
            <?php
         }
        } 
        ?>
        </section>
        
        <?php
             }catch(exception $e){
            
            die("Error: " . $e->getMessage());
            } 
        ?>
                
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