


<?php 

 
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: Login.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="../css/gallery.css" type="text/css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <script src="../js/store.js"></script>
    <title>Welcome</title>
    
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
                    <li><a href="logout.php">Logout</a></li>
                </ul>
            </nav>
        </div>    
    </header>

   

    <?php echo "<h1>Benvenuto " . $_SESSION['username'] . "</h1>"; ?>
   
    <section class="container content-section">
            <h2 class="section-header">GALLERY</h2>
            <div class="shop-items">
                <div class="shop-item">
                    <span class="shop-item-title">Pelè e Facchetti</span>
                    <img class="shop-item-image" src="../img/quadri/quadro1.jpg">
                    <div class="shop-item-details">
                        <span class="shop-item-price">$25.99</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
                <div class="shop-item">
                    <span class="shop-item-title">Zidane</span>
                    <img class="shop-item-image" src="../img/quadri/quadro0.jpg">
                    <div class="shop-item-details">
                        <span class="shop-item-price">$17.99</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
                <div class="shop-item">
                    <span class="shop-item-title">Pelè Mondiali</span>
                    <img class="shop-item-image" src="../img/quadri/quadro2.jpg">
                    <div class="shop-item-details">
                        <span class="shop-item-price">$28.99</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
                <div class="shop-item">
                    <span class="shop-item-title">Maldini</span>
                    <img class="shop-item-image" src="../img/quadri/quadro3.jpg">
                    <div class="shop-item-details">
                        <span class="shop-item-price">$10.99</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
                <div class="shop-item">
                    <span class="shop-item-title">T-Shirt</span>
                    <img class="shop-item-image" src="../img/quadri/quadro4.jpg">
                    <div class="shop-item-details">
                        <span class="shop-item-price">$19.99</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
                <div class="shop-item">
                    <span class="shop-item-title">Platini</span>
                    <img class="shop-item-image" src="../img/quadri/quadro5.jpg">
                    <div class="shop-item-details">
                        <span class="shop-item-price">$31.99</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
                <div class="shop-item">
                    <span class="shop-item-title">Messi</span>
                    <img class="shop-item-image" src="../img/quadri/quadro6.jpg">
                    <div class="shop-item-details">
                        <span class="shop-item-price">$19.99</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
                <div class="shop-item">
                    <span class="shop-item-title">Platini</span>
                    <img class="shop-item-image" src="../img/quadri/quadro7.jpg">
                    <div class="shop-item-details">
                        <span class="shop-item-price">$22.99</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
                <div class="shop-item">
                    <span class="shop-item-title">Maradona</span>
                    <img class="shop-item-image" src="../img/quadri/quadro8.jpg">
                    <div class="shop-item-details">
                        <span class="shop-item-price">$26.99</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
                <div class="shop-item">
                    <span class="shop-item-title">Juventus 1937</span>
                    <img class="shop-item-image" src="../img/quadri/quadro9.jpg">
                    <div class="shop-item-details">
                        <span class="shop-item-price">$7.99</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
                <div class="shop-item">
                    <span class="shop-item-title">Johan Cruijff</span>
                    <img class="shop-item-image" src="../img/quadri/quadro10.jpg">
                    <div class="shop-item-details">
                        <span class="shop-item-price">$35.99</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
                <div class="shop-item">
                    <span class="shop-item-title">George Best</span>
                    <img class="shop-item-image" src="../img/quadri/quadro11.jpg">
                    <div class="shop-item-details">
                        <span class="shop-item-price">$17.99</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
                <div class="shop-item">
                    <span class="shop-item-title">Fratelli Mazzola</span>
                    <img class="shop-item-image" src="../img/quadri/quadro12.jpg">
                    <div class="shop-item-details">
                        <span class="shop-item-price">$21.99</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
                <div class="shop-item">
                    <span class="shop-item-title">Gianni Rivera</span>
                    <img class="shop-item-image" src="../img/quadri/quadro13.jpg">
                    <div class="shop-item-details">
                        <span class="shop-item-price">$16.99</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
                <div class="shop-item">
                    <span class="shop-item-title">Gerd Muller</span>
                    <img class="shop-item-image" src="../img/quadri/quadro14.jpg">
                    <div class="shop-item-details">
                        <span class="shop-item-price">$24.99</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
            </div>
        </section>
        <section class="container content-section">
            <h2 class="section-header">CART</h2>
            <div class="cart-row">
                <span class="cart-item cart-header cart-column">ITEM</span>
                <span class="cart-price cart-header cart-column">PRICE</span>
                <span class="cart-quantity cart-header cart-column">QUANTITY</span>
            </div>
            <div class="cart-items">
            </div>
            <div class="cart-total">
                <strong class="cart-total-title">Total</strong>
                <span class="cart-total-price">$0</span>
            </div>
            <button class="btn btn-primary btn-purchase" type="button">PURCHASE</button>
        </section>

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