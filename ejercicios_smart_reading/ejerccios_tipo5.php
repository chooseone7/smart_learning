<!DOCTYPE html>
<html>
<head><title>Curso Inteligente</title>
	<meta charset="utf-8">
	 <meta name="description" content="Free Web tutorials">
	 <meta name="viewport" content="width=device-width, initial-scale=1.0">
	 <link rel="stylesheet" type="text/css" href="../css/estilos.css">
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
<script type="text/javascript" src=""></script>

<style>

.number_excercise{
	border-radius:50px;
	display: inline-block;
	/*height: 60px;*/
	padding:14px;
	position: relative;
	width: 21px;

}

</style>

<!-- ../js/countdown_me.js marcjav7@gmail.com-->
</head>
<body>


	<div id="clock">
	</div>
	<div class="container">
	<label>Velocidad</label>
	<select id="selectSpeed1">
		<option value="100">100</option>
		<option value="300">300</option>
		<option value="500">500</option> 
		<option value="1000">1000</option>

	</select>
	<label>Ejercicio</label>
		<select id="selectSpeed1">
		<option value="100">2 columnas</option>
		<option value="300">3 columnas</option>
		<option value="500">inverso 1 columna</option> 
		<option value="1000">inverso 2columnas</option>

		</select>
		<div style="display:none">
				<h4>1-. Reducir distracciones </h4>
						<h5>Lugar de estudio limpio. Todo lo que no ayuda estorba</h5>
						
				<h4>2-. Límite temporal - 20-30 minutos</h4>
				<h4>3-. Inspeccionar el material</h4>
					<h5>Prefacio, Índice, resúmenes de temas</h5>
				<h4>4-. Hacenos preguntas</h4>
					<h5>Qué, Dónde, Cómo, Cuándo, Por qué, Para qué...
						Ocupar nuestra mente con un propósito</h5>

				<h4>5-. Leer: Visualizar, comprendiendo vocabulario</h4>
				<h4>6-.Comprueba las respuestas</h4>
				<h4>7Resumen</h4>
				<h5>Puedo contárselo a otros? Puedo explicarlo?</h5>
				<!--<div id="ejercicio1">  
						Eres mi verdad y nada me importa mas que tu amar
						Eres mi verdad al ver tus bellos ojos despertar, mi amor
						Eres mi verdad por siempre desde ahora yo de ti seré
						Eres mi verdad no mas preocupaciones ni temor, nunca me ire

						Nada se compara contigo las emociones mas profundas 
						y tantas iluciones juntas 
						solo he podido descubrirlas junto a ti, 
						tu me fascinas y eres la tentacion mas exquisita. 

						Nada se compara contigo no tuve amor mas impetuoso 
						y la pasion que en ti derrocho 
						y aunque parezca fantacioso es asi de lo vivido 
						nada se compara contigo. 

						Hacer siempre una prelectura-portada, contraportada, índice,...
						PRIMER NIVEL: 
								1Apuntar y seguir
								2Guía pendular, movimeinto natural en el cuerpo
									sístole, diástole, 1hemisf otro hemisf, oscilación, dualidad del
									todo el universo también en el ser humano
								3Anclaje digital	
				</div>-->	
		</div>Mostrando<button id="mostrar">Mostrar</button>
				<button id="reiniciar">Reiniciar</button>
		<div id="mostrar2">
			<span class="number">1</span>
			<span class="number">2</span>
			<span class="number">3</span>
			<span class="number">4</span>
			<span class="number">5</span>
			<span class="number">6</span>
			<span class="number">7</span>
			<span class="number">8</span>
			<span class="number">9</span>
			<span class="number">10</span>
			<span class="number">11</span>
			<span class="number">12</span>
			<span class="number">13</span>
			<span class="number">14</span>

			<div id="rectangulo"></div>
				
			</div>
		


   </div>
