
<?php

// show errors
error_reporting(E_ALL);
ini_set('display_errors', 1);

// get picture from GET

if(isset($_GET["moto"])) {
	$pic = $_GET["moto"];
		} else {
			$pic = "";
		}

if($pic == "Daisy"){
    print '<img src="daisy.png">';
}

if($pic == "Rose"){
    print '<img src="rose.png">';
}

if($pic == "Tulip"){
    print '<img src="tulip.png">';
}

?>