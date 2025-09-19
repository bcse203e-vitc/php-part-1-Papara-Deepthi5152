<?php
$json_string = '{"Title": "The Cuckoos Calling", "Author": "Robert Galbraith", "Detail": {"Publisher": "Little Brown"}}';
$book = json_decode($json_string);
echo "Title : " . $book->Title . "<br>";
echo "Author : " . $book->Author . "<br>";
echo "Publisher : " . $book->Detail->Publisher;
?>

