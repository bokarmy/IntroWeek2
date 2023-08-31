

<!DOCTYPE html>
<html>
<head>
    <title>Portfolio Osman Karapinar</title>
    <link rel="stylesheet" href="../Css/contact.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Anton&display=swap');
      </style>
      <link rel="icon" href="../Images/logo.png">
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
         <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <nav>
        <div class="logo">
            <img src="../Images/logo.png" alt="Logo">
        </div>
        <div class="menu-toggle">
            <span></span>
            <span></span>
            <span></span>
        </div>
        <ul class="menu">
            <li><a href="../Root/index.html">Home</a></li>
            <li><a href="#projects">Projects</a></li>
            <li><a href="about.html">About</a></li>
            <li><a href="contact.php">Contact</a></li>
        </ul>
    </nav>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];
        $company = $_POST["company"];
        $message = $_POST["message"];
        
        $to = "osmankarapinar68@gmail.com"; // Vervang dit met je eigen e-mailadres
        $subject = "Nieuw formulier ingediend";
        $body = "Naam: $name\n";
        $body .= "E-mail: $email\n";
        $body .= "Telefoonnummer: $phone\n";
        $body .= "Bedrijfsnaam: $company\n";
        $body .= "Bericht:\n$message";
        
        // Stuur de e-mail
        mail($to, $subject, $body);
        
        // Toon een succesbericht
        echo "<p>Bedankt! Je formulier is succesvol ingediend.</p>";
    }
    ?>
    <div class="container">
        <div class="contact">
            <h1>Contact Me !</h1>
            <p class="subtext">Let's create something together 🤙
                <p><a href="OsmanKarapinar.pdf" download>Here my CV (PDF)</a></p>
            </p>
            <p class="email">📧 My Email: osmankarapinar68@gmail.com</p>
        </div>
        <div class="form-container">
            <div class="form">
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                    <label for="name">Name:</label><br>
                    <input type="text" name="name" id="name" required><br><br>
    
                    <label for="email">Email:</label><br>
                    <input type="email" name="email" id="email" required><br><br>
    
                    <label for="phone">(Optional) Phone Number:</label><br>
                    <input type="tel" name="phone" id="phone"><br><br> 
    
                    <label for="company">(Optional) Company Name:</label><br>
                    <input type="text" name="company" id="company"><br><br> 
    
                    <label for="message">Message:</label><br>
                    <textarea name="message" id="message" rows="auto" required></textarea><br>
    
                    <input class="active" type="submit" value="Submit">
                </form>
            </div>
        </div>
    </div>
    
    
    <script src="../Js/index.js"></script>
</body>
</html>