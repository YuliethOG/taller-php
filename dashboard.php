
<h1>Bienvenido al dashboard</h1>
<?php

session_start();
if(isset($_SESSION['nombre'])){
    echo "Usuario ingresado : ". $_SESSION['nombre'];
}
else{
  header("Location: index.php");
    die();
}

?>
<html>
    <br> </br>
    Ingrese primer numero: <input type="number" id="num1"> <br> </br>
    Ingrese segundo numero: <input type="number" id="num2"> <br> </br>
    Ingrese tercer numero: <input type="number" id="num3"> <br> </br>
                
     El valor de la suma es:              <span id="suma"></span> <br> </br>

     La cantidad de veces que se a realizado el ejercicio son: <span id="cont"></span> <br> </br>
     <button onclick="suma()">Suma: </button>
   
</html>
 <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
 <script>
     var cont=0;><
     function suma(){
         cont++;
        var numero1 = $('#num1').val(); 
        var numero2 = $('#num2').val(); 
        var numero3 = $('#num3').val(); 

        if(numero1 <=0){
            numero1=0;
        }
        else {
            numero1 = parseInt(numero1);
        }
        if(numero2 <=0){
            numero2=0;
        }
        else {
            numero2 = parseInt(numero2);
        }
        if(numero3 <=0){
            numero3=0;
        }
        else {
            numero3 = parseInt(numero3);
        }
        var suma = numero1 + numero2 + numero3;
       
    
      $('#suma').text(suma);
      $('#cont').text(cont);
    //  alert(cont);
     }
     
 </script>