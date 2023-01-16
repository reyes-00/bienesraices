<?php
  require '../includes/config/database.php';
  $db =  conectarDB();
  require "../includes/funciones.php";
  incluirTemplate("header");
  $mensaje = $_GET['resultado'] ?? null;
 
  // Consulta para obtener los datos

  $query = "SELECT * FROM propiedades limit 5";

  $resultado = mysqli_query($db, $query);

  
  
  ?>
  <main class="contenedor seccion">
    <a href="<?php echo BASE_URL ?>admin/propiedades/crear.php" class="boton boton-verde">Crear</a>
    <?php if(intval($mensaje) === 1 ):?>
      <p class="alerta exito">Agregado Correctamente</p>
    <?php endif; ?>
    
    <table class="propiedades">
      <thead>
        <tr>
          <th>Id</th>
          <th>Titulo</th>
          <th>Imagen</th>
          <th>Precio</th>
          <th>Acciones</th>
        </tr>
      </thead>

      <tbody>
        <?php foreach($resultado as $res) :  $idpropiedad = $res['id'];?>
        <tr>
          <td><?php echo $res['id']?></td>
          <td><?php echo $res['titulo']?></td>
          <td>
            <img class="imagen-tabla" src= <?php echo BASE_URL . "imagenes/";echo $res['imagen'];?> alt="imagen"></td>
          
          <td>$ <?php echo $res['precio']?></td>
          <td>
            <a href="<?php echo $res['id'];?>" class="boton-rojo-block">Eliminar</a>
            <a href="<?php echo BASE_URL ."admin/propiedades/actualizar.php?id=$idpropiedad"?>" class="boton-verde-block">Actualizar</a>
          </td>
        </tr>
        <?php endforeach;?>
      </tbody>
    </table>

  </main>
<?php
    incluirTemplate("footer", $inicio = true);
?>