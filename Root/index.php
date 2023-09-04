<?php
$hostname = "localhost:3306";
$username = "dbz88885";
$password = "bokarmy6806";
$database = "88885_database";

// Maak een databaseverbinding
$conn = new mysqli($hostname, $username, $password, $database);

// Controleer de verbinding
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Haal projectinformatie op uit de database
$sql = "SELECT * FROM portfolio";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Portfolio Osman Karapinar</title>
    <link rel="icon" href="../Images/logo.png">
    <link rel="stylesheet" href="../Css/index.css">
    <style>
        
        @import url('https://fonts.googleapis.com/css2?family=Anton&display=swap');
      </style>
         
         <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">

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
            <li><a href="#home">Home</a></li>
            <li><a href="#header-title">About</a></li>
            <li><a href="#section-title">Projects</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
        
    </nav>
    
    <div id="particles-js"></div>

    <header id="home">
        <div class="header-content">
            <div class="header-text">
                <h1>Hi There,</h1>
                <p>I'm Osman Karapinar. I am a student at the Graphic Lyceum Rotterdam. I'm doing the  <span class="highlight">Software Development </span> Course !</p>
                <br>
                <a href="#header-title" class="btn">About Me ⬇️</a>
            </div>
            <div class="header-circle">
                <img src="../Images/osman.png" alt="Your Photo">
            </div>
        </div>
    </header>
       <br>
      
       <div class="container grid-2">
        <div class="column-1">
            <h1 id="header-title">About me</h1>
            <br>
            <p class="text">
                I am an 17 year old developer from the Netherlands. I've been developing for about 1 to 2
                years. I go to school in Rotterdam and follow the software
                development course at the graphic lyceum Rotterdam.<br><br>In my spare time, I enjoy playing football with my friends. I consider myself a dedicated team player.  I'm a gaming enthusiast who absolutely loves diving into the intricate tactical world of Rainbow Six Siege. Breaching, defending, strategizing!

            </p>
            <br>
            <p><a href="OsmanKarapinar.pdf" download>Download here my CV </a></p>
    
            <!-- Hier voegen we de vaardigheden toe -->
            <div class="skills">
                <h2>Skills</h2>
                <ul>
                    <li>HTML5</li>
                    <li>CSS3</li>
                    <li>JavaScript</li>
                    <li>PHP</li>
                    <li>C#</li>
                </ul>
            </div>
        </div>
        <div class="column-2">
            <img class="img-person1" src="../Images/hobby.png" alt="Your Photo">
        </div>
    </div>
  
           
           
            <section class="projects-section">
                <h2 id="section-title">My Projects</h2>
                <div class="projects-container">
                    <?php
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            $projectTitle = $row["title"];
                            $projectImage = $row["image_path"];
                            $projectDescription = $row["description"];
                            $projectLink = $row["link"];
        
                            echo '<div class="project">';
                            echo '<img src="' . $projectImage . '" alt="' . $projectTitle . '">';
                            echo '<h3>' . $projectTitle . '</h3>';
                            echo '<p>' . $projectDescription . '</p>';
                            echo '<a href="' . $projectLink . '" target="_blank">Visit Project</a>';
                            echo '</div>';
                        }
                    } else {
                        echo "No projects found in the database.";
                    }
                    ?>
                </div>
            </section>
            

            <!-- <?php
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
                if (mail($to, $subject, $body)) {
                    // Toon een succesbericht
                    echo "<p>Bedankt! Je formulier is succesvol ingediend.</p>";
        
                    // Stuur de gebruiker naar de homepage
        header("Location: index.php"); // Vervang 'index.php' door de URL van je homepage
        exit; // Stop met de verdere uitvoering van de script
    } else {
        echo "<p>Er is een fout opgetreden bij het verzenden van het formulier.</p>";
    }
}
            ?>-->
            
            <div class="cont">
                <div id="contact">
                    <h1 class="txt1">Contact Me !</h1>
                    <p class="subtext">Let's create something together 🤙</p>
                    <p class="email">📧 My Email: osmankarapinar68@gmail.com</p>
                    <br>
                   
                </div>
                <div class="form-container">
                    <div class="form">
                        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                            <label for="name">Name:</label>
                            <input type="text" name="name" id="name" required>
                    
                            <label for="email">Email:</label>
                            <input type="email" name="email" id="email" required>
                    
                            <div class="phone-company">
                                <div>
                                    <label for="phone">(Optional) Phone Number:</label>
                                    <input type="tel" name="phone" id="phone">
                                </div>
                                <div>
                                    <label for="company">(Optional) Company Name:</label>
                                    <input type="text" name="company" id="company">
                                </div>
                            </div>
                    
                            <label for="message">Message:</label>
                            <textarea name="message" id="message" rows="auto" required></textarea>
                    
                            <input class="active" type="submit" value="Submit">
                        </form>
                    </div>
                </div>
            </div>
            <br>
            <br>
            <br>
            <br>
            <br>
            
            

   

    <script src="../Js/index.js"></script>
    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
</body>
</html>
<?php
// Sluit de databaseverbinding
$conn->close();
?>