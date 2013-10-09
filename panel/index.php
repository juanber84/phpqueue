<?php
	if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	    echo "string"; exit;
	}	
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php if (isset($_SESSION['s_username'])) : ?>
	<h1>phpqueue</h1>
<?php else : ?>
	<form action="" method="post">
		<label>User</label><input type="text"><br>
		<label>Password</label><input type="passsword"><br>
		<input type="submit">
	</form>
<?php endif; ?>

</body>
</html>
