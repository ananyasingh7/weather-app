<?php

$zipcode = $_GET['zipcode'];

//http://api.openweathermap.org/data/2.5/weather?zip=07003,us&units=metric&appid=******

$url = "http://api.openweathermap.org/data/2.5/weather?zip=".$zipcode.",us&APPID=b1e5608a357abaaa13b687491225b6c4";

$fp = fopen ( $url , "r" );

$contents = "";

while ( $data = fread ( $fp, 1000  ) ) {
   $contents .=  $data;
}

echo $contents;


?>
