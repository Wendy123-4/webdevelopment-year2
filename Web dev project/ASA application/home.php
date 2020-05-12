<?php 
include('function.php');

if (!isAdmin()) {
	$_SESSION['msg'] = "You must log in first";
	header('location: login.php');
}

if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['user']);
	header("location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Panel</title>
    <style>
    body{
             margin: 0px
             border: 0px
    }
    #header{
    width: 1004;
    height: 120px;
    background: #37474F;
    color: white;
    }
    #sidebar{
    width: 300px;
    height: 400px;
    background: #455A64;
    color: white;
    float: left;
    }
    #data{
    height: 700px;
    background: #455A64;
    color: white;
    font-family: Helvetica;
    font-size: 25px;
    }
    #adminlogo{
    background: white;
    border-radius: 50px;
    }
    ul li{
    padding: 20px;
    border-bottom: 2px solid grey;
    font-family: Helvetica;
    font-size: 27px;

    }
    ul li: hover{
    background: #c0392b;
    color: white;
    }



.myButton {
	box-shadow: 3px 4px 0px 0px #1564ad;
	background:linear-gradient(to bottom, #79bbff 5%, #378de5 100%);
	background-color:#79bbff;
	border-radius:5px;
	border:1px solid #337bc4;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family:Arial;
	font-size:17px;
	font-weight:bold;
	padding:12px 44px;
	text-decoration:none;
	text-shadow:0px 1px 0px #528ecc;
}
.myButton:hover {
	background:linear-gradient(to bottom, #378de5 5%, #79bbff 100%);
	background-color:#378de5;
}
.myButton:active {
	position:relative;
	top:1px;
}



    </style>
</head>
<body>
<div id="header">
    <center>
        <img src="images/admin.png" alt="adminLogo" width="75" height="75"><br>Welcome to the Admin Panel
    </center>



</div>

<div id="sidebar">
<nav>
    <ul>
        <li><a href="view.php" class="myButton">
            View Applications
        </a></li>
        <li><a href="edit.php" class="myButton">
            Edit Application
        </a></li>

    </ul>

</div>

<div id="data"><br><br><br>
    <center><h3>African Science Academy Application Forms</h3>
     <img src="images/form.jpeg" alt="formsLogo" width="150" height="150">
    </center>

</div>
</body>
</html>