<script type="text/javascript">
  function prueba() {
	var paramSpeed=$("#selectSpeed1").val();
    explode(paramSpeed);
}


	var intervalEffect;
	$(document).ready(function() {
		number_excercise();
		$("#mostrar").click(prueba);
 
		});


        var number_excercise=function(){



		for(var i=0;i<=8;i++)        	
        	{
        	 var textP=document.createElement("p");
        	 var textP2=document.createElement("p");
        	 
        	 textP.innerHTML ="1";
        	 textP.style.marginTop="24%";
        	 textP.style.fontSize="26px";


        	$("span.number:odd").addClass("number_excercise");
        	$("span.number:odd").css({"background-color":"#f60", "margin-left":890});//.append(textP);


        	$("span.number:even").addClass("number_excercise");
        	$("span.number:even").css({"background-color":"#3399CC", "top":50});//.append(textP);
        		//alert();
        	}

        }			
		var explode=function(speed1)			
		{
		var speed= parseInt(speed1);
		$("#rectangulo").animate({left:890, width:71}, speed, function(){
			//alert("1 move");
			$("#rectangulo").animate({left:0, top:170}, speed, function(){
				//alert("2 move");
				$("#rectangulo").animate({left:890}, speed, function(){
					//alert("3 move");
						$("#rectangulo").animate({top:370, left:0 }, speed,function(){
							//alert("4 move");
								$("#rectangulo").animate({left:890 },speed, function(){
									//alert("5 move");
										$("#rectangulo").animate({top:570, left:0 }, speed,function(){
											//alert("6 move");
											$("#rectangulo").animate({left:890 }, speed,
											function(){
													//alert("7 move");
													$("#rectangulo").animate({left:0, top:770 }, speed, function(){
														$("#rectangulo").animate({left:890}, speed, function(){
														$("#rectangulo").animate({left:0,top:870}, speed, function(){
															$("#rectangulo").animate({left:890}, speed, function(){
																$("#rectangulo").animate({left:0,top:10}, speed);
															});
															alert("ultima coordenada");
														
														});
														});
													});
												});
										});
								});
						});				

				});
			});
			
		});
		//primer cierre
		/*

	Av/ 16 d julio
	Calle luis espinal 46
	Hay un colegio fautos medrano  alado una cancha  cruzas alfrentre hay un puente entra por ahy en la esquina ahy mano izquierda

/El profeta Habacuc dijo: “Aunque la visión tardará aún por un tiempo, mas se apresura hacia el fin, y no mentirá; aunque tardare, espéralo, porque sin duda vendrá” (Habacuc 2:3).
	Ron Sergiew taelwpmdp
	https://www.youtube.com/watch?v=V2xVkb-_ySY
	avaScript and the DOM (Part 2 of 2)
	https://www.youtube.com/watch?v=ZoFlcv2ByBo
: “Por lo demás, hermanos, todo lo que es verdadero, todo lo honesto, todo lo justo, todo lo puro, todo lo amable, todo lo que es de buen nombre; si hay virtud alguna, si algo digno de alabanza, en esto pensad” (Filipenses 4:8).*/

		
	}
	$("#reiniciar").click(function(event) {

		$("#rectangulo").animate({left:0,top:33}, 500, function(){});
		clearInterval(intervalEffect);
	});
	

	
	const getRemainingTime = deadline => {
  		let now = new Date(),
    	 remainTime = (new Date(deadline) - now + 1000) / 1000,
      	 remainSeconds = ('0' + Math.floor(remainTime % 60)).slice(-2),
      	 remainMinutes = ('0' + Math.floor(remainTime / 60 % 60)).slice(-2);

  return { remainSeconds, remainTime }
};

const countdown = (deadline,elem,finalMessage) => {
  const el = document.getElementById(elem);

  const timerUpdate = setInterval( () => {
    let t = getRemainingTime(deadline);
    el.innerHTML = `${t.remainSeconds}s`;

    if(t.remainTime <= 1) {
      clearInterval(timerUpdate);
      el.innerHTML = finalMessage;
    }

  }, 1000)
};

//countdown('199505', 'clock', '¡Ya empezo!');

</script>


</body>
</html>
<!--<div id="mostrar" style="border:1px solid brown;">
			Mostrando
			590-106 ALVARO TORREZ nada se compara contigo
			125-436 DANIELA CAMPOS
			34 - 641 MARCO SAUCEDO
			82- 1906 juan tavares Con el corazón en la mano

		</div> 

-->