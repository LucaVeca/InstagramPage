<?php 
	//Configuration for PHP server
	set_time_limit(0);
	ini_set('default_socket_timeout', 300);
	//starts session
	session_start();
	//Make Constants using define
	define("clientID", '78ed3591a4da4b6c991290b24fee2970');
	define('clientSecret', 'efef604516504205a5fb3f811b3b7d2a');
	define('redirectURI', 'http://localhost/appacademyapi/index.php');
	define('ImageDirectory', 'pics/');
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="description" content="">
	<meta name="viewport" content="width098, intitial-scale = 1">
	<title>InstApi</title>
	<meta rel="stylesheet" href="css/style.css">
	<meta rel="author" href="humans.txt">
</head>
<body>
	<!-- Creating a login for people to go and give approval for our web app to access their Instagram Account
		 After getting aprroval we are now going to have the information so that we can play with it.
	 -->
	<div><a href="https://api.instagram.com/oauth/authorize/?client_id=<?php echo clientID; ?>&redirect_uri=<?php echo redirectURI; ?>&response_type=code">Login</a></div>
	<script src="js/main.js"></script>
</body>
</html>

