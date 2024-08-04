<!-- Create a PHP program which will create buttons for the following functions -
• sort
• search
• sum
• merge
and print the data accordingly. -->
<html>
    <body>
        <form method="POST">
            <label>Sort : </label>
            <input type="submit" name="sort" value="sort"><br><br>
            <label>Search : </label>
            <input type="submit" name="search" value="search"><br><br>
            <label>Sum : </label>
            <input type="submit" name="sum" value="sum"><br><br>
            <label>Merge : </label>
            <input type="submit" name="merge" value="merge"><br><br>
        </form>
        <?php
            $arr1=array(2,3,5,6,5,1);
            $arr2=array(0,4,7,8,9,2);
            $age=array(
                "ved"=>"20",
                "devrajsinh"=>"21",
                "sujal"=>"19"
            );
            if(isset($_POST["sort"]))
            {
                asort($arr1);
                echo "<h2>Sorted Array1 : <br>";
                echo "Ascending order sort by Value For Array1 : <br>";
                foreach($arr1 as $value)
                {
                    echo $value." ";
                }
                echo "<br><br>";

                arsort($arr1);
                echo "Sorted Array2 : <br>";
                echo "Descending order sort by Value For Array1 : <br>";
                foreach($arr1 as $value)
                {
                    echo $value." ";
                }
                echo "<br><br>";

                asort($arr2);
                echo "Sorted Array3 : <br>";
                echo "Ascending order sort by Value For Array2 : <br>";
                foreach($arr2 as $value)
                {
                    echo $value." ";
                }
                echo "<br><br>";

                arsort($arr2);
                echo "Sorted Array4 : <br>";
                echo "Descending order sort by Value For Array2 : <br>";
                foreach($arr2 as $value)
                {
                    echo $value." ";
                }
                echo "<br><br>";

                echo "Sorted Array5 : <br>";
                echo "Ascending order sort by Value : <br>";
                asort($age);
                foreach($age as $key=>$value)
                {
                    echo "Key : ".$key." , "." Value : ".$value." ";
                    echo "<br>";
                }
                echo "<br>";

                echo "Sorted Array6 : <br>";
                echo "Descending order sort by Value : <br>";
                arsort($age);
                foreach($age as $key=>$value)
                {
                    echo "Key : ".$key." , "." Value : ".$value." ";
                    echo "<br>";
                }
                echo "<br>";

                echo "Sorted Array7 : <br>";
                echo "Ascending order sort by Key : <br>";
                ksort($age);
                foreach($age as $key=>$value)
                {
                    echo "Key : ".$key." , "." Value : ".$value." ";
                    echo "<br>";
                }
                echo "<br>";

                echo "Sorted Array8 : <br>";
                echo "Descending order sort by Key : <br>";
                krsort($age);
                foreach($age as $key=>$value)
                {
                    echo "Key : ".$key." , "." Value : ".$value." ";
                    echo "<br>";
                }
                echo "<br>";
                echo "</h2>";
            }
            elseif(isset($_POST["search"]))
            {
                $value=5;
                $a = array_search($value,$arr1);
                if($a !== false)
                {
                    echo "<h2>$value is found in the array.</h2>";
                }
                else
                {
                    echo "<h2>$value is not found in the array.</h2>";
                }
                echo "<br>";
            }
            elseif(isset($_POST["sum"]))
            {
                $sum = array_sum($arr1);
                echo "<h2> Sum of the Array1 : $sum </h2>";
                echo "<br>";

                $sum = array_sum($arr2);
                echo "<h2> Sum of the Array2 : $sum </h2>";
                echo "<br>";
                
            }
            elseif(isset($_POST["merge"]))
            {
                $merge = array_merge($arr1,$arr2);
                echo "<h2> Merged Array : <br>";
                foreach($merge as $value)
                {
                    echo $value." , ";
                }
                echo "<br>";
                echo "</h2>";
            }
        ?>
    </body>
</html>