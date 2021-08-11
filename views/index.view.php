<?php require 'header.php'; ?>

         <div class="Contenedor">
               <?php foreach($posts as $post): ?>
                   <div class="post">
                   <article>
                     <h2 class="titulo"> <a href="single.php?id=<?php echo $post['id']; ?>"><?php echo $post['titulo']; ?></a></h2>
                     <p class="fecha"> 5 de Julio del 2021 </p>
                     <div class="thumb">
                            <a href ="single.php?id=<?php echo $post['id']; ?>">
                  <img src="<?php echo RUTA;  ?>/imagenes/<?php echo $post['thumb']; ?>" alt="">
                  <a/>
                  </div>
                  <p class="extracto"><?php echo $post['extracto']; ?></p>
                  <a href="single.php?id=<?php echo $post['id']; ?>" class="continuar">Seguir Leyendo</a>  
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

         <?php andforeach; ?>


        <?php require 'paginacion.php'; ?>
    </div>

    <?php require 'footer.php'; ?>