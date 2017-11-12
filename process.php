<?php
$name = $_POST["name"];
$email = $_POST["email"];
$password = $_POST["password"];

$EmailTo = "emailaddress@test.com";
$Subject = "New Message Received";

// готовим тело электронного письма
$Body .= "Name: ";
$Body .= $name;
$Body .= "\n";

$Body .= "Email: ";
$Body .= $email;
$Body .= "\n";

$Body .= "Password: ";
$Body .= $password;
$Body .= "\n";

// отправляем электронную почту
//$success = mail($EmailTo, $Subject, $Body, "From:".$email);
$success=true;

// перенаправляем на страницу сообщения об успешной отправке данных формы
if ($success){
   echo "success";
}else{
    echo "invalid";
}
?>