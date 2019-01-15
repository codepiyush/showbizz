<html>
<head>
    <title>Showbizz.in</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="animegenresearch.css" />
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
    <div id="main" >
    <?php
            $servername = "localhost";
            $username="piyush";
            $password="piyush@123";
            $dbname = "movies";
            $genre=$_POST["nsearch"];
            echo "<p class='headtext'>Search Results For $genre:</p>";
        $conn=new mysqli($servername,$username,$password,$dbname);
        if($conn->connect_error)
        {
            die("connection failed".$conn->connect_error);

        }
        $sql="SELECT * FROM anime INNER JOIN animegenre ON anime.title=animegenre.title WHERE animegenre.genre='$genre'";
        

        if($conn->query($sql))
        {
            $result=$conn->query($sql);
            if($result->num_rows>0)
            {   
                while($row=$result->fetch_assoc())
                {
                   echo  "<div id='imagegallery'>";
                   echo  "<div><form action='infodisplay.php' method='POST'>";  
                   echo "<button class='img'  name='wsearch' value='".$row["title"]."'><img src='".$row["imgsrc"]."'><br><br>".$row["title"]."</button>";
                   echo "</form>";
                   echo "</div></div>";
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
