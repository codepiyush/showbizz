<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="seriesdata.css">
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
        <a href="series.php">Series</a>
        </div>
    </div>
        <nav class="nav grid-3 center pad0">
            <div class="font center linker">
            <a href="movie.php">Movies</a>
            </div>
            <div class=" font center linker">
            <a href='animedisplay.php'>Anime</a>
            </div>
            <div class="left_border padadj">
                <form action="seriesdsearch.php" method="POST" >
                    <input type="text" name="msearch" id="msearch" placeholder="Search movies">
                    <input type="submit" value="search" id="mbutton">
                </form>
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
        $sql="SELECT * FROM series where name='$name'";
        if($conn->query($sql))
        {
            $result=$conn->query($sql);
            if($result->num_rows>0)
            {
                while($row=$result->fetch_assoc())
                {
                    echo "<div class='grid-2-1 data'>";
                    echo "<div class='pad0'>";
                    echo "<div class='image center'><img src='".$row['image']."' height=350 width=300></div>";
                    echo "<div id='mname' class='center'>".$row["Name"]."</div>";
                    echo "<div class='details'><p>IMDB Rating&nbsp&nbsp:&nbsp&nbsp".$row["Rating"]."</p>";
                    echo "<p> Runtime&nbsp&nbsp:&nbsp&nbsp".$row["Length"]."&nbspmin</p>";
                    echo "<p>Year Release&nbsp&nbsp:&nbsp&nbsp".$row["Year"]."</p>";
                    echo "<form method='POST' action='actordata.php'>";
                    echo "<p>Lead Actor&nbsp&nbsp:&nbsp&nbsp";
                    echo "<input type='hidden' name='msearch' value='".$row["Actor"]."'>";
                    echo "<button class='linkButton movielink'>".$row["Actor"]."</button>";
                    echo "</form></p>";
                    echo "<form method='POST' action='data.php'>";
                    echo "<p>Director&nbsp&nbsp:&nbsp&nbsp";
                    echo "<input type='hidden' name='msearch' value='".$row["Director"]."'>";
                    echo "<button class='linkButton movielink'>".$row["Director"]."</button>";
                    echo "</form></p>";
                    echo "<p>Production House&nbsp&nbsp:&nbsp&nbsp".$row["Production"]."</p>";
                    echo "<p>Genre&nbsp&nbsp:&nbsp&nbsp";
                    $sql2="SELECT * FROM seriesgenre where name='$name'";
        if($conn->query($sql2))
        {
            $result2=$conn->query($sql2);
            $i=0;
            if($result2->num_rows>0)
            {
                while($row2=$result2->fetch_assoc())
                {
                    if($i!=0)
                    { echo "/";
                    }
                    echo $row2["genre"];
                    $i++;
                }
            }
        }
                    echo "</p></div>";
                    echo "</div>";
                    echo "<div class='info'><p id='topic'><u>About</u>&nbsp:</p>".$row["about"]."</div>";
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