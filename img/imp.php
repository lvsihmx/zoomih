<!DOCTYPE html>
<html lang="es-ES">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Esta descripción es la que aparece en los buscadores debajo de la URL" />
	<link href="practica7.css" rel="stylesheet" type="text/css" />
	<link href="formulario.css" rel="stylesheet" type="text/css" />
	<link href="resets.css" rel="stylesheet" type="text/css" />
	
	<title>Registro de candidato</title>
<body>

 
	<header>
		<img src="LOGOIHB.jpg">
		

	</header>

<main>
		<h1>¡Registro a examen para presentar en International House!</h1>

		<h1>Por favor capture los datos del candidato(a) <u>así aparecerá el certificado</u> </h1>
	


		<form method="post">

			<div class='field'>
				<label>Nombre(s) completos del candidato</label>
				<input name="name" type='text'  placeholder='Nombre(s) completos' required autocomplete />
			</div>



			<div class='field'>
				<label>Apellidos materno y paterno del candidato</label>
				<input name="apellidos" type='text'  placeholder="Apellidos completos" required autocomplete />
			</div>

            


			<div class='field'>
				<label>Fecha de nacimiento del candidato </label>
				<input type="text"name="fechana" pattern="[0-9/]{8,12}"title=" ejemplo:15/02/1980"  placeholder="ejemplo:12/02/1990"
       required autocomplete />
			</div>




<div class='field'>
				<label>correo electronico</label>
				<input name="email" type='email'  placeholder="email" required autocomplete />
			</div>

<div class='field'>
				<label>celular de contacto con whatsapp del padre,madre o tutor.</label>
				<input name="celular" type='number'  placeholder="ingrese solo numeros" required autocomplete />
                			</div>

 <div class='field'>
 <label>Grado escolar</label>
 <input name="identifica" type='text'  placeholder="poner solo numero ejemplo 1,2,3 " required autocomplete />
 </div>


 <div class='field'>
	
    <label>Gender</label>
   <label for "" gender:</label>
   <select required name="gender"[]">
   <option value=""  > Gender</option>
   <option value="male"  > male</option>
   <option value="female" > female</option>
     </select>
                   
           </div>



			<div class='field'>
	
     <label>Examen</label>
    <label for "" examen:</label>
    <select required name="examen"[]">
    <option value="NA"  > deje en blanco</option>
    
    </select>
					
			</div>


                         <div class='field'>


</div>   

     <div class='field'>
     <label>Escuela</label>	
    <label for "" escuela:</label>
    <select required name="escuela"[]">
  	<option value="IMP" > IMP</option>
	
 
           
</select>	</div>

</div>   



<div>
	
    <input type="checkbox" 
    <select required name="enterado"[]"></select> <label>Mis datos estan correctos,así aparecerá en mi certificado,estoy enterado que para concluir la inscripción debo cubrir el costo total y subir mis documentos correctamente.</label>
 
</div>
<div>
	
    <input type="checkbox" 
    <select required name="acepto"[]"></select> <label>Acepto terminos y condiciones</label>
 
</div>
			
<div>
	<input type="submit" name="register" value="Enviar"> <br> Si le aparece  una barra verde con el texto "Datos registrados" quiere decir que tus datos se enviaron. 
 
</div>

        </form>
	
<?php 
        include("registrohumanitas.php");
        ?>


<section class='sctVentajas'>
			<h2>Aviso de Privacidad: Al momento de enviar sus datos acepta que sean utilizados unicamente para el proceso y comunicación en la inscripción al examen, </h2>
			
</section>

<section >
			<h2>  International House resguardará estos datos y al termino del proceso serán destruidos.</h2>
			
</section>

	</main>
</body>

</html>