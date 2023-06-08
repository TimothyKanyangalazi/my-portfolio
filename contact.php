<!DOCTYPE html>
<html lang="en">
<head>
    <title>Contact </title>
    <meta charset="utf-8" >
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Web designer"/>
    <meta name="keywords " content="Web designer, progremmer, backend developer, appdeveloper"/>
    <meta name="author" content="Timothy kanyangalazi"/>
    <script src="myScript.js "></script>
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
    
    
    $query = "SELECT ID, FirstName, LastName, Email, Phone FROM `contactdetails`;";

    $result = mysqli_query($conn, $query);
        echo "<strong>Contact Details</strong><br>";
    while($row = mysqli_fetch_array($result)){
        echo  $row["ID"].". ". $row["FirstName"]."  ". $row["LastName"].","." Email: ".$row["Email"].", ".$row["Phone"]."<br>";
    }
        echo "<br>";
    

$conn->close();
?>
        <form class="text">
            <label for="name">First Name:</label><br>
            <input type="text" id="name" placeholder="Enter your First name here"/>
            <br/>
            <label>Middle name:</label><br>
            <input type="text" id="name" placeholder="Middle name is optional"></input>
            <br/>
            <label>Last Name:</label><br>
            <input type="text" id="name" placeholder="Enter your Last Name here"/>
            <br/>
            <label>Email:</label><br>

            <input type="email" id="name" placeholder="Enter your Email here"/>
            <br/>
            <label>Phone Number:</label><br>
            <input type="number" id="name" placeholder="write your Phone number here"/>
            <br/>
            <label>Comment:</label>
            <br/>
            <textarea rows="10" cols="40" placeholder="Write your comment here"></textarea> 
            <br/>
            <input type="radio" name="gender" value="Male" id="male"/>
            <label for="male"> Male:</label>
            <br/>
            <input type="radio" name="gender" value="Female" id="female"/>
            <label for="male"> Female:</label>
            <br/>
            <input type="submit">

        </form>
    </main></body>
    
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
            .
        </div>
    </footer>
    </div>
   
</body>
<script src="myScript.js "></script>
</html>
