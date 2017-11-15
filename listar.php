<?php

	include ("conexion.php");

	$query = "SELECT * FROM usuario WHERE estado = 1 ORDER BY idusuario desc;";
	$resultado = mysqli_query($conexion, $query);

   if(!$resultado){
   	die("Error");
   }else{
   	 while ($data = mysqli_fetch_assoc($resultado)) {
   	 	$arreglo["data"][] = $data;//array_map("utf8_encode", $data);
   	 }
   	 echo json_encode($arreglo);

   }
	mysqli_free_result($resultado);//
	mysqli_close($conexion);// 

   /*

      object, array
      var myCat = {
         "name":"Meowsalot",
         "species":"cat",
         "favFood":"tuna"
      }

      var thePets =[
         {
            "name":"Meowsalt",
            "species":"cat",
            "favFood":"tuna"

         }

      ]
      thePets[1].favFood


      https://learnwebcode.github.io/json-example/animals-1.json


      var ourRequest = new XMLHttRequest();
      ourRequest.open('GET', 'https://learnwebcode.github.io/json-example/animals-1.json');
      ourRequest.onload= function(){//
        console.log(ourRequest.responsetText) ;

        var ourData = JSON.parse(ourRequest.responseText);//ourRequest.responseText;
        console.log(ourData[0]);
      };
      AJAX (Asynchronous Javascript and XML(another data format like jason))
         */

      /*, interesting, in between

      blow away - 
      Use XMLHttpRequest objects to interact with servers. You can retrieve data from a URL without having to do a full page refresh. This enables a Web page to update just part of a page without disrupting what the user is doing.  XMLHttpRequest is used heavily in Ajax programming.

      Execute a JavaScript immediately after a page has been loaded:


*/


