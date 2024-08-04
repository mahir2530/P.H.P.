<!-- Create a PHP script to manage a library of books using associative arrays. -->
<?php
$library = array(
    "To Kill a Mockingbird" => "Harper Lee",
    "1984" => "George Orwell",
    "Pride and Prejudice" => "Jane Austen",
    "The Great Gatsby" => "F. Scott Fitzgerald",
    "Moby Dick" => "Herman Melville"
);

echo "Current library books:<br>";
foreach ($library as $book => $author) {
    echo "$book by $author<br>";
}

$library["The Catcher in the Rye"] = "J.D. Salinger";

if (isset($library["1984"])) 
{
    $library["1984"] = "Eric Arthur Blair (George Orwell)";
}

if (isset($library["Moby Dick"])) {
    unset($library["Moby Dick"]);
}

echo "<br>Updated library books:<br>";
foreach ($library as $book => $author) {
    echo "$book by $author<br>";
}
?>