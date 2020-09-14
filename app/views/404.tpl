<!DOCTYPE html>
<html>
	<!-- Configure template / excel so that they appear -->
	{{include 'components/utils/head.tpl'}}	
	<body>
		<!---
		 ! Modifica este texto como tu lo desees, recuerda que cada vez que un usuario ingrese a una pagina no existente
		 ! este archivo le mostrara un texto "no existe"
		-->
		<!-- Content -->
		<div class="_404">
			<p>{{$body}}</p>
		</div>
		<!-- / Content -->

	<!-- Configure 'template/overall/scripts.tpl' to be able to place your scripts and appear in the template-->
	{{include 'components/utils/scripts.tpl'}}
	</body>
</html>