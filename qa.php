<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Keep Eating</title>
	<link href="css/q&a.css" rel="stylesheet" type="text/css">
	<link href="css/position.css" rel="stylesheet" type="text/css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="js/effects.js"></script>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
</head>
<body>
	<?php include 'comuns/header.html'; ?>
  <div class="main-containerQ">
            <div id="nav_formQ" >
                <div id="nav_first_lineQ">
					<div class="int1">
						<img class="Q" src="images/a_4_1.png" alt="Logo Keep Eating"/>
					</div>
					<div class="int4">
						<img class="Q" src="images/a_2_1.png" alt="Logo Keep Eating"/>
					</div>
					<div class="int3">
						<img class="Q" src="images/a_3_1.png" alt="Logo Keep Eating"/>
					</div>
					<div class="int4">
						<img class="Q" src="images/a_4.png" alt="Logo Keep Eating"/>
					</div>

					<div class="int2">
						<img class="Q" src="images/a_1_1.png" alt="Logo Keep Eating"/>
					</div>
					
					<div class="int1">
						<img class="Q" src="images/a_3.png" alt="Logo Keep Eating"/>
                    </div>
				</div>
                <div id="nav_second_lineQ">
					<div class="int4">
						<img class="Q" src="images/a_2_2.png" alt="Logo Keep Eating"/>
					</div>
					<div class="int3">
						<img class="Q" src="images/a_4_2.png" alt="Logo Keep Eating"/>
					</div>
					<div class="int1">
						<img class="Q" src="images/a_3_3.png" alt="Logo Keep Eating"/>
                    </div>
					<div class="int2">
						<img class="Q" src="images/a_1_1.png" alt="Logo Keep Eating"/>
					</div>
					<div class="int4">
						<img class="Q" src="images/a_2_2.png" alt="Logo Keep Eating"/>
					</div>
					<div class="int2">
						<img class="Q" src="images/a_1_2.png" alt="Logo Keep Eating"/>
					</div>
                </div>
            </div>
	</div>
	<div class="main">
		<div class="bottom-sectionQ">
			<div class="bottom-articleQ">
				<p><label for="color">Preguntas frecuentes :</label></p>
				<select name ="color" id="color">
					<option value ="blue" selected ="selected">EXISTE OPCIONES DE SEN-GLUTEN ?</option>
					<option value ="red">Otra opción</option>
					<option value ="green">Otra opción</option>
					<option value ="yellow">Otra opción</option>
				</select>
				<select name ="color" id="color1">
					<option value ="blue" selected ="selected">HAY ALGUN “DRESS CODE” PARA LOS RESTAURANTES ? </option>
					<option value ="red">Otra opción</option>
					<option value ="green">Otra opción</option>
					<option value ="yellow">Otra opción</option>
					<option value ="orange">Otra opción</option>
				</select>
				<select name ="color" id="color2">
					<option value ="blue" selected ="selected">SON PERMETIDOS PERROS? </option>
					<option value ="red">Otra opción</option>
					<option value ="green">Otra opción</option>
					<option value ="yellow">Otra opción</option>
					<option value ="orange">Otra opción</option>
				</select>
			</div>
		
			<div class="bottom-articleQ1">
					<form action="#" method="post" id="formulariPregunta">  
					<p><label for="nombre">Deja tu pregunta :</label></p>
						<p>	<input id="nombre" type="text" name="nombre" value="NOMBRE" onBlur="if(this.value=='')this.value='NOMBRE'" onFocus="if(this.value=='NOMBRE')this.value=''"></p>
						<p>	<input id="email1" type="email1" name="email1" value="E-MAIL" onBlur="if(this.value=='')this.value='E-MAIL'" onFocus="if(this.value=='E-MAIL')this.value=''"></p>
						<p>	<input id="ciudad" type="text" name="ciudad" value="CIUDAD" onBlur="if(this.value=='')this.value='CIUDAD'" onFocus="if(this.value=='CIUDAD')this.value=''"></p>
						<p><textarea id="pregunta" name="pregunta" rows="10" cols="30" maxlength="500" placeholder="PREGUNTA" onBlur="if(this.value=='')this.value='PREGUNTA'" onFocus="if(this.value=='PREGUNTA')this.value=''"></textarea></p>
						<p>	<input id="send" value="ENVIAR" type="submit" class="boton"></p>
					</form>
			</div>
		</div>
		<aside>
		<!--Element de l'aside-->
			<div id="asideItem">
			<h3>Recuerda</h3>
				<p>- Las preguntas deben estar relacionadas con los restaurantes.</p>
				<p>- Las respuestas son envíadas por e-mail.</p>
				<p>- No se les permite enlaces, información de contacto y publicidad.</p>
				<p>- Preguntas deben ser coherente.</p>
			</div>
			
			<div id="asideItem1">
			<h3>Contactos</h3>
				<p>Keep food, LDA</p>
				<p><img class="ic" src="images/ic_1.png" alt="Logo Keep Eating"/>243 36 29 08</p>
				<p><img class="ic" src="images/ic_2.png" alt="Logo Keep Eating"/>698 55 00 25</p>
				<p><img class="ic" src="images/ic_3.png" alt="Logo Keep Eating"/>info@keepfood.com</p>
			</div>
		</aside>
	</div>
<?php include 'comuns/footer.html'; ?>
</body>
</html>