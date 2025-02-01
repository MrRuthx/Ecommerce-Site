<?php 

session_start();

	include("dbconnect.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
	
		$user_name = $_POST['email'];
		$password = md5($_POST['password']);

		if(!empty($user_name))
		{

	
			$query = "SELECT * FROM user_info WHERE email='$user_name'";
			$result = mysqli_query($conn, $query);

			if($result)
			{
                $user_data = mysqli_fetch_assoc($result);
                
                if($user_data['password'] === $password)
                {

                    $_SESSION['user_id'] = $user_data['user_id'];
                    $_SESSION['uname']=$user_data['first_name'];
                    header("Location: profile.php");
                    die;
                }
	
			}
			
			echo "wrong username or password!";
		}else
		{
			echo "wrong username or password!";
		}
	}

?>


<!DOCTYPE html>
  <head>
    <link rel="stylesheet" href="style.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body>
    <div class="container">
      <form method="post" action="">
        <div class="title">Login</div>
        <div class="input-box underline">
          <input type="email" placeholder="Email" name ="email" id="email" required>
          <div class="underline"></div>
        </div>
        <div class="input-box">
          <input type="password" placeholder="Password" name ="password" id="password" required>
          <div class="underline"></div>
        </div>
        <div class="input-box button">
            <input type="submit" id="login" value="Login" name="">
        </div>
      </form>
        <!-- <div class="option">or Connect With Social Media</div>
        <div class="twitter">
          <a href="#"><i class="fab fa-twitter"></i>Sign in With Twitter</a>
        </div>
        <div class="facebook">
          <a href="#"><i class="fab fa-facebook-f"></i>Sign in With Facebook</a>
        </div> -->
    </div>
  </body>
</html>
