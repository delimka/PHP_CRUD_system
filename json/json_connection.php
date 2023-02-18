<?php
$db = mysqli_connect('localhost', 'root', '', 'phpcrud') or die("Error " . mysqli_error($db));

$record = mysqli_query($db, "SELECT * FROM mobile");

// fetch table rows from DB

$emparray = array();
while($row =mysqli_fetch_assoc($record))
{
    $emparray[] = $row;
}


$file = 'json/mobdata.json';

// create file if not exists
if(!is_file($file)){
    //Some simple example content.
    $contents = 'This is a test!';
    //Save our content to the file.
    file_put_contents($file, $contents);
}

//write to json file
$fp = fopen('json/mobdata.json', 'w');
fwrite($fp, json_encode($emparray,JSON_PRETTY_PRINT));
fclose($fp);



?>




