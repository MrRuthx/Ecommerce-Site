<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Flop Kart</title>
	<link rel="stylesheet" type="text/css" href="styles1.css">
</head>
<body>
	<!-- <div class="navbar navbar-default navbar-fixed-top" id="topnav">
		<div class="container-fluid">
			<div class="navbar-header">
				<a href="index.php" class="navbar-brand">Flop Kart</a>
			</div>

			
		</div>
	</div> -->

    <div>
        <div class="col-md-2"></div>
        <div class="col-md-8" id="err_msg"></div>
        <div class="col-md-2"></div>
	</div>
    
	<p><br><br></p>
	<p><br><br></p>
	<div class="container">
		
        <div class="title">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<div class="panel panel-primary">
					<div class="panel-heading">Signup</div>
					<div class="panel-body">
				<form method="post" action="">
					<div class="row">
						<div class="input-box">
							<!-- <label for="f_name">First Name</label> -->
							<input type="text" id="f_name" name="f_name" placeholder="First Name" class="form-control">
                            <div class="underline"></div>
						</div>
						<div class="input-box">
							<!-- <label for="f_name">Last Name</label> -->
							<input type="text" id="l_name" name="l_name" placeholder="Last Name"  class="form-control">
                            <div class="underline"></div>
						</div>
					</div>

					<div class="row">
						<div class="input-box">
							<!-- <label for="email">Email</label> -->
							<input type="text" id="email" name="email" placeholder="Email"  class="form-control">
                            <div class="underline"></div>
						</div>
						<div class="input-box">
							<!-- <label for="password">Password</label> -->
							<input type="password" id="password" name="password" placeholder="Password"  class="form-control">
                            <div class="underline"></div>
                        </div>
					</div>

					<div class="row">
						<div class="input-box">
							<!-- <label for="mobile">Mobile</label> -->
							<input type="text" id="mobile" name="mobile" placeholder="Mobile"  class="form-control">
                            <div class="underline"></div>
						</div>
						<div class="col-md-6"></div>
					</div>

					<div class="row">
						<div class="input-box">
							<!-- <label for="address1">Address #1</label> -->
							<input type="textarea" id="address1" name="address1" placeholder="Address #1"  class="form-control">
                            <div class="underline"></div>
                        </div>
					</div>

					<div class="row">
						<div class="input-box">
							<!-- <label for="address2">Address #2</label> -->
							<input type="textarea" id="address2" name="address2" placeholder="Address #2"  class="form-control">
                            <div class="underline"></div>
                        </div>
					</div>

					<br><br>
					<div class="input-box">
						<input type="button" class="btn" value="Sign up" name="signup" id="signup_btn">
					</div>

					</div>
					</div>
					</form>
					<div class="panel-footer"></div>
				</div>
			</div>
			<div class="col-md-2"></div>
		</div>
	</div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="main.js"></script>
</body>
</html>