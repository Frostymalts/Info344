<html>
	<head>
		<title>PHP Test</title>
	</head>
	<body>
		<form>
			<input type="text" name="number">
			<input type="submit" value="Submit">
		</form>
		<?php
			if (isset($_REQUEST['number'])) {
				$number = $_REQUEST['number'];
				if ($number >= 2 ) {
					echo "2";
					for ($i = 4; $i <= $number; $i+=2) {
					echo ", ".$i;
					}
				}
				echo "<br>";

				for ($i = 2; $i <= $number; $i++) {
					if(isPrime($i)) {
						echo $i." ";
					}
				}
			}

			function isPrime($num) {
				for ($i = 2; $i <= ceil(sqrt($num)); $i++) {
					if ($num % $i == 0) {
						return FALSE;
					}
				}
				return TRUE;
			}
		?>		
	</body>
</html>
