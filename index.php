
<?php
session_start();
if(isset($_SESSION['usuario'])){
     echo "Bienvenido session  ". $_SESSION['usuario'];
     header("Location: dashboard.php");
     die();
}
else{
    echo "sin sesion";
    
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <h1 class="page-header">Formulario</h1>

    <form id="formulario" method="POST" action="dashboard.php">

        <div class="form-group">
            <label>Nombre</label>
            <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Ingrese su nombre"/>
            <span data-key="nombre" class="badge badge-danger"></span>
        </div>
        
        <div class="form-group">
            <label>Apellido</label>
            <input type="text" name="apellido" id="apellido" class="form-control" placeholder="Ingrese su apellido"/>
            <span data-key="apellido" class="badge badge-danger"></span>
        </div>

        <div class="form-group">
            <label>Correo Electronico</label>
            <input type="text" name="correo" id="correo" class="form-control" placeholder="Ingrese el correo"/>
            <span data-key="correo" class="badge badge-danger"></span>
        </div>

        <div class="form-group">
            <input type="submit" class="btn btn-primary" value="Ingresar"/>
            

        </div>
        

    </form>
</div> 



    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script>

        $(document).ready(function(){

            var form = $("#formulario");
            form.submit(function(){
             
                form.find('.badge-danger').text('');  
                var nombre =document.getElementById("nombre").value;
                var apellido =$("#apellido").val();
                var correo = document.getElementById("correo").value;
                $.ajax({
                    url:"procesa.php",
                    method: "POST",
                    data: {
                        'nombre': nombre,
                        'apellido': apellido,
                        'correo': correo

                    },
                  //  data: form.serialize(),
                    beforeSend: function() {
                        alert ("Cargando......");
                    },
                    success:function(resp){
                        if(!resp.respuesta){
                            for(let k in resp.errores){
                                $("span[data-key='" + k + "']").text(resp.errores[k]);
                            }
                        }
                        else {
                        $("#nombre").val("");
                        $("#apellido").val("");
                        $("#correo").val("");
                       // window.location.href = "dashboard.php";
                        }}
                    
                    
                        
                ,
                    error: function() { 
                        alert ("Error");
                },
                    dataType: "json"

                });//fin del ajax              
               
                return false;
                 
            });
            
            
        }); //fin de document

    </script>
</body>
</html>