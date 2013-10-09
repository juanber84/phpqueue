<?php 
	session_start();
	if (!isset($_SESSION['user'])) : 
		header("Location: login.php");
	endif; 
?>
<!DOCTYPE html>
<html>
	<head>
		<title>phpqueueDASHBOARD</title>
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	</head>
	<body>
		<h1>phpqueue</h1>
		<table>
			<thead>
				<th>Queure</th>
				<th>Status</th>
				<th>Messages</th>				
			</thead>
			<tbody id="tbody"></tbody>			
		</table>
		<script type="text/javascript">
			setInterval(function(){$('#tbody').load('status.php')},500);			
		</script>
	</body>
</html>
