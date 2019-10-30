<?php
    session_start();
    if(isset($_SESSION['ID']) && ($_SESSION['Rank'] == 2 || $_SESSION['Rank'] == 3)){
        
        include "includes/connection.php";
    } else {
        header("Location: ../index.php?loggedin=false");
        exit;
    }
    
    $page = "practical";
    
    require("includes/header.php");
    
    require("includes/footer.php");
?>