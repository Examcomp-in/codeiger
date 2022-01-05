<?php
session_start(); 
include'../db_conn.php';

	$email = htmlspecialchars($_POST['phone']);
	$pass = md5(htmlspecialchars($_POST['password']));

	$address = htmlspecialchars($_POST['address']);
	$city = htmlspecialchars($_POST['city']);
	$state = htmlspecialchars($_POST['state']);
	$pin = htmlspecialchars($_POST['pin']);


 $r=rand(100000,999999);
 $token=md5(rand());
 $auth=md5($token);
 


$sql = "INSERT INTO users (email, password, address, city, state, pin,otp,token)
VALUES ('$email', '$pass', '$address','$city','$state','$pin','$r', '$token')";

if (mysqli_query($conn, $sql)) {
         $field = array(
             "sender_id" => "FSTSMS",
             "language" => "english",
             "route" => "qt",
             "numbers" => $email,
             "message" => "26228",
             "variables" => "{#BB#}",
             "variables_values" => $r
             );
             $curl = curl_init();
             curl_setopt_array($curl, array(
                 CURLOPT_URL => "https://www.fast2sms.com/dev/bulk",
                 CURLOPT_RETURNTRANSFER => true,
                 CURLOPT_ENCODING => "",
                 CURLOPT_MAXREDIRS => 10,
                 CURLOPT_TIMEOUT => 30,
                 CURLOPT_SSL_VERIFYHOST => 0,
                 CURLOPT_SSL_VERIFYPEER => 0,
                 CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                 CURLOPT_CUSTOMREQUEST => "POST",
                 CURLOPT_POSTFIELDS => json_encode($field),
                 CURLOPT_HTTPHEADER => array(
                     "authorization: sj0y71mKRITBZimugcc31vblY7CNyowItLnL9jS4rxISA2HffUURA6dAP90f",
                     "cache-control: no-cache",
                     "accept: */*",
                     "content-type: application/json"
                     ),
                     ));
                     $response = curl_exec($curl);
                     $err = curl_error($curl);
 
                     curl_close($curl);
                          if ($err) {
                         echo "cURL Error #:" . $err;
                         
                     } else {
    header("location:activation.php");
                     }
} else {
    header("location:signup.php?error=Something went wrong or email already exists");
}

mysqli_close($conn);

?> 