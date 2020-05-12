<?php
    include('function.php');
    if ((!isLoggedIn())) {
        $_SESSION['msg'] = "You must log in first";
        header('location: login.php');
    }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" href="assets/css/form.css" />
</head>
<body>
	<div class="header" >
		<h2>Application form</h2>
	</div>
	<div >
		<!-- notification message -->
		<?php if (isset($_SESSION['success'])) : ?>
			<div class="error success" >
				<h3>
					<?php 
						echo $_SESSION['success']; 
						unset($_SESSION['success']);
					?>
				</h3>
			</div>
		<?php endif ?>

		<!-- logged in user information -->
		<div >
    <img src="images/loginphoto.jpg",
     width="40" height="40"/>
</div>



            <div>
			<div >
				<?php  if (isset($_SESSION['user'])) : ?>
					<strong ><?php echo $_SESSION['user']['username']; ?></strong>

					<small>
						<i  style="color: #888; align:center; width:70%;">(<?php echo ucfirst($_SESSION['user']['user_type']); ?>)</i>
						<br>
						<a href="index.php?logout='1'" style="color: red;"  >logout</a>
					</small>

				<?php endif ?>
				<div class="form-style-5">
<form action= "index.php" method= "post">

<br><br>
<div class="content">
<fieldset>
<legend><span class="number">1</span> Candidate Info</legend>
<input type="text" name="candidate_name" placeholder="Your Name *" value="<?php echo $candidate_name; ?>">
<input type="email" name="candidate_email" placeholder="Your Email *" value="<?php echo $candidate_email; ?>">
<textarea name="about_yourself" placeholder="About yourself" value="<?php echo $about_yourself; ?>"></textarea>
<label for="job">Contact number:</label>
<input type="number" name="contact" placeholder="Your Number *" value="<?php echo $contact; ?>">
<label for="job">Address:</label>
<input type="text" name="address" placeholder="Your Address *" value="<?php echo $address; ?>">

<label for="job">Interests:</label>
<select id="job" name="interests" value="<?php echo $interests; ?>">
<optgroup label="Indoors">
  <option value="fishkeeping">Fishkeeping</option>
  <option value="reading">Reading</option>
  <option value="boxing">Boxing</option>
  <option value="debate">Debate</option>
  <option value="gaming">Gaming</option>
  <option value="snooker">Snooker</option>
  <option value="other_indoor">Other</option>
</optgroup>
<optgroup label="Outdoors">
  <option value="football">Football</option>
  <option value="swimming">Swimming</option>
  <option value="fishing">Fishing</option>
  <option value="climbing">Climbing</option>
  <option value="cycling">Cycling</option>
  <option value="other_outdoor">Other</option>
</optgroup>
</select>
</fieldset>

<fieldset>
<legend><span class="number">2</span> Additional Info</legend>
<textarea name="why_asa" placeholder="Why ASA?" value="<?php echo $why_asa; ?>"></textarea>

<br><br>
<input type="submit" value="Apply" name= "apply_btn"/>

</div>
			</div>
		</div>
	</div>
	</div>


</body>
</html>