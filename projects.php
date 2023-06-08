 <!DOCTYPE html>
<html lang="en">
<head>
    <title>projects </title>
    <meta charset="utf-8" >
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Web designer"/>
    <meta name="keywords " content="Web designer, progremmer, backend developer, appdeveloper"/>
    <meta name="author" content="Timothy kanyangalazi"/>

    <link rel="stylesheet" type="text/css" href="style.css" />
    
   
</head>
<body id="grad1">
    
    <header>
        <nav>
            
            <h2 class="header" ><a href="index.php"> Timothy</a></h2>
            
            <hr/>
            <div class="topnav" >
                <a href="index.php"> Home </a> &nbsp;&nbsp;
                <a href="skills.php"> Skills </a> &nbsp;&nbsp;
                <a href="#"> About </a> &nbsp;&nbsp;
                <a href="projects.php"> Projects </a> &nbsp;&nbsp;
                <a href="contact.php"> Contact </a>
                
            </div>
        </nav>
    </header>
    <hr/>
    
    <main class="text">
    <?php
    $server_name = "localhost";
    $user_name = "root";
    $password = "";
    $dbName = "portinfo";
 
    $conn = mysqli_connect($server_name, $user_name, $password,$dbName);


    if (!$conn) {
        echo 
        die("Failed ". mysqli_connect_error());
    }
    
    
    $query = "SELECT ProjectID,ProjectName,Progress FROM `projects`;";

    $result = mysqli_query($conn, $query);
        echo "<strong>PROJECTS</strong><br>";
    while($row = mysqli_fetch_array($result)){
        echo  $row["ProjectID"].". ". $row["ProjectName"]." : ". $row["Progress"]."<br>";
    }
        echo "<br>";
   

$conn->close();
?>
        <div class="slideshow-container">

            <div class="mySlides fade">
              <div class="numbertext">1 / 3</div>
              <img src="project1.jpg" style="width:100%">
              <div class="text">Blue Sky</div>
            </div>
            
            <div class="mySlides fade">
              <div class="numbertext">2 / 3</div>
              <img src="project2.jpg" >
              <div class="text">Working space</div>
            </div>
            
            <div class="mySlides fade">
              <div class="numbertext">3 / 3</div>
              <img src="project3.jpg" style="width:100%">
              <div class="text">plendid Bar artwork</div>
            </div>
            
            </div>
            <br>
            
            <div style="text-align:center">
              <span class="dot"></span> 
              <span class="dot"></span> 
              <span class="dot"></span> 
            </div>
            
        <ul>
            <li>Created Facebook</li>
            <li>Created Twiter</li>
            <li>Created Whatsapp</li>
        </ul>
    </main>
</body>
    
    <div>
    <footer>
        <div class="footer-body">
            <div>Timothy</div>
            <div>
                <p>Thank you for visiting my web design portfolio. i hope you have enjoyed exploring my work and witnessing 
                    the passion i have for creating excwptional online experiences.
                    if you're ready to take yor digital presence to the next level, i would be thrilled to collaborate with you.
                     Whether it's designing a new website, revamping an existing one, or providing ongoing maintainance and support,
                     i am committed to delivering top-notch solutions tailored to your unique needs. Let's connect and discuss how we
                     can turn your online goals into a reality.
                </p>
                <ul>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Contact</a></li>
                    <li><a href="#">Terms & Conditions</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                </ul>

            </div>
        </div>
        <div>
        
        </div>
    </footer>
    </div>
   <script src="myScript.js "></script>
</body>

</html>
