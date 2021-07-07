<?php

require 'admin/config.php';

require 'views/single.view.php';

?>
<?php require 'header.php'; ?>

<div class="Contenedor">
    <div class="post">
          <article>
            <h2 class="titulo"> <a href="=">Titulo del articulo</h2>
            <p class="fecha"> 5 de Julio del 2021 </p>
            <div class="thumb">
                   <a href ="=">
         <img src="<?php echo RUTA;  ?>/imagenes/1.png" alt="">
         <a/>
         </div>
         <p class="extracto">Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo, quo!</p>
         <a href="=" class="continuar">Seguir Leyendo</a>  
   </article>
</div>

<div class="post">
          <article>
            <h2 class="titulo"><a href="=">Titulo del articulo</h2>
            <p class="fecha"> 5 de Julio del 2021 </p>
            <div class="thumb">
                   <a href ="=">
         <img src="<?php echo RUTA;  ?>/imagenes/2.png" alt="">
         <a/>
         </div>
         <p class="extracto">Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo, quo!</p>
         <a href="=" class="continuar">Seguir Leyendo</a>  
   </article>
</div>

<div class="post">
          <article>
            <h2 class="titulo"><a href="=">Titulo del articulo</h2>
            <p class="fecha"> 5 de Julio del 2021 </p>
            <div class="thumb">
                   <a href ="=">
         <img src="<?php echo RUTA;  ?>/imagenes/3.png" alt="">
         <a/>
         </div>
         <p class="extracto">Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo, quo!</p>
         <a href="=" class="continuar">Seguir Leyendo</a>  
   </article>
</div>

<div class="post">
          <article>
            <h2 class="titulo"><a href="=">Titulo del articulo</h2>
            <p class="fecha"> 5 de Julio del 2021 </p>
            <div class="thumb">
                   <a href ="=">
         <img src="<?php echo RUTA;  ?>/imagenes/4.png" alt="">
         <a/>
         </div>
         <p class="extracto">Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo, quo!</p>
         <a href="=" class="continuar">Seguir Leyendo</a>  
   </article>
</div>
<?php require 'paginacion.php'; ?>
</div>

<?php require 'footer.php'; ?>