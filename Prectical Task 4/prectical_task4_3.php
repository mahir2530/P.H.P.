<!-- Develop a PHP script to manage movie ratings using associative arrays. -->
<html>
    <body>
        <form method="POST">
            <label>Movie : </label>
            <input type="text" name="movie"><br><br>
            <label>Rating : </label>
            <input type="number" name="rating"><br><br>
            <input type="submit" name="submit" value="Submit">
        </form>
        <?php
            if(isset($_POST["submit"]))
            {
                $movie = $_POST["movie"];
                $rating = $_POST["rating"];
                $movie_rating = array($movie=>$rating);
                foreach($movie_rating as $key=>$value)
                {
                    echo "<h2> Movie rating of $key movie is $value. <br></h2>";
                }
            }
        ?>
    </body>
</html>