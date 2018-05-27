<?php
	require_once "config.php";

	if (isset($_SESSION['access_token'])) {
		header('Location: index.php');
		exit();
	}
	//Change the url according to you location.
	$redirectURL = "http://localhost:8181/OAuth2.0_Facebook/fbcallback.php";
	$permissions = ['email'];
	$loginURL = $helper->getLoginUrl($redirectURL, $permissions);
	
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Log In</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
</head>
<style>
body { 
	width: 100%;
	height:100%;
	font-family: 'Open Sans', sans-serif;
	background: black;
	color:white;
}

.fbcontainer:hover {
  opacity: 0.6;
}


</style>
<body>

	<div class="container" style="margin-top: 30px">
		<div class="row justify-content-center">
			<div class="col-md-6 col-md-offset-3" align="center">
				<img src="images/anonymous.jpg" width="400" height="250"><br><br>
				<form>
					<input name="email" placeholder="Email" class="form-control"><br>
					<input name="password" type="password" placeholder="Password" class="form-control"><BR>
					<input type="button" onclick="loginAlert()" value="Log In" class="btn btn-primary popup" style="float:right;" ><BR>
					<img src="images/facebook.png " onclick="window.location = '<?php echo $loginURL ?>';" height="85" class="fbcontainer" style="margin-left: 70px">
					
				</form>
				<pre >Developed by: R Sam Abisherk</pre>
			</div>
		</div>
	</div>
<script>
function loginAlert() {
    alert("You are not a Registered User! Login with Facebook");
}
</script>
</body>
</html>