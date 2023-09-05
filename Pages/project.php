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
    <link rel="stylesheet" href="../Css/project.css">
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
            <li><a href="../index.html">Home</a></li>
            <li><a href="about.html">About</a></li>
           <li class="active"><a href="project.php">Projects</a></li>
            <li><a href="contact.php">Contact</a></li>
        </ul>
        
    </nav>
    

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
                echo '<h3>' . $projectTitle . '</h3>'; // Projecttitel eerst
                echo '<img src="' . $projectImage . '" alt="' . $projectTitle . '">'; // Daarna de foto
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
    <script src="../Js/index.js"></script>
   
</body>
</html>
<?php
// Sluit de databaseverbinding
$conn->close();
?>