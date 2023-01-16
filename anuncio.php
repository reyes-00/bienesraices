<?php
  
  require "includes/funciones.php";
  incluirTemplate("header");

?>
  <main class="contenedor seccion contenido-centrado">
    <section class="seccion contenedor">
      <h2>Casa frente a la playa</h2>
      <div class="contenedor-anuncio">
       <picture>
        <source srcset="build/img/anuncio1.webp" type="imge/webp">
        <source srcset="build/img/anuncio1.jpg" type="imge/jpeg">
        <img loading="lazy" src="build/img/anuncio1.jpg" alt="anuncio">
       </picture>
       <div class="contenido-texto anuncio">
        <p class="precio">$6,000,000</p>
        <ul class="iconos-caracteristicas">
              
          <li>
            <img class="icono" loading="lazy" src="build/img/icono_wc.svg" alt="icono wc">
            <p>3</p>
          </li>
          
          <li>
            <img class="icono" loading="lazy" src="build/img/icono_estacionamiento.svg" alt="icono estacionamiento">
            <p>3</p>
          </li>
          
          <li>
            <img class="icono" loading="lazy" src="build/img/icono_dormitorio.svg" alt="icono wc">
            <p>4</p>
          </li>

        </ul>
        <p>
          Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aperiam fugit suscipit, est, ex necessitatibus in consectetur facere delectus ducimus ut natus id mollitia beatae porro consequatur a distinctio autem. Iste!
          Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aperiam fugit suscipit, est, ex necessitatibus in consectetur facere delectus ducimus ut natus id mollitia beatae porro consequatur a distinctio autem. Iste!
          Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aperiam fugit suscipit, est, ex necessitatibus in consectetur facere delectus ducimus ut natus id mollitia beatae porro consequatur a distinctio autem. Iste!
        </p>
        <p>
          Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aperiam fugit suscipit, est, ex necessitatibus in consectetur facere delectus ducimus ut natus id mollitia beatae porro consequatur a distinctio autem. Iste!
          Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aperiam fugit suscipit, est, ex necessitatibus in consectetur facere delectus ducimus ut natus id mollitia beatae porro consequatur a distinctio autem. Iste!
          Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aperiam fugit suscipit, est, ex necessitatibus in consectetur facere delectus ducimus ut natus id mollitia beatae porro consequatur a distinctio autem. Iste!
        </p>
       </div>
      </div><!-- contenedor anuncios -->
     
    </section>
  </main>


<?php
  incluirTemplate("footer");
?>