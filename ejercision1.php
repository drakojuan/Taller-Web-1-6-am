<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title>Ejercisio n1</title>
</head>
<body>
    <div class='box'>
    <div class="section1">
			<div class="content">
				<form class='Form1' action="ejercision1.php" method="POST">
						<div class='ac1'>
						<p><label>Elejir Operacion <input type="text" name="eleccion" list="listaNumeros"></label></p>
							<datalist id="listaNumeros">
									<label>O elige uno de la siguiente lista</label>
										<select name="Seleccionar">
											<option name='Suma'>Suma</option>
											<option name='Resta'>Resta</option>
											<option name='Multiplicacion'>Multiplicacion</option>
											<option name='Division'>Division</option>
										</select>
								  </label>
								</datalist>
								<br><br>
							<input type="number" placeholder='Numero:1' name='Num1'>
							<input type="number" placeholder='Numero:2' name='Num2'>
							<input type="submit" placeholder='Calcular' name='Btn1'>
						</div>
				</form>
				<?php
					if(isset($_POST['Btn1'])){
						$Numero1=$_POST['Num1'];
						$Numero2=$_POST['Num2'];
						$total=0;

						$Seleccionar=$_POST['eleccion'];

						switch ($Seleccionar) {
							case 'Suma':
								$total = $Numero1+$Numero2;
								echo 'la suma de los numeros es de: ',$total;
								break;
							case 'Resta':
								$total = $Numero1-$Numero2;
								echo 'la Resta de los numeros es de: ',$total;
								break;
							case 'Multiplicacion':
								$total = $Numero1*$Numero2;
								echo 'la Multiplicacion de los numeros es de: ',$total;
								break;
							case 'Division':
								$total = $Numero1/$Numero2;
								echo 'la Division de los numeros es de: ',$total;
								break;
							default:
							}
					}
				?>
			</div>
		</div>
    </div>
</body>
</html>