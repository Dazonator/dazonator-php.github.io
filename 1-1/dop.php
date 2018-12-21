<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>1-1_dop</title>
	</head>


	<?php 
		$x = rand(0,100);
		$y = $_GET['y'];
		$one = 1;
		$two = 1;
	?>

	<body>
		<h1>Дополнительное задание к лекции 1.1 «Введение в PHP»</h1>
		<h2>Вариант выполнения задания с использованием функции <code>rand(1,100)</code></h2>
		<p class="res">
			<?php 

				while(true){
					if($one > $x){
						echo "Число " . $x . " НЕ входит в числовой ряд";
						break;
					} elseif($one == $x){
						echo "Число ". $x ." входит в числовой ряд";
						break;
					} else {
						$three = $one;
						$one += $two;
						$two = $three;
					}
				}
			 ?>		 	
		 </p>

		<h2>Вариант выполнения задания с передачей числа через адресную строку</h2>
		<p>Ввод числа пользователем осуществляется через адресную строку в виде <code>.../intro-dop.php?x=13</code>. Задано число ' <?php echo $y; ?> '.</p>
		<p class="res">
			<?php 

				while(true){
					if($one > $y){
						echo "Число " . $y . " НЕ входит в числовой ряд";
						break;
					} elseif($one == $y){
						echo "Число ". $y ." входит в числовой ряд";
						break;
					} else {
						$three = $one;
						$one += $two;
						$two = $three;
					}
				}
			?>		 	
		 </p>

	</body>

</html>