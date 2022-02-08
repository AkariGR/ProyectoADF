<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF=8">
        <title>Entradas Blog</title>
        <meta name="viewport" content="width=device-width, user-scalable=no,
         initial-scale=1.0, maxium-scale=1.0, minimun=scale=1.0"> 
        <link rel="shortcut icon" href="../../img/ana.ico" type="image/x-icon">
        <link rel="stylesheet" href="../../css/estiloFormulario.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@300;700&display=swap" rel="stylesheet">
    </head>
    <body>
        <div class="contenedor">
            <form action="../controlador/transacciones.php " enctype="multipart/form-data" method="post"  name="form1" class="form">
                <div class="form-header">
                    <h1 class="form-title">N<span>ueva</span> E<span>ntrada</span></h1>
                </div>
                <label for="campo_titulo" class="form-label">Titulo:</label>
                <input type="text" id="campo_titulo" name="campo_titulo" class="form-input" placeholder="Introduce el titulo" required autocomplete="off">

                <label for="area_comentarios" class="form-label">Texto:</label>
                <textarea name="area_comentarios" id="area_comentarios" class="form-textarea" placeholder="Redacte el texto de su articulo" rows="10" cols="50" required></textarea>
                <input type="hidden" name="MAX_TAM" value="2097152">

                <p class="form-label">Seleccione una imagen de tamaño inferior a 2 MB</p>
                <input type="file" name="imagen" id="imagen" class="form-input" required ¡emty>
                
                <input type="submit" name="btn_enviar" id="btn_enviar" value="enviar" class="btn-submit">
               
            </form>
            <a href="mostrar_blog.php">Página de visualización del blog</a>
        </div>
    </body>
</html>