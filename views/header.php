<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximun-scale=1.0, minimum-scale=1.0">
        <title>Blog "David Ortiz"</title>
        <!-- Estilo de Letra -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap" rel="stylesheet">
<!-- iconos que bo sirven -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesone/4.5.0/css/font-awesone.min.css">

<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo RUTA; ?>css/estilos.css">
     </head>
     <body>
         <header>
             <div class="contenedor">
                 <div class="logo izquierda"> 
                     <p><a href="<?php echo RUTA; ?>">Mi primer blog</a><p/>
                 </div>

                 <div class="derecha">
                     <form name="busqueda" class="buscar" action="<?php echo RUTA; ?>/Buscar.php" method="get">
                     <input type="text" name="busqueda" placeholder="Buscar">
                     <button type="submit" class="icono fa fa-search"></button>
                    </form>

                    <nav class="menu">
                        <ul> <!-- Icono de redes sociales, se agrego icono con link de GOOGLE, CHECAR -->
                            <li><a href="https://twitter.com/home"><i class="fa fa-twitter"></i></a></li>
                            <!-- icono que si sirve -->
                            <li><a href="https://www.facebook.com/Universidad-Tecnológica-De-Tlaxcala-155983347830609"><span class="material-icons">facebook</span></i></a></li>
                            <li><a href="="><i class="fa fa-facebook"></i></a></li>
                            <li><a href="">Contacto <i class="icono fa fa-envelope"></i></a></li>   
                            <span class="material-icons">contact_support</span>
                        </ul>
                    </nav>
                 </div>
             </div>
         </header>