<?php
$html = file_get_contents("php://input");
$html = "<!DOCTYPE html><html lang=\"en\">$html</html>";


$i = 1;
$id = "reportes/r$i";
while (file_exists($id)) {
    $i++;
    $id = "reportes/r$i";
}

file_put_contents($id, $html);
echo $id;