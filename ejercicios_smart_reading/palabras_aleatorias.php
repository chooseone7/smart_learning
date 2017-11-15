<?php
// definimos un array de valores en php
$arrayPHP = array(
 0 =>"rojo", 1 => "magenta", 2 => "Una muñeca", 3=>"fucsia", 4=>"cian",5 => "aqua" );
?>
<html>
<head>
	<meta charset="utf-8">
	<title>Palabras aleatorias</title>
</head>
<body>
    <p id="demo">Palabra!</p>
    <input type="button" value="iniciar" onclick="print()"> 
</body>
JavaScript

<script type="text/javascript">
// obtenemos el array de valores mediante la conversion a json del
// array de php
var arrayJS=<?php echo json_encode($arrayPHP);?>;

// Establecemos el valor minimo y maximo del array.
var max = <?= count($arrayPHP)-1 ?>;
var min = 0;
//Contador para controlar las pulsaciones del usuario.
var contador = 1;

function print() {
    var ind= randomIntFromInterval(min,max);
        if(contador <= 3) {
            document.getElementById("demo").innerHTML = arrayJS[ind];
            contador++;
        } else {
           document.getElementById("demo").innerHTML.style.backgroundColor = "blue";
        }
}
//Genera numeros aleatorios entre un rango dado por parametro.
function randomIntFromInterval(min,max) {
    return Math.floor(Math.random()*(max-min+1)+min);
}
//Convertimos un objeto PHP a JavaScript mediante var arrayJS=<?php echo json_encode($arrayPHP);?>;.

//He tenido un problema al convertir el objeto y es que el indice del array en php debe comenzar en 0.
</script>
</html>