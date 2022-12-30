<!DOCTYPE html>
<HTML>
<head>
	<title>Test Signon - v0.1</title>
</head>

<body>
	<h1>Test Signon - v0.1</h1>

	Userid : <?php echo $_POST['userid']; ?>
	<br><br>
	Password : <?php echo $_POST['password']; ?>
	<br><br>
	Client screen width : <?php echo $_POST['width']; ?>
    <br><br>
	Client screen height : <?php echo $_POST['height']; ?>
	<br><br>
	Client Browser : <?php echo $_SERVER['HTTP_USER_AGENT']; ?>
	<br><br>
	Client IP Address : <?php echo $_SERVER['REMOTE_ADDR']; ?>

</body>
</HTML>
