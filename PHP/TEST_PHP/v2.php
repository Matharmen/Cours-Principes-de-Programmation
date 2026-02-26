<?php
$url="http://localhost:5000/students";
$reponse=file_get_contents($url);
//Décodage du JSON en tableau PHP
$students=json_decode($reponse,true);

echo "<pre>";
print_r($students);
echo "</pre>";
