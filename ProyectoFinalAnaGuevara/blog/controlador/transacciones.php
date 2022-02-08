<!DOCTYPE html>
<html>
    <head>

        <meta charset="utf-8">
        <title>transacciones</title>

    </head>
    <body>

    <?php

        include_once("../modelo/objeto_blog.php");
        include_once("../modelo/manejo_objetos.php");
        
        try{
            //creo la conexion con la base de datos
            $miconexion=new PDO('mysql:host=127.0.0.1; dbname=portafolio','root','mysql');
            $miconexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            
            if($_FILES['imagen']['error']){
                switch($_FILES['imagen']['error']){
                    case 1: //error exceso de tamaño
                        echo "El tamaño del archivo supera el limite permitido por el servidor(param upload_max_size de php.ini)";
                        break;
                    case 2: //error de exceso de tamaño de archivo
                        echo "el tamaño de archivo supera el tamaño permitido por el formulario (post_max_size de php.ini)";
                        break;
                    case 3: //error interrupcion durante la subida
                        echo "El tamaño del archivo es nulo o no se ha enviado correctamente";
                        break;
                }
            }else{
                
                if(isset($_FILES['imagen']['name'])&&($_FILES['imagen']['error']==UPLOAD_ERR_OK)){
                    $destino_de_ruta="../imagenes/";
                    $hola=move_uploaded_file($_FILES['imagen']['tmp_name'], $destino_de_ruta . $_FILES['imagen']['name']);
                    echo "El archivo " . $_FILES['imagen']['name'] . "se ha copiado en el directorio de imagenes";
                }else{
                    echo "El archivo no se ha copiado en el directorio de imagenes";
                }
            }

            $Manejo_Objetos=new Manejo_Objetos($miconexion);
            $blog=new Objeto_Blog();
            $blog->setTitulo(htmlentities(addslashes($_POST["campo_titulo"]),ENT_QUOTES));
            $blog->setFecha(Date("y-m-d H:i:s"));
            $blog->setComentarios(htmlentities(addslashes($_POST["area_comentarios"]),ENT_QUOTES));
            $blog->setImagen($_FILES["imagen"]["name"]);
            $Manejo_Objetos->insertaContenido($blog);
                if (isset($_POST["btn_enviar"])){
                    header("location:../vista/formulario.php");
                }           
      
        }

        
        catch(Exception $e){
            die("Error: " . $e->getMessage());
        }
        
        
        
    ?>

    </body>
</html>