<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title>Ejercisio n3</title>
</head>
<body>
    <div class='box'>
    <div class="section3">
			<div class="content">
				<form action="Ejercisio3.php" method='POST'>
					<input type="text" placeholder='Horas Trabajadas' name='Htrabajadas'>
					<input type="text" placeholder='Horas Extras Trabajadas' name='Hxtras'>
					<input type="submit" placeholder='Enviar' Name='Btn3'>
				</form>
				<?php
				if (isset($_POST['Btn3'])) {
					$Htrab=$_POST['Htrabajadas'];
					$Hxtra=$_POST['Hxtras'];
					$total=$Htrab+$Hxtra;

					if ($total<=40) {
						$salario=$total*20000;
					}
					else {
						$Htrab=$Htrab*20000;
						$Hxtra=$Hxtra*25000;
						$salario=$Htrab+$Hxtra;
					}
					echo('Su salario semanal es de: '.$salario.' Mil pesos');
				}
				?>
			</div>
		</div>
    </div>
</body>
</html>