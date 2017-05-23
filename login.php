

<?php

session_start();


require_once("include/db_connect.php");
$db_link = db_connect("mainproject");


if (isset($_REQUEST['email2']) && isset($_REQUEST['password']))
   {
      $reg_email='/.+@[^@]+\.[^@]{2,}$/';

      $email2 = preg_match( $reg_email, $_REQUEST['email2']) ? $_REQUEST['email2'] : "";
      $password = ($_REQUEST['password']) ? $_REQUEST['password'] : "";

  		$query = "SELECT * FROM member WHERE email = '$email2' AND password = '$password'";

  		$result = mysql_query($query);
  		$numrows = mysql_num_rows($result);

		if($numrows>0)
  		{

  		$_SESSION['valid_user'] = $email2;
		
		
/*		
        $_SESSION['authenticated'] = true;

        mysql_free_result($result);
		mysql_close();
*/
         display_member_page($email2);

         }
         else
         {
         display_login_page("Invalid login");
         }
   }
   else
   {
      display_login_page("Please login");
   }
?>


<?php

function display_login_page($message)
{
 	$email2=isset($_REQUEST['email2']) ? $_REQUEST['email2']:'';
	$password=isset($_REQUEST['password']) ? $_REQUEST['password']:'';

?>




<!DOCUMENT html>
<html lang = "en">
	<head>
		<meta charset = "utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title> Login Page </title>
		<script src = "js/jquery.js"> </script>
		<style>
			@import "css/jquery-bootstrap.css";
			@import "css/bootstrap.min.css";
			@import "css/navigation.css";
			@import "css/image_slider.css";
			@import "css/main.css";
			@import "css/footer.css";
			@import "css/timetable.css";
			@import "css/login.css";
		</style>
		</head>
		<body>

<?php
	require_once('include/current_page.php');
	//set the current page
	$login_current = 'class = "active"';
	require_once("include/navigation_part.php");
 ?>




      <div class="row" id="loginPanel">

        <div class="col-md-8 col-md-offset-2 ">

<?php
	if($message)
	{
		echo"<div class='row'><div class='col-md-12 text-center'><div class='alert alert-danger' role='alert'><p class='error'>$message</p></div></div></div>";
	}

	
?>

				<div class="jumbotron">

						<form role="form" method="POST">

						   <div class="row">
								  <div class="form-group col-md-4 col-md-offset-4">
									<label class="darkFont" for="email2">Email</label>
									<input type="text" name="email2" class="form-control" id="email2" placeholder="email"  size="30" value="<?php echo $email2 ?>">
								  </div>
								  <div class="form-group col-md-4 col-md-offset-4">
									<label class="darkFont" for="password">Password</label>
									<input type="password" name="password" class="form-control" id="password" placeholder="Password" size="20" value="<?php echo $password ?>">
								  </div>
									 <div class="form-group col-md-4 col-md-offset-4">
										<button type="login" name="login" class="btn btn-primary">Login</button>
									</div>
						  </div>
						</form>

				</div>
        </div>
</div>


 		<script src = "js/jquery.js"> </script>
		<script src = "js/bootstrap.min.js"> </script>


<?php

	
	require_once("include/footer_part.php");

?>

    </body>
</html>

<?php

}

function display_member_page($email2){

?>



<!DOCUMENT html>
<html lang = "en">
	<head>
		<meta charset = "utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title> Member Page </title>
		<script src = "js/jquery.js"> </script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
			<style>
				@import "css/jquery-bootstrap.css";
				@import "css/bootstrap.min.css";
				@import "css/navigation.css";
				@import "css/image_slider.css";
				@import "css/main.css";
				@import "css/footer.css";
				@import "css/login.css";
			</style>
		</head>
		<body>
	<?php

			require_once('include/current_page.php');
			//set the current page
    		$login_current = 'class = "active"';
			require_once("include/navigation_part.php");
	?>



		<div class="row" id="loginAlert">
			<div class='col-md-12 text-center'>
					<div class="alert alert-success" role="alert"><a href="#" class="alert-link">
		<?php
			$name = '';
			$surname = '';
			$email2 = ($_REQUEST['email2']) ? $_REQUEST['email2'] : "";
			
			$query = "SELECT * FROM member WHERE email = '$email2'";
			
			echo " Welcome ". $name . " " . $surname;
			echo $_SESSION['valid_user'];
		?>
					</a>

					</div>

			</div>

					<div class="row" id="textColor">
						  <div class="col-md-12">
										<div class="col-md-4 col-md-offset-4">
											<div class="embed-responsive embed-responsive-16by9">
												<iframe class="embed-responsive-item" src="http://www.youtube.com/embed/Bi1IRzJIoAo"></iframe>
											</div>
										</div>
						  </div>
										<div class="col-md-12" id = "fix_butttons_padding">
											<div class = "buttons">

											<!-------------------- Beginner Button ----------------------->
											<!------------------------------------------------------------>
												<div class = "letter col-md-4">
													<form action="forms.php" method="get">
														<button  class = "button" id = "button1">Forms
														</button>
													</form>
												</div>

											<!------------------ Intermediate Button --------------------->
											<!------------------------------------------------------------>
												<div class = "letter col-md-4" id = "fix_centre_indent1">
													<form action="intermediate.php" method="get">
														<button class = "button">
															Intermediate
														</button>
													</form>
												</div>

											<!-------------------- Advanced Button ------------------------>
											<!------------------------------------------------------------->
												<div class = "letter col-md-4" id = "fix_indent_left1">
													<form action="advanced.php" method="get">
														<button class = "button" id = "button3">
															Fitbit Tracker
														</button>
													</form>
												</div>

											</div>
										</div>


									<div class="col-md-12">
											<div class = "buttons">



											<!-------------------- Beginner Button ----------------------->
											<!------------------------------------------------------------>

												<div class = "letter col-md-4">
														<form action="payment.php" method="get">
														<input type = "button" value = "Pay Fees" class = "button" id = "button2">
													</form>
												</div>

											<!------------------ Intermediate Button --------------------->
											<!------------------------------------------------------------>
												<div class = "letter col-md-4">
													<form action="displayProgress.php" method="get">
														<input type = "button" value = "Progress Check" class = "button">
													</form>
												</div>

											<!-------------------- Advanced Button ------------------------>
											<!------------------------------------------------------------->
												<div class = "letter col-md-4">
													<form action="index.php" method="get">
														<input type = "button" value = "Log Out" class = "button" id = "button4">
													</form>
												</div>

											</div>
										</div>


					</div>
        </div>

		<script src = "js/jquery.js"> </script>
		<script src = "js/bootstrap.min.js"> </script>


<?php

	require_once("include/footer_part.php");

?>

    </body>
</html>

	<?php
	}
	?>




