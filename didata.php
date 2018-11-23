<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="actordata.css">
    <link href="https://fonts.googleapis.com/css?family=K2D" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
</head>
<body>
    <header class="header">
        <div class="grid-3 showbizz">
        <div class="logo">
            <div class="heading">
            <a href="welcome.html">Showbizz</a>
            </div>
            <div class="sub">
                Movies . Series . Anime
            </div>
        </div>
        <div class="nmae">
        <a href="series.php">Director</a>
        </div>
    </div>
        <nav class="nav grid-3 center pad0">
            <div class="font center linker">
            <a href="movie.php">Movies</a>
            </div>
            <div class=" font center linker">
            <a href='animedisplay.php'>Anime</a>
            </div>
            <div class="font center linker">
            <a href="movie.php">Movies</a>
            </div>
        </nav>
    </header>
    <section class='datsec'>
    <?php
        $servername="localhost";
        $username="root";
        $password="";
        $dbname="movies";
        $conn=new mysqli($servername,$username,$password,$dbname);
        if($conn->connect_error)
        {
            die("connection failed".$conn->connect_error);

        }
        $name=$_POST["msearch"];
        $sql="SELECT * FROM actor where name='$name'";
        if($conn->query($sql))
        {
            $result=$conn->query($sql);
            if($result->num_rows>0)
            {
                while($row=$result->fetch_assoc())
                {
                    echo "<div class='grid-2-1 data'>";
                    echo "<div class='pad0'>";
                    echo "<div class='image center'><img src='".$row['Image']."' height=350 width=300></div>";
                    echo "<div id='mname' class='center'>".$row["name"]."</div>";
                    echo "<div class='details'><p>Age&nbsp&nbsp:&nbsp&nbsp".$row["age"]."</p>";
                    echo "<p> DOB&nbsp&nbsp:&nbsp&nbsp".$row["DOB"]."&nbsp</p>";
                    echo "<p>Awards&nbsp&nbsp:&nbsp&nbsp".$row["Awards"]."</p>";
                    echo "<p>Best Movies&nbsp&nbsp:&nbsp&nbsp".$row["Best Movies"]."</p>";
                    echo "<p>Net worthr&nbsp&nbsp:&nbsp&nbsp".$row["Net worth"]."</p>";
                    echo "<p>Marital status&nbsp&nbsp:&nbsp&nbsp".$row["Marital status"]."</p>";
                    echo "</div>";
                    echo "</div>";
                    echo "<div class='info'><p id='topic'><u>About</u>&nbsp:</p>".$row["About"]."</div>";
                    echo "</div>";
                }
            }
            else{
                echo "<div class='error center'><p>Oops!</p><p>No Data Found!</p>";
                echo "<p>Check if entered string is correct</p></div>";
            }
        }
        
    ?>
    </section>
    <section class="about">
        <div class="container grid-2 center">
            <div class="center about1">
                <i class="fas fa-users fa-2x"></i>
                <h3 class="aboutus">About Us</h3>
            </div>
            <div class="left_border" >
                <div class="contact">
                <i class="fab fa-youtube fa-2x"></i>
                <i class="fab fa-twitter fa-2x"></i>
                <i class="fas fa-envelope fa-2x"></i>
            </div>
            <h3>Contact Us</h3>
            </div>
    
        </div>
    </section>
    <footer class="footer center">
        <p>Showbizz Media &copy; 2018 </p>
    </footer>
</body>
</html>