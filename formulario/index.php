<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">

</head>
<body>
    <header>
    
    
    </header>
     <div class="space">
     </div>
    <div class="container">
       
       <div class="row">
            <div class="col">
 <form action="conexion/validar.php" method="post">
  <div class="form-group">
    <label>Nombre</label>
    <input type="text" class="form-control"  name="nombre" placeholder="Ingresa tu nombre" required="">
  </div>
  <div class="form-group">
    <label>Apellido</label>
    <input type="text" class="form-control"  name="apellido" placeholder="Ingresa tu apellido" required="">
  </div>

  <div class="form-group">
    <label>Tipo de documento</label>
    <select class="form-control" name="t_documento" required="" >
      <option required="">Seleccione tipo</option>
      <option value="c.c">c.c</option>
      <option value="t.identidad">t.identidad</option>
      <option value="c.e">c.e</option>
      <option value="pasaporte">pasaporte</option>
      
    </select>
  </div>

  <div class="form-group">
    <label>Documento</label>
    <input type="number" class="form-control" name="documento" placeholder="Ingresa tu n. de documento" required="">
  </div>

  <div class="form-group">
    <label>Direccion</label>
    <input type="text" class="form-control" name="direccion" placeholder="Ingresa tu direccion" required="">
  </div>


  <div class="form-group">
    <label>Telefono</label>
    <input type="number" class="form-control" name="telefono" placeholder="Ingresa tu n. de telefono" required="">
  </div>

  
  

  <div class="form-group">
    <button type="submit" class="btn btn-success boton">Agregar</button>
  
  </div>
  
</form>

            </div>
        <div class="col">
        
        <?php 
        include'conexion/conexion.php';
        $sql = "SELECT * FROM datos";
        $ejecutar = mysqli_query($conectar,$sql);

        echo"<table class='table'>";
        echo"<thead class='thead-dark'>";
        echo"<tr>";
        echo"<th>ID</th>";
        echo"<th>nombre</th>";
        echo"<th>apellido</th>";
        echo"<th>tipo documento</th>";
        echo"<th>documento</th>";
        echo"<th>direccion</th>";
        echo"<th>telefono</th>";
        echo"</tr>";

        ?>
        <?php
        while($arreglo = mysqli_fetch_array($ejecutar)){

          echo"<tbody>";
          echo"<td>$arreglo[0]</td>";
          echo"<td>$arreglo[1]</td>";
          echo"<td>$arreglo[2]</td>";
          echo"<td>$arreglo[3]</td>";
          echo"<td>$arreglo[4]</td>";
          echo"<td>$arreglo[5]</td>";
          echo"<td>$arreglo[6]</td>";
          echo"</tbody>";
        }
echo"</table>";
?>
            </div>



        </div>
    
    </div>
    <footer>
    
    
    
    </footer>
</body>
</html>