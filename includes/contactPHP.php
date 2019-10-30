<?php
    if(isset($_POST["submit"])){
        $to = "webcreatorsaalst@gmail.com";
        $from = $_POST["email"];
        $name = $_POST["name"];
        $subject = $_POST["subject"];
        $message = $name." wrote the following message:"."\n\n".$_POST["message"]."\n\n"."sender email: ".$from;
        $header = "From:".$from;
        mail($to,$subject,$message,$header) or die ("Failed");
        header('Location: ../contact.php');
    }
?>