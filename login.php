<<<<<<< HEAD
<<<<<<< HEAD:login.html
=======
=======
>>>>>>> eca84108a7be5261ffe4d85c1d575225e44490a2
<?php
session_start();
	// variable declaration
	$errors     = []; 
	
	// $_SESSION['success'] = "";

	// connect to database

    $db = mysqli_connect('localhost', 'root', '', 'deimos');

    
    // LOGIN USER
	if (isset($_POST['login_user'])) {
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$password = mysqli_real_escape_string($db, $_POST['password']);

		if (empty($username) && !empty($password)) {
            array_push($errors, "Username is required");
            $_SESSION['error'] = $errors;  
		}elseif (empty($password) && !empty($username) ) {
            array_push($errors, "Password is required");
            $_SESSION['error'] = $errors;
		}elseif (empty($password) && empty($username) ) {
            array_push($errors, "Please enter Username and Password to continue!");
            $_SESSION['error'] = $errors;
		}elseif (!empty($password) && !empty($username)){
			$password = md5($password);
			$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
			$results = mysqli_query($db, $query);
           
                if (mysqli_num_rows($results) == 1) {
                    $_SESSION['username'] = $username;
                    unset($_SESSION['error']);
                    header('location: dashboard.php');
                }else {
                    array_push($errors, "Wrong username/password combination");
                    $_SESSION['error'] = $errors;
                }
        }
        mysqli_close($db);
  }


  
?>
>>>>>>> 3c51fb45795557cfb21271df35aac742ba0ebca6:login.php
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="og:title" property="og:title" content="">
<<<<<<< HEAD:login.html
    <link href="index.html" rel="canonical">
    <title>Deimos Login | Calculate Your Net Worth</title>
    <link rel="stylesheet" href="css/login.css">
    <link rel="icon" type="image/x-icon" href="./img/Purple logo Group.png">
=======
    <link href="index.php" rel="canonical">
    <title>Deimos Login | Calculate Your Net Worth</title>
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/navbar.css">
>>>>>>> 3c51fb45795557cfb21271df35aac742ba0ebca6:login.php
    <!-- <link rel="stylesheet" href="bootstrap-4.3.1-dist/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container-fluid">
<<<<<<< HEAD:login.html
        <input type="checkbox" name="" id="toggle_signup_1">
=======
       
        <input type="checkbox" name="" id="toggle_signup_1">
        
>>>>>>> 3c51fb45795557cfb21271df35aac742ba0ebca6:login.php
        <div class="row my-auto">
            <input class="d-none" type="checkbox" name="" id="toggle_signin">
            <input class="d-none" type="checkbox" name="" id="toggle_signup">
            <div class="col-sm signup-wrapper pl-0 pr-0">
                <nav class="navbar">
<<<<<<< HEAD:login.html
                    <a class="navbar-brand hide-for-large" href="index.html"><img src="./img/networth logo.svg"></a>
                    <a class="navbar-brand hide-for-small" href="index.html"><img src="./img/Purple logo Group.png"></a>
                </nav>
                <section>
                    <p class="text-center guide">SIGN UP WITH...</p>
                    <div class="sign-in-with-social d-flex justify-content-between">
                        <a href="#" class="btn align-items-center d-flex h-1450 sign-in-fb sign-in-common">
                            <img src="./img/fb-blue.png" alt="sign in with facebook" class=""> <span>FACEBOOK</span>
                        </a>
                        <a href="#" class="btn align-items-center d-flex h-45 sign-in-google sign-in-common">
                            <img src="./img/google-icon.png" alt="sign in with gmail"> <span>GOOGLE</span>
                        </a>
                    </div>
                    <div class="page-divider d-flex align-items-center">
                        <hr>
                        <span>OR</span>
                        <hr>
                    </div>
                    <form action="https://hngi.github.io/deimos-net-worth-web-app/dashboard.html">
                        <h4>SIGN UP USING YOUR EMAIL ADDRESS</h4>
                        <div class="form-group general-input">
                            <input class="form-control" type="email" required="" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2, 3}$" placeholder="EMAIL ADDRESS">
                        </div>
                        <div class="form-group general-input">
                            <input class="form-control" type="text" required="" placeholder="USERNAME">
                        </div>
                        <div class="form-group general-input">
                            <input class="form-control" type="password" required="" name="" id="" placeholder="PASSWORD" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters">
                        </div>
                        <div class="form-group general-input">
                            <input class="form-control" type="password" required="" name="" id="" placeholder="CONFIRM PASSWORD" required>
                        </div>
                        <div class="text-center">
                            <input type="submit" value="SIGN UP" class="btn btn-default">
                        </div>
                    </form>
                    <div class="text-center hide-for-large">
                        <a href="#" class="returning-visitor">
