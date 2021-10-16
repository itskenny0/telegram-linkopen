<html>
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
	<title>LinkBlaster</title>

	<style>
	</style>

	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.1/css/materialize.min.css">

	<link rel="shortcut icon" type="image/png" href="favicon.png">
	<link rel="icon" type="image/png" href="favicon.png" sizes="32x32">
	<link rel="icon" type="image/png" href="favicon.png" sizes="96x96">
</head>
<body>
	<h5>Receiving ...</h5>

	<script>

		let socket = new WebSocket("wss://telegram.kenny.cat/static/link2proj/websocket");

		socket.onopen = function(e) {
			//alert("[open] Connection established");
		};

		socket.onmessage = function(event) {
			//alert(`[message] Data received from server: ${event.data}`);
			window.open(event.data, '_blank').focus();
		};

	</script>
</body>
