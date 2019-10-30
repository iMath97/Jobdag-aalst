<?php
    session_start();
    if(isset($_SESSION['ID']) && ($_SESSION['Rank'] == 1 || $_SESSION['Rank'] == 3)){
        
        include "includes/connection.php";
    } else {
        header("Location: ../index.php?loggedin=false");
        exit;
    }
    
    $page = "communication";
    
    require("includes/header.php");

    echo "<h1>Bedrijven</h1>";
    echo "<h1>Aanwezige bedrijven</h1>";
    
    $sql = "SELECT * FROM `companies` Where StatusComp='2';";
    $result = mysqli_query($con, $sql);
    
    $compArrayAccepted = [];
    while($row = $result->fetch_assoc()){
        array_push($compArrayAccepted, $row);
    }
    
    echo "<table><tr><th>Id</th><th>Bedrijfsnaam</th><th>Email</th></tr>";

    $lengteCompanies = count($compArrayAccepted);
    for($i = 0; $i < $lengteCompanies; $i++){
        $naam = $compArrayAccepted[$i]['Bedrijfsnaam'];
        $id = $compArrayAccepted[$i]['Id'];
        $email = $compArrayAccepted[$i]['Email'];
        echo "<tr><td>$id</td><td>$naam</td><td>$email</td></tr>";

    }
    
    echo "</table>";

    echo "<h1>Wijzig status bedrijven</h1>";

    $sql = "SELECT * FROM `companies`;";
    $result = mysqli_query($con, $sql);
    
    $compArray = [];
    while($row = $result->fetch_assoc()){
        array_push($compArray, $row);
    }
    
    echo "<table><tr><th>Id</th><th>Bedrijfsnaam</th><th>Status</th></tr>";

    $lengteCompanies = count($compArray);
    for($i = 0; $i < $lengteCompanies; $i++){
        $naam = $compArray[$i]['Bedrijfsnaam'];
        $status = $compArray[$i]['StatusComp'];
        $id = $compArray[$i]['Id'];
        echo "<tr><td>$id</td><td>$naam</td><td>$status</td></tr>";

    }
    
    echo "</table>";

    echo '<form action="communication.php" method="post"><div class="group"><label for="compId">Id</label><br><input type="text" name="compId"><br></div><div class="group"><label for="status">Status (1: in afwachting, 2: geaccepteerd, 3: afgewezen)</label><br><input type="text" name="status"><br></div><input type="submit" value="Update" name="update"></form>';

    echo "Bedrijf laten weten via mail wanneer jullie ze accepteren";

    require("includes/footer.php");

    if(isset($_POST['update'])){
        $compId = $_POST['compId'];
        $compStatus = $_POST['status'];

        $sql = "UPDATE `companies` SET `StatusComp` = '$compStatus' WHERE `companies`.`Id` = $compId;";
        $resultUpdate = mysqli_query($con, $sql);
        header("Location: communication.php");
    }
?>
<div class="group"></div>