=======
                    <a class="navbar-brand hide-for-large" href="index.php"><img src="./img/networth logo.svg"></a>
                    <a class="navbar-brand hide-for-small" href="index.php"><img src="./img/Purple logo Group.png" alt="Team Logo"></a>
                </nav>
                <section>
                   <div class="page-divider d-flex align-items-center">
                        
                    </div>
                    <form action="server.php" method="POST" id="signupW">
                        <h4>SIGN UP</h4>

                        

                        <div class="form-group ">
                            <input class="form-control" type="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2, 3}$" 
                            placeholder="Enter email address" required>
                        </div>
                        <div class="form-group ">
                            <input class="form-control" type="text" name="username" placeholder="Enter username" required>
                        </div>
                        
                        
                        <div class="form-group">
                        <label for="passsword" style="font-size:12px; padding:10px; margin-top:15px;" class="bagde badge-info">
                            <span class="">*</span> 
                            password must contain at least an Upper Case, a symbol e.g @,and a number
                        </label>
                            <input class="form-control" type="password" name="password" id="" placeholder="Enter password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" 
                            title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
                        </div>
                        <div class="form-group ">
                            <input class="form-control" type="password" name="confirm_password" id="" placeholder="Confirm password" required>
                        </div>
                        <div class="text-center">
                            <input type="submit" value="SIGN UP" name="reg_user" class="btn btn-default" >
                        </div>
                    </form>
                    <div class="text-center hide-for-large" style="margin-top:20px; margin-bottom:30px;">
                        <a href="#" class="returning-visitor" >
>>>>>>> 3c51fb45795557cfb21271df35aac742ba0ebca6:login.php
                            <label class="box" for="toggle_signin">Already have an account? <span>LOGIN</span></label>
                        </a>
                    </div>
                </section>
            </div>
            <div class="col-sm signin-wrapper pl-0 pr-0">
                <nav class="navbar">
<<<<<<< HEAD
                    <a class="navbar-brand" href="index.html"><img src="./img/Purple logo Group.png" alt="Team Logo"></a>
<<<<<<< HEAD:login.html
                </nav>
                <section>
                    <p class="text-center guide">SIGN IN WITH...</p>
                    <div class="sign-in-with-social d-flex justify-content-between">
                        <a href="#" target="blank" class="btn align-items-center d-flex h-1450 sign-in-fb sign-in-common">
                            <img src="./img/fb-blue.png" alt="sign in with facebook" class=""> <span>FACEBOOK</span>
                        </a>
                        <a href="#" target="blank" class="btn align-items-center d-flex h-45 sign-in-google sign-in-common">
                            <img src="./img/google-icon.png" alt="sign in with gmail"> <span>GOOGLE</span>
                        </a>
                    </div>
                    <div class="page-divider d-flex align-items-center">
                        <hr>
                        <span>OR</span>
                        <hr>
                    </div>
                    <form action="https://hngi.github.io/deimos-net-worth-web-app/dashboard.html">
                        <h4>SIGN IN WITH EMAIL</h4>
                        <div class="form-group general-input">
                            <input class="form-control" required="" type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2, 3}$" placeholder="EMAIL ADDRESS">
                        </div>
                        <div class="form-group general-input">
                            <input class="form-control" required="" type="password" name="" id="" placeholder="PASSWORD" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters">
                        </div>
                        <div class="text-center">
                            <input type="submit" value="SIGN IN" class="btn btn-default  signin-button">
                        </div>
                    </form>
                    <div class="text-center forgotten-pass">
                        <a href="#" class="forgotten-pass"><b>Forgot password</b></a>
                    </div>
