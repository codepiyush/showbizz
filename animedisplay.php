<html>
<head>
    <title>Showbizz.in</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="animedisplay.css" />
</head>
<body background="anime.jpg" class="bg" >
    
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
        <div id="latest">
            <div id="heading1">
                <P class="title1">Latest: </P>
            </div>
            <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "movies";
        $conn=new mysqli($servername,$username,$password,$dbname);
        if($conn->connect_error)
        {
            die("connection failed".$conn->connect_error);

        }
        $sql = "SELECT * FROM `anime` order by relDate desc LIMIT 5";
        if($conn->query($sql))
        {
            $result=$conn->query($sql);
            if($result->num_rows>0)
            {
                while($row=$result->fetch_assoc())
                {

                   echo  "<div id='imagegallery1'>";   
                   echo  "<form action='infodisplay.php' method='POST'>";   
                   echo "<input type='hidden' name='wsearch' value='".$row["title"]."'>";
                   echo "<button class='img'><img src='".$row["imgsrc"]."'><br><br>".$row["title"]."</button>";
                   echo "</form>";
                   echo "</div>";
                }
            }
        }
            ?>
        </div>

    <div id="top">
        <div id="heading2">
                <P class="title2">Top: </P>
            </div>
        <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "movies";
        $conn=new mysqli($servername,$username,$password,$dbname);
        if($conn->connect_error)
        {
            die("connection failed".$conn->connect_error);

        }
        $sql = "SELECT * FROM `anime` order by rating desc LIMIT 5";
        if($conn->query($sql))
        {
            $result=$conn->query($sql);
            if($result->num_rows>0)
            {
                while($row=$result->fetch_assoc())
                {

                   echo  "<div id='imagegallery2'>";   
                   echo  "<form action='infodisplay.php' method='POST'>";   
                   echo "<input type='hidden' name='search' value='".$row["title"]."'>";
                   echo "<button class='img'><img src='".$row["imgsrc"]."'><br><br>".$row["title"]."</button>";
                   echo "</form>";
                   echo "</div>";
                }
            }
        }
        ?>
    </div>
    </div>
<div id="end">
        <p class="genre">Genre</p>
        <div class="grid-3">
        <div class='paraspace'>
            
        <form method='POST' action='animegenresearch.php'>            
        <button class='gbutton' name='nsearch' value='Action'> Action </button></form>
        <form method='POST' action='animegenresearch.php'>
        <button class='gbutton'  name='nsearch' value='Adventure'> Adventure </button></form>
        <form method='POST' action='animegenresearch.php'>
        <button class='gbutton' name='nsearch' value='Comedy'> Comedy </button></form>
        <form method='POST' action='animegenresearch.php'>
        <button class='gbutton' name='nsearch' value='Drama'> Drama </button></form>
        <form method='POST' action='animegenresearch.php'>
        <button class='gbutton' name='nsearch' value='Slice of Life'> Slice of Life </button></form>
    </div>
    <div class='paraspace'>

        <form method='POST' action='animegenresearch.php'>
        <button class='gbutton' name='nsearch' value='Fantasy'> Fantasy </button></form>
        <form method='POST' action='animegenresearch.php'>
        <button class='gbutton' name='nsearch' value='Magic'> Magic </button></form>
        <form method='POST' action='animegenresearch.php'>
        <button class='gbutton' name='nsearch' value='Supernatural'> Supernatural </button></form>
        <form method='POST' action='animegenresearch.php'>
        <button class='gbutton' name='nsearch' value='Horror'> Horror </button></form>
        <form method='POST' action='animegenresearch.php'>
        <button class='gbutton' name='nsearch' value='Mystery'> Mystery </button></form>

    </div>
    <div class='paraspace'>
        
        <form method='POST' action='animegenresearch.php'>
        <button class='gbutton' name='nsearch' value='Psychological'> Psychological </button></form>
        <form method='POST' action='animegenresearch.php'>
        <button class='gbutton' name='nsearch' value='Romance'> Romance </button></form>
        <form method='POST' action='animegenresearch.php'>
        <button class='gbutton' name='nsearch' value='Sci-fi'> Sci-Fi </button></form>

    </div>
    </div>