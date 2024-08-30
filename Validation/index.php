<?php
include_once"validation.php";
$email = "test@example.com";
$password = "pass1";
$name = "fvdaff";
$result_e = Validation::validateEmail($email);
$result_p=Validation::validatePassword($password);
$result_n=Validation::validateName($name);
echo "Email validation: " . ( $result_e? "Valid" : "Invalid") ;
echo "<br>";
echo "Password validation: " . ($result_p ? "Valid" : "Invalid");
echo "<br>";
echo "Required field validation: " . ($result_n ? "Valid" : "Invalid");
