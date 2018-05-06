

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Formulario de Registro SCIII</title>
<link href="estilos.css" rel="stylesheet" type="text/css">
</head>

<body>



<div class="tabla" >
    <table border="4" >
        <thead>
            <tr>
                <th colspan="1"><a href="formulario.php">nuevo</a></th>
                <th colspan="5"lista de usuarios inscriptos</th>
    </tr>
    </thead>
    <tbody>
        </tr>
    <td>id</td>
    <td>nombre</td>
    <td>apellido</td>
    <td>telefono</td>
    <td colspan="2" >operaciones</td>
   
    </tr>
    <?php
    include ("conexion.php");
    $query="SELECT * FROM usuarios";
    $resultado= $conexion->query($query);
    while ($row=$resultado->fetch_assoc()){
       ?>
    
    <tr>
        <td><?php echo $row['id'];?> </td>
           <td><?php echo $row['nombre'];?></td>
           <td><?php echo $row['apellido'];?></td>
           <td><?php echo $row['telefono'];?></td>
           
           <td><a href="editar.php?id=<?php echo $row['id'];?>">editar</a></td>
           <td><a href="eliminar.php?id=<?php echo $row['id'];?>">eliminar</a></td>

    </tr>
    <?php
    }
      ?>
    </tbody>
    </table>

</div>
</body>
</html>