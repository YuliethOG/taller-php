
<h1>Bienvenido a la pagina de ejercicios</h1>
<?php

session_start();
if(isset($_SESSION['usuario'])){
    echo "Usuario ingresado : ". $_SESSION['usuario'];
}
else{
  header("Location: index.php");
    die();
}

?>
<html>           
    <body  class="text-center" >
       
   
   <h3> Ejercicio A</h3>
  
    Ingrese primer numero: <input class="text-center" type="number" id="num1"> <br> </br>
    Ingrese segundo numero: <input type="number" id="num2" > <br> </br>
    Ingrese tercer numero: <input type="number" id="num3"> <br> </br>
                
     El valor de la suma es:             <span id="suma"></span> <br> </br>

     La cantidad de veces que se a realizado el ejercicio son: <span id="cont"></span> <br> </br>
     <button onclick="suma()">Suma: </button> <br> </br>

     <h3> Ejercicio G</h3>
     Digite su salario bruto: <input type="number" id="salario"> <br> </br>
     Su salario es:              <span id="resultado"></span> <br> </br>
     La cantidad de veces que se a realizado el ejercicio son: <span id="cont1"></span> <br> </br>
     <button onclick="salario()">Salario </button> <br> </br>
   
     <br> </br>
     <h3> Ejercicio H</h3>
    Ingrese la primera nota: <input type="number" id="nota1" > <br> </br>
    Ingrese la segunda nota: <input type="number" id="nota2" > <br> </br>
    Ingrese la tercera nota: <input type="number" id="nota3"> <br> </br>
    Ingrese la cuarta nota: <input type="number" id="nota4"> <br> </br>            
     El Promedio de la nota es:              <span id="promedio"></span> <br> </br>
     La cantidad de veces que se a realizado el ejercicio son: <span id="cont2"></span> <br> </br>
     <button onclick="notas()">Promedio </button> <br> </br>

     <br> </br>

     <h3> Ejercicio J</h3>
     Digite el valor de su compra: <input type="number" id="compra"> <br> </br>
     El valor total de su compra es:              <span id="Total_compra"></span> <br> </br>
     La cantidad de veces que se a realizado el ejercicio son: <span id="cont4"></span> <br> </br>
     <button onclick="compra()">compra</button> <br> </br>

     <a href="logout.php">Cerrar Sesión</a>
     </body>
</html>
 <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
 <script>
     var cont=0;
     var cont1=0;
     var cont2=0;
     var cont4=0;
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
      $('#cont').text(cont+"    veces");

    //  alert(cont);
     }
     function salario(){
         cont1++;
         var resultado = 0;
         var salario = $('#salario').val(); 
         if(salario <=0){
             salario = 0;
         }
         if(salario >2000000){
             salario = salario-(salario*0.1)
            resultado = salario;
         }
         else{
          
           resultado = salario;
         }
         $('#resultado').text(resultado);
        $('#cont1').text(cont1 +"  veces");
     }
     function notas(){
        cont2++;
        var nota1 = $('nota1').val();
        var nota2 = $('nota2').val();
        var nota3 = $('nota3').val();
        var nota4 = $('nota4').val();
        
        if(nota1 <=0){
            nota1=0;
        }
        else {
            nota1 =  parseInt(nota1);
        }
        if(nota2 <=0){
            nota2=0;
        }
        else {
            nota2 = parseInt(nota2);
        }
        if(nota3 <=0){
            nota3=0;
        }
        else {
            nota3 = parseInt(nota3);
        }
        if(nota4 <=0){
            nota4=0;
        }
        else {
            nota4 = parseInt(nota4);
        }
        var suma = nota1 + nota2 + nota3 + nota4;
        var promedio = suma/4;
        if(promedio<3.5){
        }

        else{
        }
         $('#promedio').text(promedio);
         $('#cont2').text(cont2+"    veces");

     }
     function compra(){
         cont4++;
         var resultado1 =0;
         var compra = $('#compra').val();
         if(compra<=0){
             compra = 0;
         }
         if(compra >200000){
             compra = compra-(compra*0.17);
            resultado1 = compra;
         }
         else{
          compra = compra-(compra*0.05);
           resultado1=compra;
     }
     $('#Total_compra').text(resultado1);
      $('#cont4').text(cont4+"    veces");  
     } 
 </script>