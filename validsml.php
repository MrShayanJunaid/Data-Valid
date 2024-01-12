<?php
$xml = new DOMDocument();
$xml -> load("index.xml");
if($xml->validate()){
    echo "Data is Valid";
}
else{
    echo "Data is Not Valid";
}
?>