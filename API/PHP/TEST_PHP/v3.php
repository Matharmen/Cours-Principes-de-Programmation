<?php
$url="http://localhost:5000/students";
$reponse=file_get_contents($url);
$students=json_decode($reponse,true);

echo "<h1>Liste des étudiants</h1>";

foreach($students as $student){
    echo $student['name'] . " - " . $student['age'];
}
