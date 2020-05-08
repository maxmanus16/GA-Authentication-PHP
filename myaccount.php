<?php
include('connection.php');
if (!isset($_SESSION['googleCode'])):
    header("location:register.php");
	exit();
endif;

$googlecode = $_SESSION['secret'];
$sql = db_query("select * from google_auth where googlecode = '".$googlecode."'");
$row = mysqli_fetch_array($sql);

$firstname 	= $row['fname'];
$lastname 	= $row['lname'];
$email 		= $row['email'];

?>

<!doctype html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Login/ Registration Form</title>
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/layout.css">
        <link rel="stylesheet" href="assets/css/form-design.css">
		<link rel="stylesheet" href="assets/css/font-awesome.min.css">  
</head>
    <body class="a2z-wrapper">

      
        <section class="a2z-area">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="form-area register-from">
                            <div class="form-content">
                                <h2>Welcome <?php print $firstname; ?></h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi tempora exercitationem error, consectetur iusto nemo sapiente illo veritatis doloribus quidem!</p>
                            </div>
                            <div class="form-input">
                                <h2>Welcome <?php print $firstname; ?></h2>
                                    <div class="row">
										<div class="form-group">
											<label>First name: </label> <span style="color:#2d87d7"><?php print $firstname; ?></span>
										</div>
                                    </div>
									
									<div class="row">
										<div class="form-group">
											<label>last name: </label> <span style="color:#2d87d7"><?php print $lastname; ?></span>
										</div>
                                    </div>
									
									<div class="row">
										<div class="form-group">
											<label>Email Address: </label> <span style="color:#2d87d7"><?php print $email; ?></span>
										</div>
									</div>
									
									<div class="a2z-button">
                                        <a href="logout.php" class="a2z-btn" style="padding: 10px 30px;">Logout</a>
                                    </div>
									
									
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <script src="assets/js/jquery-1.12.4.min.js"></script>
        <script src="assets/css/bootstrap/js/bootstrap.min.js"></script>
    </body>
</html>