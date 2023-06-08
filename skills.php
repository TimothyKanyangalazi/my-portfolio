<!DOCTYPE html>
<html lang="en">
<head>
    <title>Skills</title>
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
    
    
    
    $query = "SELECT SkillID,SkillNAme,SkillRating FROM `skills`;";

    $result = mysqli_query($conn, $query);
        echo "<strong>SKILLS</strong><br>";
    while($row = mysqli_fetch_array($result)){
        echo  $row["SkillID"].". ". $row["SkillNAme"]." : ". $row["SkillRating"]."<br>";
    }

$conn->close();
?>
        <h5>HTML <span id="html"></span>% </h5>
    <div class="container">
        <div class="loader"></div>
    </div>
    <h5>CSS <span id="css"></span>%</h5>
    <div class="container">
        <div class="loader" style="background-color: orange;"></div>
    </div>
    <h5>JAVASCRIPT <span id="js"></span>%</h5>
    <div class="container">
        <div class="loader"  style="background-color: red;"></div>
    </div>
    <h5>PHP <span id="php"></span>%</h5>
    <div class="container">
        <div class="loader"  style="background-color: rgb(34, 124, 160);"></div>
    </div>
        
    </main>
    
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
    
    <script>
        var html = document.getElementById("html");
        var css = document.getElementById("css");
        var js = document.getElementById("js");
        var php = document.getElementById("php");

        var loader1 = document.getElementsByClassName('loader')[0];
        var loader2 = document.getElementsByClassName('loader')[1];
        var loader3 = document.getElementsByClassName('loader')[2];
        var loader4 = document.getElementsByClassName('loader')[3];

        var html_value = 88;
        var css_value = 54;
        var js_value = 34;
        var php_value = 24;

        function myLoader(place, value,p){
            var incrementor = 0;
            var timeInterval = setInterval(function(){
              place.style.width = incrementor++ +'%';
              p.innerHTML = incrementor;
              if(incrementor == value){
                clearInterval(timeInterval);
              }
            },value);
        }

        myLoader(loader1,html_value,html);
        myLoader(loader2,css_value,css);
        myLoader(loader3,js_value,js);
        myLoader(loader4,php_value,php);



    </script>
   <script src="myScript.js "></script>
</body>
    
</html>
