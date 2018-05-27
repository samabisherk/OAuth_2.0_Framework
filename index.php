<?php
	session_start();

	if (!isset($_SESSION['access_token'])) {
		header('Location: login.php');
		exit();
		
	}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Profile</title>
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
</style>
<body>
	<div class="container" style="margin-top: 100px">
		<div class="row justify-content-center">
			<div class="col-md-3">
				<img src="<?php echo $_SESSION['userData']['picture']['url'] ?>"><br><br>
				<p style="color:blue;">Logged in as: <?php echo $_SESSION['userData']['first_name'] ?> <?php echo $_SESSION['userData']['last_name'] ?> </p>
			</div>

			<div class="col-md-9">
				<table class="table table-hover table-bordered">
					<tbody>
						<tr>
							<td>ID</td>
							<td><?php echo $_SESSION['userData']['id'] ?></td>
						</tr>
						<tr>
							<td>First Name</td>
							<td><?php echo $_SESSION['userData']['first_name'] ?></td>
						</tr>
						<tr>
							<td>Last Name</td>
							<td><?php echo $_SESSION['userData']['last_name'] ?></td>
						</tr>
						<tr>
							<td>Email</td>
							<td><?php echo $_SESSION['userData']['email'] ?></td>
						</tr>
					</tbody>
				</table>
				<input type="button" onclick="window.location.href='logout.php'" value="Logout" class="btn btn-primary" style="float:right;"><br> <br> <br> <br> 
				<style> hr { background-color: gray; height: 1px; border: 0; } </style> <hr>
				For more info: Visit  <a href="https://mranonymousworld.blogspot.com/" target="_blank"> Mr Anonymous</a><br>
				For Source Code: Visit  <a href="https://github.com/samabisherk/OAuth_2.0_Framework" target="_blank"> R Sam Abisherk</a> 
				<br> <br> 
											<pre style="margin-left: 25em">Developed by: R Sam Abisherk</pre>
			</div>
		</div>
	</div>
</body>
</html>