<!DOCTYPE html>
<html>
<head><title>Curso Inteligente</title>
	<meta charset="utf-8">
	 <meta name="description" content="Free Web tutorials">
	 <meta name="viewport" content="width=device-width, initial-scale=1.0">
	 <link rel="stylesheet" type="text/css" href="../css/estilos.css">
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
<script type="text/javascript" src="">

</script>

<!-- ../js/countdown_me.js -->
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


	<div id="mostrar2">Mostrando
		<div id="rectangulo"></div>
			<button id="mostrar">Mostrar</button>
			<button id="reiniciar">Reiniciar</button>
		</div>
		


</div>
<script type="text/javascript">

	//alert("Falta programar el ejercicio por tiempo sin necesidad de la intervención /n del usuario");

/*  function prueba() {
	var paramSpeed=$("#selectSpeed1").val();
    explode(paramSpeed);
}

1 GOLPE DE VISTA
2 ENFOQUE SUPERIOR
3 SALTO DE VISTA HORIZONTAL
4 SALTO DE VISTA VERTICAL
5 ENFOQUE PERIFÉRICO






*/

	var velocity;
	var intervalEffect;
	var controlFirsTime = false;
	$(document).ready(function() {
		$("#mostrar").click(function(){
			velocity = $("#selectSpeed1").val();
			//intiEffect(velocity);
			getDataAnimateAndStartEffect();
			setTimeout(function(){
				$("#rectangulo").stop();
				//clearInterval(intervalEffect);
			},13000);
		});
 			
	});

	var datos = [
		{
			left : 890,
			width : 71
		},
		{
			left : 0,
			top: 170
		},
		{
			left : 890
		},
		{
			top: 370,
			left: 0
		},{

			left:890
		},{
			top: 570,
			left:0
		},{

			left:890
		},{

			left:0,
			top:770
		},{

			left:890
		},{

			left:0,
			top:870
		},{

			left:890,
			marginTop:0
		
		}
	];

	var indice = -1;
	function getDataAnimateAndStartEffect(){
		indice++;
		if(indice == datos.length){
			indice = 0;
			alert(indice);
		}
		animate(datos[indice]);

	}
	function animate(datos){
		$("#rectangulo").animate(datos, velocity, function(){
			getDataAnimateAndStartEffect();
		});
	}



		function intiEffect(velocity){
			explode(velocity);
			/*intervalEffect = setInterval(function(){
				explode(velocity);
			},5000)*/
			setTimeout(function(){
				$("#rectangulo").stop();
				clearInterval(intervalEffect);
			},13000);
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
																$("#rectangulo").animate({left:0,top:10}, speed,function(){
																	explode(velocity);
																});
															});
															//alert("ultima coordenada");
														
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

countdown('199505', 'clock', '¡Ya empezo!');

</script>


</body>
</html>
