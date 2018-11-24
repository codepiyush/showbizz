<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="movies.css">
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
        <div class="info">
            Movies
        </div>
    </div>
        <nav class="nav grid-3 center pad0">
            <div class="font center linker">
            <a href="series.php">Series</a>
            </div>
            <div class=" font center linker">
                <a href='animedisplay.php'>Anime</a>
            </div>
            <div class="left_border padadj">
                <form action="searchrel.php" method="POST" >
                    <input type="text" name="msearch" id="msearch" placeholder="Search movies">
                    <input type="submit" value="search" id="mbutton">
                </form>
            </div>
        </nav>
    </header>
    <section class="latest">
        <p id='lmovies'>Latest Release</p>
        <div class="grid-5 pad0 center">
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
        $sql="SELECT * FROM movie order by Year desc limit 5";
        if($conn->query($sql))
        {
            $result=$conn->query($sql);
            if($result->num_rows>0)
            {
                while($row=$result->fetch_assoc())
                {
                   echo "<div>";
                   echo "<form method='POST' action='moviedata.php'>";
                   echo "<input type='hidden' name='msearch' value='".$row["Name"]."'>";
                   echo "<button class='linkButton movielink'><img src='".$row["image"]."' height='280' width='230'><br><br>".$row["Name"]."</button>";
                   echo "</form>";
                   echo "</div>";
                }
            }
        }
    ?>
    </div>
    </section>
    <section class="rated">
        <p id='lrated'>Highest Rated</p>
        <div class="grid-5 pad0 center">
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
        $sql="SELECT * FROM movie order by Rating desc limit 5";
        if($conn->query($sql))
        {
            $result=$conn->query($sql);
            if($result->num_rows>0)
            {
                while($row=$result->fetch_assoc())
                {
                   echo "<div>";
                   echo "<form method='POST' action='moviedata.php'>";
                   echo "<input type='hidden' name='msearch' value='".$row["Name"]."'>";
                   echo "<button class='linkButton movielink'><img src='".$row["image"]."' height='280' width='230'><br><br>".$row["Name"]."</button>";
                   echo "</form>";
                   echo "</div>";
                }
            }
        }
    ?>
    </div>
    </section>
    <div class="genre center">
        <p id='gname' class='center'>GENRES</p>
        <div class='grid-4'>
            <div class='paraspace'>
                <form method='POST' action='genresearch.php'>
                    <input type='hidden' name='msearch' value='action'>
                    <button class='gbutton'> Action </button>
                </form>
                <form method='POST' action='genresearch.php'>
                    <input type='hidden' name='msearch' value='adventure'>
                    <button class='gbutton'> Aventure </button>
                </form>
                <form method='POST' action='genresearch.php'>
                    <input type='hidden' name='msearch' value='animation'>
                    <button class='gbutton'> Animation </button>
                </form>
                <form method='POST' action='genresearch.php'>
                    <input type='hidden' name='msearch' value='biographical'>
                    <button class='gbutton'> Biographical </button>
                </form>
                <form method='POST' action='genresearch.php'>
                    <input type='hidden' name='msearch' value='comedy'>
                    <button class='gbutton'> Comedy </button>
                </form>
            </div>
            <div class='paraspace'>
                <form method='POST' action='genresearch.php'>
                    <input type='hidden' name='msearch' value='crime'>
                    <button class='gbutton'> Crime </button>
                </form>
                <form method='POST' action='genresearch.php'>
                    <input type='hidden' name='msearch' value='disaster'>
                    <button class='gbutton'> Disaster </button>
                </form>
                <form method='POST' action='genresearch.php'>
                    <input type='hidden' name='msearch' value='documentry'>
                    <button class='gbutton'> Documentry </button>
                </form>
                <form method='POST' action='genresearch.php'>
                    <input type='hidden' name='msearch' value='drama'>
                    <button class='gbutton'> Drama </button>
                </form>
                <form method='POST' action='genresearch.php'>
                    <input type='hidden' name='msearch' value='fantasy'>
                    <button class='gbutton'> fantasy </button>
                </form>
            </div>
            <div class='paraspace'>
                <form method='POST' action='genresearch.php'>
                    <input type='hidden' name='msearch' value='fiction'>
                    <button class='gbutton'> Fiction </button>
                </form>
                <form method='POST' action='genresearch.php'>
                    <input type='hidden' name='msearch' value='horror'>
                    <button class='gbutton'> Horror </button>
                </form>
                <form method='POST' action='genresearch.php'>
                    <input type='hidden' name='msearch' value='musical'>
                    <button class='gbutton'> Musical </button>
                </form>
                <form method='POST' action='genresearch.php'>
                    <input type='hidden' name='msearch' value='mystry'>
                    <button class='gbutton'> Mystry </button>
                </form>
                <form method='POST' action='genresearch.php'>
                    <input type='hidden' name='msearch' value='romantic comedy'>
                    <button class='gbutton'> Romantic Comedy </button>
                </form>
            </div>
            <div class='paraspace'>
                <form method='POST' action='genresearch.php'>
                    <input type='hidden' name='msearch' value='Romance'>
                    <button class='gbutton'> Romance </button>
                </form>
                <form method='POST' action='genresearch.php'>
                    <input type='hidden' name='msearch' value='science fiction'>
                    <button class='gbutton'> Science Fiction </button>
                </form>
                <form method='POST' action='genresearch.php'>
                    <input type='hidden' name='msearch' value='superhero'>
                    <button class='gbutton'> Superhero </button>
                </form>
                <form method='POST' action='genresearch.php'>
                    <input type='hidden' name='msearch' value='thriller'>
                    <button class='gbutton'> Thriller </button>
                </form>
                <form method='POST' action='genresearch.php'>
                    <input type='hidden' name='msearch' value='war'>
                    <button class='gbutton'> War </button>
                </form>
            </div>
        </div>
    </div>
    <section class="about">
        <div class="container grid-2 center">
            <div class="center about1">
            <a href="about.html" class="about123"><i class="fas fa-users fa-2x"></i>
                <h3 class="aboutus">About Us</h3></a>
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