<link rel = "stylesheet" href ="styles.css" >
<?php
$name = $lastName = $email = $tel = $password = $gender = "";
$nameErr = $lastNameErr = $emailErr = $telErr = $passwordErr = $genderErr = "";
$phoneRegex = "/^(\+374(3|5|7|9))\d{7}$/";
$nameRegex = "/^[a-zA-z]*$/";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   if (empty ($_POST["name"])) {
    $nameErr = '<small class = required-error> Name is required </small>';
   }else {
    $name = clear_input ($_POST["name"]);
    if (!preg_match ($nameRegex, $name)) {
    $nameErr = "<small class = required-error> Write Your Name </small>";
    }
   }
   if (empty ($_POST["lastname"])){
    $lastNameErr = "<small class = required-error> Lastname is required </small>";
   }else {
    $lastName = clear_input ($_POST["lastname"]);
    if (!preg_match ($nameRegex, $lastName)){
        $lastNameErr= "<small class = required-error> Write Your Lastname </small>";
    }
   }
   if (empty ($_POST["email"])){
    $emailErr ="<small class = required-error> Email is required </small>";
   }else {
    $email = clear_input ($_POST["email"]);
    if (filter_var ($email, FILTER_VALIDATE_EMAIL)) {
        $email = clear_input ($_POST["email"]);
    }else {
        $emailErr = "<small class = required-error> Write Your Valid Email </small>";
    }
   }
   if (empty($_POST['tel'])) {
    $telErr = "<small class = required-error> Telephone is required </small>";
   }else {
    $tel = clear_input ($_POST["tel"]); 
    if (!preg_match ($phoneRegex, $tel)){
    $telErr = "<small class = required-error> Write Your Tel </small>";
    }
   }
   if (empty ($_POST["password"])){
    $passwordErr = "<small class = required-error> Password is required";
   }else {
    $password = clear_input ($_POST["password"]);
   }
   if (empty ($_POST['gender'])){
    $genderErr = "<small class = required-error> Gender is required";
   }else {
    $gender = clear_input ($_POST["gender"]);
   }
}

function clear_input ($val) {
    $val = trim ($val);
    $val = strip_tags ($val);
    $val = stripslashes ($val);
    $val = htmlspecialchars ($val);
    return $val;
}
?>

