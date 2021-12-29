<!DOCTYPE html>
<html>
<head>
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	 <link rel="stylesheet" type="text/css" href="style.css">

	<title>User Login and Registration</title>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
	<div class="login-box">
	<div class="row">
		<div class="col-md-6 login-left" >
			<h2>Login Here</h2>
			<form action="validation.php" method="post">
				<div class="form-group">
					<label>Username</label>
					<input type="text" name="user" class="form-control" required="">
				</div>
				<div class="form-group">
				    <label>Password</label>
					<input type="Password" name="Password" class="form-control" required="">
				</div>
				<button type="submit" class="btn btn-primary">Login</button>
			</form>
		</div>
<!-- validation -->
		<div class="col-md-6 login-right">
			<h2 class="title">Register</h2>
			<form action="registration.php" method="post">
				<div class="form-group">
					<label>Username</label>
					<input type="text" name="user" class="form-control" required="">
				</div>
				<div class="form-group">
				    <label>Password</label>
					<input type="Password" name="Password" class="form-control" required="">
				</div>
				<button type="submit" class="btn btn-primary">Register</button>
			</form>
		</div>


	</div>
</div>

</div>
</body>
</html>