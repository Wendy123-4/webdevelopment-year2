<?php include('function.php') ?>


<!DOCTYPE html>
<html>
<head>
	<title>Registration system </title>
    <meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/login.css" />
<style>
ul {
  background-color: #6A1B9A; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
</style>
</head>

<body >
<!-- Header -->

</header>
<header id="header">
				<nav id="nav">
					<ul>
					<button onclick="window.location.href = 'homepage.php';">Home</button>

					</ul>
				</nav>

			</header>


<div class="header">
	<h2>Register</h2>
</div>
<form method="post" action="register.php">
<?php echo display_error(); ?>
	<div class="input-group">
		<label>Username</label><br><br>
		<input type="text" name="username" value="<?php echo $username; ?>">
	</div>
	<div class="input-group">
		<label>Email</label><br><br>
		<input type="email" name="email" value="<?php echo $email; ?>">
	</div>
	<div class="input-group">
		<label>Password</label><br><br>
		<input type="password" name="password_1">
	</div>
	<div class="input-group">
		<label>Confirm password</label><br><br>
		<input type="password" name="password_2">
	</div>
	<div class="input-group"><br><br>
		<button type="submit" class="btn" name="register_btn">Register</button>
	</div>
	<p>
		Already a member? <a href="login.php">Log in</a>
	</p>

</form>
    
</body>
</html>




