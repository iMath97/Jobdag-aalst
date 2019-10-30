<?php

if(isset($_POST['send']) && isset($_POST['privacy'])){

    include "connection.php";
    $bedrijfsnaam = $_POST['company'];
    $adres = $_POST['adres'];
    $contactPersoon = $_POST['contact'];
    $tel = $_POST['phone'];
    $email = $_POST['email'];
    $url = $_POST['companyURL'];
    $aantalAanwezigen = $_POST['attendees'];
    $status = 1;

    $sql = "INSERT INTO `companies` (`Id`, `Bedrijfsnaam`, `Adres`, `ContactPersoon`, `Tel`, `Email`, `Url`, `Aanwezigen`, `StatusComp`) VALUES (NULL, '$bedrijfsnaam', '$adres', '$contactPersoon', '$tel', '$email', '$url', '$aantalAanwezigen', '$status');";
    $result = mysqli_query($con, $sql);

    header("Location: ../../inschrijven.php?inschrijven=success");

    $from = "webcreatorsaalst@gmail.com";
    $subject = "Registratie Jobdag";
    $message = '
    Dank u voor de inschrijving!
    Jobdag 3/12/2019.

    ------------------------
    contact persoon: '.$contactPersoon.'
    bedrijfsnaam: '.$bedrijfsnaam.'
    adres: '.$adres.'
    tel: '.$tel.'
    bedrijfs url: '.$url.'
    aantal aanwezigen: '.$aantalAanwezigen.'
    ------------------------

    Met vriendelijke groeten, het webcreator team.
    '.$from.'

    ';

    $header = "From: ".$from;
    $headerCopy = "From: ".$email;
    mail($email,$subject,$message,$header) or die ("Failed to send");
    mail($from,$subject,$message,$headerCopy) or die ("Failed to send");


} else {
    header("Location: ../../inschrijven.php?inschrijven=mislukt");
}

?>