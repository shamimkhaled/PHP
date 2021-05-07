
	<!DOCTYPE html>
	<html>
	<head>
		<title>Dynamic HTML Content</title>
	</head>
	<body>
		<form method="POST">
			Enter your favourite color <input type="text" name="favcolor">
			<input type="submit" name="submit" value="Check Now">
		</form>

		<p>
			<?php
				if(isset($_POST['submit'])){
					$favcolor = $_POST['favcolor'];
					switch ($favcolor) {
						case 'blue':
							echo "Favourite Color is Blue";
							break;
						case 'red':
							echo "Favourite Color is Red";
							break;
						case 'green':
							echo "Favourite Color is Green";
							break;
						case 'white':
							echo "Favourite Color is White";
							break;
							case 'orange':
						echo "Favourite Color is Orange";
							break;
						case 'black':
							echo "Favourite Color is Black";
							break;
						default:
							echo "Not sure about your favourite color";
							break;
					}
				}
			?>
		</p>
	</body>
	</html>

