<!-- Empezado por Aurelia Japura Herminia -->
<!doctype html> 
<html> 
<head> 
  <meta charset="utf-8"> 
  <title>Listado de asistencia de alumno - Agenda Jobs</title> 
  <meta name="viewport" content="width=device-width"> 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
  <style>
    .container {
      margin-top: 20px;
    }
    .card-header {
      background-color: #9c27b0;
      color: white;
    }
    .btn-primary {
      background-color: #9c27b0;
      border-color: #9c27b0;
    }
    .btn-primary:hover {
      background-color: #7b1fa2;
      border-color: #7b1fa2;
    }
    .btn-secondary {
      background-color: #ccc;
      border-color: #ccc;
    }
    .btn-secondary:hover {
      background-color: #bbb;
      border-color: #bbb;
    }
  </style> 
  </head> 
<body> 
<div class="container"> 
<section> 
  <article> 
  <?php  
  include("../../conexion.php"); 
  $link = conectarse(); 
  $instruccion= "select asistencia.fkcodalumno, asistencia.fknomalumno, asistencia.fkapealumno, asistencia.fecha,
  asistencia.estado
  from asistencia";
  ?>
  <script src="https://www.gstatic.com/dialogflow-console/fast/messenger/bootstrap.js?v=1"></script>
  <center><h1>Listado de asistencia</h1></center>
<div class="card">
  <div class="card-header">
    <h4>Asistencia de compañeros de la I.E.P Steve Jobs</h4>
  </div>
  <div class="card-body">
    <div class="table-responsive">

<table id ="miTabla" class="table table-striped">
  <thead>   
  <tr> 
  <th>Codigo</th> 
  <th>Nombre</th> 
  <th>Apellido</th> 
  <th>Fecha</th> 
  <th>Estado</th> 
  </tr>
  </thead>
  <tbody>
  <?php 
  $rs=mysqli_query($link, $instruccion) or die ("Fallo en la Consulta"); 
  $n=mysqli_num_rows($rs); 
  while($campo=mysqli_fetch_array($rs))
  {
  ?>
  <tr>
  <td><?php echo $campo["fkcodalumno"];?></td>  
  <td><?php echo $campo["fknomalumno"];?></td> 
  <td><?php echo $campo["fkapealumno"];?></td>
  <td><?php echo $campo["fecha"];?></td> 
  <td><?php echo $campo["estado"];?></td> 
  <?php
  }
  mysqli_close($link); 
  ?>
  </tbody>
  </table>
  </div>
  </div>
</div>  
</article> 
</section> 
<a class="btn btn-warning btn-lg mt-3" href="./index.php">
  <i class="fas fa-arrow-left"></i> Volver</a>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="//cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function () {
        $("#miTabla").DataTable();
    })
</script>
</div> 
</body> 
</html>
<!-- Terminado por Aurelia Japura Herminia -->