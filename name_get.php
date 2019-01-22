

<?php

$nameErr = $emailErr = $phoneErr = $stateErr = "";
$name = $email = $phone = $state = 

if ($_SERVER["REQUEST_METHOD"] == "GET") {
  if (empty($_GET["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_GET["name"]);
  }

  if (empty($_GET["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_GET["email"]);
	
	if (empty($_GET["phone"])) {
    $phone = "";
  } else {
    $phone = test_input($_GET["phone"]);
  }
  if (empty($_GET["phone"])) {
    $state = "";
  } else {
    $state = test_input($_GET["state"]);
  
  }


?>