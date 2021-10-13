<?php 

include 'config.php';

error_reporting(0);

session_start();

if (isset($_SESSION['username'])) {
    header("Location: index.php");
}

if (isset($_POST['submit'])) {
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = md5($_POST['password']);
	$cpassword = md5($_POST['cpassword']);

	if ($password == $cpassword) {
		$sql = "SELECT * FROM utenti WHERE email='$email'";
		$result = mysqli_query($conn, $sql);
		if (!$result->num_rows > 0) {
			$sql = "INSERT INTO utenti (username, email, password)
					VALUES ('$username', '$email', '$password')";
			$result = mysqli_query($conn, $sql);
			if ($result) {
				echo "<script>alert('Wow! User Registration Completed.')</script>";
				$username = "";
				$email = "";
				$_POST['password'] = "";
				$_POST['cpassword'] = "";
			} else {
				echo "<script>alert('Woops! Something Wrong Went.')</script>";
			}
		} else {
			echo "<script>alert('Woops! Email Already Exists.')</script>";
		}
		
	} else {
		echo "<script>alert('Password Not Matched.')</script>";
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="../css/Login&Register.css" type="text/css" rel="stylesheet">
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<title>Register Form</title>
</head>
<body>

<header>
        <div class="navbar">
            <img src="../img/logo.png" alt="logo" class="logo">
            
            <nav>
                <ul>
                    <li><a href="../html/memorygame.html">gioco</a></li>
                    <li><a href="#foot">Contact</a></li>
                    <li><a href="../Index.html">Home</a></li>
                    <li><a href="login.php">Login</a></li>
                </ul>
            </nav>
        </div>    
    </header>

	<div class="container">
		<form action="" method="POST" class="login-email">
            <p class="login-text" style=" font-weight: 800;">Register</p>
			<div class="input-group">
				<input type="text" placeholder="Username" name="username" value="<?php echo $username; ?>" required>
			</div>
			<div class="input-group">
				<input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
			</div>
			<div class="input-group">
				<input type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required>
            </div>
            <div class="input-group">
				<input type="password" placeholder="Confirm Password" name="cpassword" value="<?php echo $_POST['cpassword']; ?>" required>
			</div>
			<div class="input-group">
				<button name="submit" class="btn">Register</button>
			</div>
			<p class="login-register-text">Hai già un account? <a href="Login.php">Accedi qui</a>.</p>
		</form>
	</div>

	<footer>
	<a name="foot"></a>
        <div class="footer-content">
            <h5> Emozioni Calcistiche</h5>
             <img src="../img/logo.png" alt="logo2" class="logo2" width="30%">

            <ul class="socials">
                <li><a href="https://www.facebook.com/FranciMagliocca"><i class="fa fa-facebook"></i></a></li>
                <li><a href="https://twitter.com/MaglioccaFra"><i class="fa fa-twitter"></i></a></li>
                <li><a href="https://www.linkedin.com/in/francesco-magliocca-0b2063177/"><i class="fa fa-linkedin-square"></i></a></li>
                <li><a href="https://www.instagram.com/francesco_magliocca_/"><i class="fa fa-instagram"></i></a></li>
                <li><a href="mailto:franci.magliocca@gmail.com"><i class="fa fa-envelope"></i></a></li>
            </ul>
        </div>
        <div class="footer-bottom">
            <p>copyright &copy;2021 FrancescoMagliocca&LeonardoMuscolino. designed by <span>FrancescoMagliocca&LeonardoMuscolino</span></p>
        </div>
    </footer>

</body>
</html>