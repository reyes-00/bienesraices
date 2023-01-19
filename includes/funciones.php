<?php

require 'app.php';

function incluirTemplate($nombre, $inicio = false, $crear = false) {
  include TEMPLATE_URL."/$nombre.php";
}

function estaAutenticado(){
  session_start();

  $auth = $_SESSION['login'];

  if($auth){
    return true;
  }

  return false;
}

function debuguear($valor){
  echo"<pre>";
  var_dump($valor);
  echo"</pre>";
 
}