<!DOCTYPE html>
<html>
	<head>
		<style>
			body {
				background: lightblue;
				width: 100vw;
				height: 100vh;
			}
			main {
				margin-top: 200px;
			}
		</style>
	</head>
	<body>
		<?php include "header.html"; ?>
		<main>
			<div id="error-message">
				<h1 id="error-type"></h1><br><p id="error-content"></p>
			</div>
		</main>
		<script type="text/javascript">
			const errorWelcome = "Oh No! you got an error: ";
			const urlParams = new URLSearchParams(window.location.search);
			const error = urlParams.get("e");
			var title = errorWelcome;
			var message = "This means that ";
			if(error == "500") {
				title += "500";
				message += "the server encoutnered an unexpected error! Try going <a href='/'>Home instead</a>";
			} else if(error == "403") {
				title += "403";
				message += "you do not have access to this site! Try going <a href='/'>Home instead</a>";
			} else { //default err 404
				title += "404";
				message += "the page you are looking for does not exist! Try going <a href='/'>Home</a> instead";
			}
			document.getElementById("error-type").innerHTML = title;
			document.getElementById("error-content").innerHTML = message;
		</script>
	</body>
</html>