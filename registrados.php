<!DOCTYPE html>
<html lang="en">
<meta name="viewport" content="width=device-width, initial-scale=1">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1"><!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link href="style.css" rel="stylesheet">
	<title>Empleados registrados</title>
</head>
<body>
	<?php include 'conexion.php';
	
	?>
	<center><h3>Empleados registrados</h3></center>
	<div class="container">
		<?php
		
		echo <<< HTML
		<table class="table table-striped">
			<thead>
				<tr>
					
					<th>Nombre</th>
					<th>Apellido Parterno</th>
					<th>Apellido Materno</th>
				</tr>
			</thead>
			<tbody>
				HTML;
				foreach ($rows as $row) {
					echo <<< HTML
					<tr>
						
						<td >$row[nombre]</td>
						<td>$row[apellido_paterno]</td>
						<td>$row[apellido_paterno]</select></td>
						
					</tr>
					
					HTML;
				}
				echo '</tbody>';
				echo '</table>';
				
				?>

			</tbody>
		</table>
	</div>
</body>
</html>