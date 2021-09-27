<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Login</title>
	<!-- fontawesome -->
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap 4 -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
	<!-- style css -->
	<link rel="stylesheet" type="text/css" href="../assets/login/css/style_login.css">
</head>
<body style="background-color: #667380;">
<div class="container mt-5">
	<div class="content_form row d-flex justify-content-around">
		<div class="col-7 bg-light border rounded">
			<h2 class="text-center my-4 text-info">Module Admin</h2>
			<form method="post" action="index.php?controller=login&action=login" class="p-3 border-top">
		    	<div class="form-group">
		      		<label for="email" class="font-weight-bold">Account:</label>
		      		<input type="email" class="form-control" id="email" placeholder="Enter account" name="email">
		    	</div>
		    	<div class="form-group">
		      		<label for="pwd" class="font-weight-bold">Password:</label>
		     	 	<!-- <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password"> -->
                    <input type="password" name="password" required class="form-control" class="form-control" id="pwd" placeholder="Enter password">
		    	</div>
		    	<div class="checkbox d-flex justify-content-between">
					<label><input type="checkbox"> Remember me</label>
					<label><a href="reset.html">Forgot password?</a></label>
				</div>
				<div class="d-flex justify-content-around mb-4">
					<button type="submit" class="btn btn-success">Login</button>
				</div>
				<div class="form-group d-flex justify-content-around">
					<label><p>Do not you have an account? <a href="signup.html" style="color: black; text-decoration: underline;">Sign up</a></p></label>
				</div>
			</form>
		</div>
	</div>
</div>
</body>
</html>