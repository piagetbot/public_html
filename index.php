<!DOCTYPE html>
<html lang="en">
<head>
	<title>PiagetBot</title>
	<style type="text/css">
		@font-face {
			font-family: Lato;
			src: url(fonts/Lato-Regular.ttf);
		}

		@font-face {
			font-family: Lato;
			src: url(fonts/Lato-Bold.ttf);
			font-weight: bold;
		}

		body {
			font-family: Lato;
		}
	</style>
</head>
<body>
	<h1>Nothing much to see here.</h1>
	Have a random cat fact instead: <strong>
	<?php echo(json_decode(file_get_contents("https://catfact.ninja/fact"))->fact); ?></strong>
</body>
</html>
