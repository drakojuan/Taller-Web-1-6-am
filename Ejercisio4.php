<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title>Ejercisio n4</title>
</head>
<body>
    <div class='box'>
    <div class="section4">
			<div class="content">
				<form action="Ejercisio4.php" method='POST'>
					<input type="text" placeholder='N_zapatos' name="Nzapatos">
					<input type="submit" placeholder='enviar' name='Btn5'>
				</form>
				<?php
				if (isset($_POST['Btn5'])) {
					$Precio=200000;
					$Num=$_POST['Nzapatos'];
					$total=$Precio*$Num;

					if ($Num=3) {
						$Desc=$total*0.10;
						$recibo=$total-$Desc;
						echo('El descuento sobre sus zapatos comprados es de '. $Desc);
						echo "<br />";
						echo('Total recibo a pagar: '.$recibo);
					}
					if ($Num>3 && $Num<8) {
						$Desc=$total*0.25;
						$recibo=$total-$Desc;
						echo('El descuento sobre sus zapatos comprados es de '. $Desc);
						echo "<br />";
						echo('Total recibo a pagar: '.$recibo);
					}
					if ($Num>=8) {
						$Desc=$total*0.50;
						$recibo=$total-$Desc;
						echo('El descuento sobre sus zapatos comprados es de '. $Desc);
						echo "<br />";
						echo('Total recibo a pagar: '.$recibo);
					}
					else{
						echo('usted no tiene derecho a un descuento');
					}
				}
				?>
			</div>
		</div>
    </div>
</body>
</html>