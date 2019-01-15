<html>
<head>
    <title>Showbizz.in</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="infodisplay.css" />
</head>
<body background="anime.jpg" class="bg" >
    <?php

    $servername = "localhost";
    $username="piyush";
    $password="piyush@123";
    $dbname = "movies";
    $name = $_POST["wsearch"];
    

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
    
    $sql = "SELECT * FROM `anime` WHERE title like '%$name%' ";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $conn->close();
    ?>
<div id="container">
    <div id="header">
    <form action="search.php" method="POST">
       
           <a class="home" href="welcome.html">Showbizz.in</a>
             <a class="topnav" href="movie.php">Movies</a>
             <a class="topnav" href="series.php">Series</a>
             <a class="topnav" href="animedisplay.php">Anime</a>
        <input type="text" placeholder="Search" name="wsearch" class="searchbar"><button type="submit" class="searchbutton"><i class="fa fa-fw fa-search"></i></button> 
    </form>
    </div>
    <div id="main">
        <div id="leftinfo">
            <div class="image">
            <img src="<?php echo $row["imgsrc"]; ?>" class="animeimage">
            <div class="imgtext"><?php echo $row["title"]; ?></div>
            </div>
            <p class="infoheading">Information</p>
            <p class="sinfo"><b>English Name: </b><?php echo $row["eng_name"]; ?></p>
            <p class="sinfo"><b>Type: </b><?php echo $row["type"]; ?></p>
            <p class="sinfo"><b>Seasons: </b><?php echo $row["seasons"]; ?></p>
            <p class="sinfo"><b>Episodes: </b><?php echo $row["episodes"]; ?></p>
            <p class="sinfo"><b>Rating: </b><?php echo $row["rating"]; ?></p>
            <p class="sinfo"><b>Studio: </b><?php echo $row["studio"]; ?></p>
            <p class="sinfo"><b>Status: </b><?php echo $row["status"]; ?></p>
            <p class="sinfo"><b>Run Time: </b><?php echo $row["runTime"]; ?></p>
            <p class="sinfo"><b>Release Date: </b><?php echo $row["relDate"]; ?></p>
        </div>
        <div id="rightinfo">
            <div id="plotarea">
                    <p class="rightheading">Plot:</p>
                    <pre class="synopsis"><?php echo $row["Info"]; ?></pre>
            </div>    
            <footer class="footer">
        <p>Showbizz Media &copy; 2018 </p>
    </footer>    
        </div>
    </div>

