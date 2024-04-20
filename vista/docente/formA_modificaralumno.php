<!-- Empezado por Farley Viveros Blanco -->
<!doctype html>
<hmtl>
<head>
    <meta charset="utf-8">
    <title>Mantenimiento Alumno</title>
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .container {
            margin-top: 50px;
        }
        .form-control {
            width: 100%;
        }
        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }
        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }
        .btn-secondary {
            background-color: #6c757d;
            border-color: #6c757d;
        }
        .btn-secondary:hover {
            background-color: #545b62;
            border-color: #545b62;
        }
    </style>
    </head>
<body>
        <div class="container">
            <article>                
                <?php                
                include("../../conexion.php");
                $link = conectarse();                
                $id=$_GET['cod'];
                $nombre=$_GET['nombre'];
                $apellido=$_GET['apellido'];
                $telefono=$_GET['tel'];
                $contrasenia=$_GET['contra'];
                $correo=$_GET['email'];                        
                ?>                
                <form method="post" action="../../modelo/editaA_alumnos.php" enctype="multipart/form-data">
                    <h3 class="mb-4">EDITAR USUARIOS</h3>
                    <div class="form-group">                   
                        <label for="nombre"> Nombre:</label>
                        <input type="text" class="form-control" name="nombre" id="nombre" value="<?php echo $nombre?>" size="35"/>
                    </div>
                    <div class="form-group">
                        <label for="apellido"> Apellidos:</label>
                        <input type="text" class="form-control" name="apellido" id="apellido" value="<?php echo $apellido?>" size="35"/>
                    </div>
                    <div class="form-group">
                        <label for="telefono"> Telefono:</label>
                        <input type="text" class="form-control" name="telefono" id="telefono" value="<?php echo $telefono?>" size="35"/>
                    </div>
                    <div class="form-group">
                        <label for="correo"> Correo Electronico:</label>
                        <input type="text" class="form-control" name="correo" id="correo" value="<?php echo $correo?>" size="35"/>
                    </div>
                    <div class="form-group">
                        <label for="contra"> Contraseña:</label>
                        <input type="text" class="form-control" name="contra" id="contra" value="<?php echo $contrasenia?>" size="35"/>
                    </div>                
                    <input type="submit" class="btn btn-primary" value="Actualizar Alumno"/>
                    <input type="hidden" value="<?=$id?>" name="id">                    
                </form>
                <a class="btn btn-secondary mt-3" href="./menu_alumno.php">Volver</a> <!--para salir al index principal-->
            </article>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </body>
</hmtl>

<!-- Terminado por Farley Viveros Blanco -->