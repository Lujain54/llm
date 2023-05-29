<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="style.css"> 
    <title>Locate Me</title>
</head>
<body> 
    <header>
        <a href="#" class="logo">Locate Me</a> 
        <nav class="navigation"> 
            <a href="index1.php">Home</a> 
            <a href="About.php">About</a>
            <a href="products.php">Products</a> 
            <a href="contact.php">Contact Us</a>  
            <?php
         session_start();
         if (isset($_SESSION["users"])) {
            echo' <a href="logout.php"> logout </a>';
         }
         else{
            echo' <a href="login.php"> login </a>';
         }
        
            
    ?>
            <a href="cart.php"><i class="fa-solid fa-cart-shopping"></i>
           <span class="quantity">0</span>
     
          
        </a> 
        </nav>
       
    </header>
    <section class="main"> 
        <div>
            <h2> Locate Me <br><span>Lost & Found QR code sticker</span>
            </h2> 
            <h3> We make it easy for you to get your things</h3> 
            <a href="products.html" class="main-btn">browse our product</a> 
            <div class="social-icons" >
                <a href="contact.html"><i class="fa-solid fa-phone"></i></a> 
                <a href="contact.html"><i class="fa-solid fa-envelope"></i></a>   
            </div>
         <?php
         if (!isset($_SESSION["users"])) {
            echo'<div class="form">
            <p>Already Registered <a href="login.php">Login Here</a></p>
            <button class="btnn"><a href="login.php">Login</a></button>
        <p class="link">Do not have an account<br>
            <a href="registration.php">Sign up </a> here</a></p>    
            <button class="btnn"><a href="registration.php">singup</a></button>
    </div>
            ';
         }
        
            
    ?>
</div>
    </section> 

    <section class="cards" id="Products"> 
        <h2 class="title">Products</h2> 
        <div class="content">  
<?php 
require_once "database.php";
$query = "SELECT ID, image, title, price, dis, fav FROM products";
    $result = mysqli_query($conn, $query);
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<div class="card1">';
      echo '<div class="image">'  ;
        echo'<img src= '.$row["image"].'>';    
       echo '</div>'; 
       echo '<div class="info"> '; 
        echo'<h3> '.$row["title"].'</h3> ';    
        echo '<span>'.$row["price"].' SAR </span>';
         echo '<p> '.$row["dis"].'</p>';    
      echo'</div>';  
      echo '<div class="bay">';  
       echo'<button onclick=';
       $sql = "UPDATE products SET fav='1' WHERE ID=".$row['ID']."";
       $r = mysqli_query($conn, $sql);  
       echo'> bay now </button>';  
       echo'</div>';  
       echo'</div>';  

      }
?>    
        </div>
    </section>
  

    <section class="cards contact" id="contact">
        <h2 class="title">CONTACT US</h2>
        <div class="content">
            <div class="card">
                <div class="icon">
                    <i class="fas fa-phone"></i>
                </div>
                <div class="info">
                    <h3>Phone</h3>
                    <p>+966-985-245-1730</p>
                </div>
            </div>
            <div class="card">
                <div class="icon">
                    <i class="fas fa-envelope"></i>
                </div>
                <div class="info">
                    <h3>Email</h3>
                    <p>Locateme.sa@gmail.com</p>
                </div>
            </div>
        </div>
      
    </section> 
  
    <footer class="footer">
        <p class="footer-title">Locate Me,  <span>Here to help you</span></p>
        <div class="social-icons">
            <a href="#"><i class="fab fa-linkedin"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-youtube"></i></a>
        </div>
    </footer>

    <script>
    // Function to display the alert dialog
    function showAlert() {
      var message = "Do you need to buy now?";
      var result = window.confirm(message);

      if (result) {
        // OK button is clicked
        window.location.href = "cart.php";
      }
    }

function executePHP() {
            <?php 
               
                ?>
        }
    </script>
</body>
</html>



