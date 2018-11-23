<html>
<head>
    <title>Showbizz.in</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="animedisplay.css" />
</head>
<body background="anime.jpg" class="bg" >
    
<div id="container">
    <div id="header">
    <form action="infodisplay.php" method="POST">
       
           <a class="home" href="home.html">Showbizz.in</a>
             <a class="topnav" href="movie.html">Movies</a>
             <a class="topnav" href="Tvseries.html">Tv-Shows</a>
             <a class="topnav" href="top.html">Top 10</a>
        <input type="text" placeholder="Search" name="search" class="searchbar"><button type="submit" class="searchbutton"><i class="fa fa-fw fa-search"></i></button> 
    </form>
    </div>
    <div id="main">
    <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "movies";
            $genre=$_POST["msearch"];
            echo "lmao";
        $conn=new mysqli($servername,$username,$password,$dbname);
        if($conn->connect_error)
        {
            die("connection failed".$conn->connect_error);

        }
        $sql="SELECT anime.title, anime.imgsrc, anime-genre.genre FROM anime INNER JOIN anime-genre ON anime.title=anime-genre.title WHERE anime.genre='$genre";
        

        if($conn->query($sql))
        {
            $result=$conn->query($sql);
            if($result->num_rows>0)
            {
                while($row=$result->fetch_assoc())
                {

                   echo  "<div id='imagegallery1'>";   
                   echo  "<form action='infodisplay.php' method='POST'>";   
                   echo "<input type='hidden' name='search' value='".$row["title"]."'>";
                   echo "<button class='img'><img src='".$row["imgsrc"]."'><br><br>".$row["title"]."</button>";
                   echo "</form>";
                   echo "</div>";
                }
            }
            else{
                echo "<div class='error center'><p>Oops!</p><p>No Data Found!</p>";
                echo "<p>No result for this Genre!</p></div>";
            }
        }
            ?>
</div>
<div id="end">
        <p class="genre">Genre</p>
        <div class="grid-3">
        <div class='paraspace'>
            <form method='POST' action='animegenresearch.php'>
                    
                    <button class='gbutton' name='msearch' value='Action'> Action </button>

            <form method='POST' action='animegenresearch.php'>
                    <input type='hidden' name='msearch' value='Adventure'>
                    <button class='gbutton'> Adventure </button>
                
            <form method='POST' action='animegenresearch.php'>
                    <input type='hidden' name='msearch' value='Comedy'>
                    <button class='gbutton'> Comedy </button>
                
            <form method='POST' action='animegenresearch.php'>
                    <input type='hidden' name='msearch' value='Drama'>
                    <button class='gbutton'> Drama </button>

            <form method='POST' action='animegenresearch.php'>
                    <input type='hidden' name='msearch' value='Slice of Life'>
                    <button class='gbutton'> Slice of Life </button>
    </div>
    <div class='paraspace'>
        <form method='POST' action='animegenresearch.php'>
                    <input type='hidden' name='msearch' value='Fantasy'>
                    <button class='gbutton'> Fantasy </button>

            <form method='POST' action='animegenresearch.php'>
                    <input type='hidden' name='msearch' value='Magic'>
                    <button class='gbutton'> Magic </button>
                
            <form method='POST' action='animegenresearch.php'>
                    <input type='hidden' name='msearch' value='Supernatural'>
                    <button class='gbutton'> Supernatural </button>
                
            <form method='POST' action='animegenresearch.php'>
                    <input type='hidden' name='msearch' value='Horror'>
                    <button class='gbutton'> Horror </button>

            <form method='POST' action='animegenresearch.php'>
                    <input type='hidden' name='msearch' value='Mystery'>
                    <button class='gbutton'> Mystery </button>

    </div>
    <div class='paraspace'>
        
        <form method='POST' action='animegenresearch.php'>
                    <input type='hidden' name='msearch' value='Psychological'>
                    <button class='gbutton'> Psychological </button>

            <form method='POST' action='animegenresearch.php'>
                    <input type='hidden' name='msearch' value='Romance'>
                    <button class='gbutton'> Romance </button>
                
            <form method='POST' action='animegenresearch.php'>
                    <input type='hidden' name='msearch' value='Sci-fi'>
                    <button class='gbutton'> Sci-Fi </button>

    </div>
    </div>
