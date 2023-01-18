<?php

require 'app.php';

function incluirTemplate($nombre, $inicio = false, $crear = false) {
  include TEMPLATE_URL."/$nombre.php";
}

function debuguear($valor){
  echo"<pre>";
  var_dump($valor);
  echo"</pre>";
 
}