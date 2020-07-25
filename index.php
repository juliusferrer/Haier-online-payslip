<?php require_once('login.php')?>

<!-- haier -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Haier Online Payslip</title>

     <!-- Compiled and minified CSS -->
     <link rel="stylesheet" type="text/css" href="">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
</head>
<body>

<nav class="transparent">
    <div class="nav-wrapper">
        <div class="container">

            <a href="#" class="brand-logo">
            	<img src="images/LOGO2-01.png" alt="" class="responsive-img" style="height: 30px;" >
            </a>
            <!-- <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="sass.html">Sass</a></li>
                <li><a href="badges.html">Components</a></li>
                <li><a href="collapsible.html">JavaScript</a></li>
            </ul> -->
            </div>

        </div>
  </nav>

    <div class="row">
        <div class="container">

        		<h4 class="center">Haier Online Payslip</h1>

					<div class="row">
						<div class="col s12 m10 l6 offset-m2 offset-l3">
							<div class="card">

								<div class="card-action lighten-1 white-text">
									<<img src="images/header2-01.png" alt="" class="responsive-img" height="120">
								</div>

								<form action="login.php" method="post">

									<div class="card-content">
										
										<div class="form-field">
											<label for="employeeID">Employee ID</label>
											<input type="text" id="employeeID" name="employeeID">
										</div><br>

										<div class="form-field">
											<label for="password">Password</label>
											<input type="password" id="password" name="password">
										</div><br>

										<div class="form-field">
											<input type="checkbox" id="remem">
											<!-- <label for="remem">Rememeber me</label> -->
											
										</div>

										<?php 
											if(isset($_SESSION["auth-msg"])):
										?>

							<span class="red-text">
									<?php
									 echo $_SESSION["auth-msg"];
									 unset($_SESSION["auth-msg"]);
									 ?>
							    </span>

							<?php endif;?>

										<br>

										<div class="form-field">
											<button type="submit" name="login" class="btn blue darken-4 waves-effect waves-dark" style="width:100%;">Login</button>
										</div><br>
									</div>

							    </form>

							</div>
						</div>
					</div>
        </div>
    </div>

    
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>