<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Academia Washington</title>
</head>


<?php


$files = scandir("../reportes", SCANDIR_SORT_ASCENDING);
$output = '<H1>Reportes</H1><br>';
foreach ($files as $file) {
    if ($file != '.' && $file != '..' && $file != 'index.php' && $file != 'banner.png') {
        $output
            .= "<a href='$file'>$file</a><br>";
    }
}

echo $output;