<?php 

include 'config.php';

session_start();

error_reporting(0);

if (isset($_SESSION['username'])) {
    header("Location: welcome.php");
}

if (isset($_POST['submit'])) {
	$email = $_POST['email'];
	$password = md5($_POST['password']);

	$sql = "SELECT * FROM utenti WHERE email='$email' AND password='$password'";
	$result = mysqli_query($conn, $sql);
	if ($result->num_rows > 0) {
		$row = mysqli_fetch_assoc($result);
		$_SESSION['username'] = $row['username'];
		header("Location: welcome.php");
	} else {
		echo "<script>alert('Woops! Email or Password is Wrong.')</script>";
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
	<title>Login Form</title>
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
                    <li><a href="Register.php">Register</a></li>
                </ul>
            </nav>
        </div>    
    </header>

	<div class="container">
		<form action="" method="POST" class="login-email">
			<p class="login-text" style="font-weight: 800;">Login</p>
			<div class="input-group">
				<input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
			</div>
			<div class="input-group">
				<input type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required>
			</div>
			<div class="input-group">
				<button name="submit" class="btn">Login</button>
			</div>
			<p class="login-register-text">Non hai un account? <a href="Register.php">Registrati qui</a>.</p>
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