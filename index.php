<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	 <link rel="stylesheet" href="/maps/documentation/javascript/demos/demos.css">
	<script src="https://maps.googleapis.com/maps/api/js"></script>
	<title>Prueba Tecnica Luz</title>
</head>
<body>
<?php include 'conexion.php';

 ?>
	<div class="container">
		<div class="rows">
			<header>
				<h3 class="text-center">Registro de empleados</h3>
			</header>


		<form class="form-horizontal" action="" method="POST">
			<div class="form-group">
				<label class="control-label col-xs-3">Nombre:</label>
				<div class="col-xs-6">
					<input type="text" class="form-control" placeholder="nombre" name="nombre">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-xs-3">Apellido Paterno:</label>
				<div class="col-xs-6">
					<input type="text" class="form-control" name="apellido_paterno">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-xs-3">Apellido Materno:</label>
				<div class="col-xs-6">
					<input type="text" class="form-control" name="apellido_materno">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-xs-3">Email:</label>
				<div class="col-xs-6">
					<input type="email" class="form-control" name="email" placeholder="Email">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-xs-3">Fecha de Nacimiento:</label>
				<div class="col-xs-6">
					<input type="date" class="form-control" name="Fecha_nac" >
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-xs-3">Dirección:</label>
				<div class="col-xs-6">
					<textarea rows="3" class="form-control" name="Direccion"placeholder="Calle,numero,colonia" ></textarea>
				</div>
			</div>
			<div class="form-group">
				<div class="col-xs-offset-3 col-xs-9">
					<input type="submit" class="btn btn-primary"  name="Enviar">
					<input type="reset" class="btn btn-default" name="Limpiar">
				</div>

				</div>
			</div>
			 <div id="map"></div>
   
		</body>
		</html>
		<?php 
if(isset($_GET['Direccion']))
{ 

$direccion=$_GET['Direccion'];
$url_gm = "https://maps.googleapis.com/maps/api/geocode/json?address=" .urlencode($direccion) ."&key=AIzaSyDuQvGudLCcHHriDDxnqKlOWVCq6m6fibI";
$gm_json= file_get_contents($url_gm);
$gm_array=json_decode($gm_json,true);
$lati=$gm_array["results"][0]["geometry"]["location"]["lat"];
$lng=$gm_array["results"][0]["geometry"]["location"]["lng"];
}
?> 

 <script>
     function initMap() {
  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 13,
    center: {lat: parseFloat('<?php echo $lati;?>'), lng: parseFloat('<?php echo $lng;?>')}
  });

  marker = new google.maps.Marker({
    map: map,
    draggable: true,
    animation: google.maps.Animation.DROP,
    position: {lat: parseFloat('<?php echo $lati;?>'), lng: parseFloat('<?php echo $lng;?>')}
  });
  marker.addListener('click', toggleBounce);
}
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDuQvGudLCcHHriDDxnqKlOWVCq6m6fibI&callback=initMap"
    async defer></script>