=======
=======
                    <a class="navbar-brand" href="index.php"><img src="./img/Purple logo Group.png" alt="Team Logo"></a>
>>>>>>> eca84108a7be5261ffe4d85c1d575225e44490a2
                    
                </nav>
                <section>



                
                
                    <form action="login.php" method="POST">
                        <h4 style="margin-top:40px;">SIGN IN TO DEIMOS</h4>
                        
                        
                        <?php include 'error.php'; ?>

                        
                       

                        <?php include('success.php'); ?>
                        <?php unset($_SESSION['success']); ?>
                        
                        
                        <div class="form-group general-input">
                            <input class="form-control" style="padding:20px;" type="text" name="username" required placeholder="Enter username">
                        </div>
                        <div class="form-group general-input">
                            <input class="form-control" style="padding:20px;" type="password" name="password" required id="" placeholder="Enter password">
                        </div>
                        <div class="text-center">
                            <input type="submit" style="color:#fff !important; margin-bottom: 10px;" value="SIGN IN" name="login_user" class="btn btn-default">
                        </div>
                    </form>
                    
>>>>>>> 3c51fb45795557cfb21271df35aac742ba0ebca6:login.php
                    <div class="text-center hide-for-large">
                        <a href="#" class="returning-visitor">
                            <label class="box" for="toggle_signin">New to Deimos? <span>SIGN UP</span></label>
                        </a>
                    </div>
                </section>
            </div>
            <div class="info">
                <div class="a">
                    <a href="" class="text-center d-block">
                        <img src="./img/profile-pic.svg" alt="" class="profile-pic">
                    </a>
<<<<<<< HEAD:login.html
                    <h2 class="greetings text-center"> Welcome Back</h2>
                    <p class="text-center main-message">" Do you Know ? 'Your net worth to the world is usually determined by what remains after your bad habits have been subtracted from your good ones." Proceed to know your financial Strengths NOW</p>
=======
                    <h2 class="greetings text-center">Welcome Back</h2>
                    <p class="text-center main-message">
                        <div id="quoteDisplay">
                         <!--quotes will display here-->
                        </div>
                    </p>
>>>>>>> 3c51fb45795557cfb21271df35aac742ba0ebca6:login.php
                    <div class="text-center main-button">
                        <a href="" class="">
                            <label for="toggle_signup_1">SIGN UP</label>
                        </a>
                    </div>
                </div>
                <div class="b">
                    <a href="" class="text-center d-block">
                        <img src="./img/profile-pic.svg" alt="" class="profile-pic">
                    </a>
                    <h2 class="greetings text-center">Hey There</h2>
<<<<<<< HEAD:login.html
                    <p class="text-center main-message">Let’s hop on the path to discovering the true worth of your wealth. Please, enter your personal details.
=======
                    <p class="text-center main-message">
                        Let’s hop on the path to discovering the true worth of 
                        your wealth. Please, enter your personal details.
>>>>>>> 3c51fb45795557cfb21271df35aac742ba0ebca6:login.php
                    </p>
                    <div class="text-center main-button">
                        <a href="" class="">
                            <label for="toggle_signup_1">SIGN IN</label>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- <script src="bootstrap-4.3.1-dist/js/bootstrap.min.js"></script> -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<<<<<<< HEAD:login.html
=======
    <script src ="js/javascript.js"></script>
>>>>>>> 3c51fb45795557cfb21271df35aac742ba0ebca6:login.php
</body>

</html>