<?php
$nom = $_GET['nom'];
$numbers = array("Ahmed" => "22 154 875", "Houssem" => "54 127 859", "Anas" => "20 145 784");
foreach ($numbers as $key=>$value) {
    if(!strcasecmp($nom,$key)){
      echo $key.' : '.$value;
      return 0;
    }
}
echo "Not Found";

?>
