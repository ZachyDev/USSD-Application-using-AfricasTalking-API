<?php 
// Reads the variables sent via POST from AT's API
$sessionId = $_POST['sessionId'];
$serviceCode = $_POST['serviceCode'];
$phoneNumber = $_POST['phoneNumber'];
$text = $_POST['text'];

if($text == "") {
    // This is the first request from the user after dialing the service code
    $response .= "CON what would you want to check\n";
    $response .= "1. My Account No\n";
    $response .= "2. My Phone Number\n";

}
else if ($text == "1") {
    // Business logic for  first level response
    $response .= "CON Choose account information you want\n";
    $response .= "1. Account Number\n";
    $response .= "2. Account Balance";
}
else if ($text == "2") {
     $response .= "END Your phone number is " . $phoneNumber;
}  
else if ($text == "1*1") {
    $accountNumber = "ACC1000";
    $response .= "END Your account number is " . $accountNumber;
}
else if ($text == "1*2") {
    $accountBalance = "KSH 20,000.00";
    $response .= "END Your account balance is " . $accountBalance;
}
// echo the response to the API
header('Content-type; text/plain');
echo $response;


?>