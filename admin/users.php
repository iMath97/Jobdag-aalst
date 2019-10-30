<?php
session_start();
if(isset($_SESSION['ID']) && $_SESSION['Rank'] == 3){
    include "includes/connection.php";
} else {
    header("Location: ../index.php?loggedin=false");
    exit;
}

$page = "users";
    
require("includes/header.php");
?>
    <h1>Create a new user!</h1>
    <div class="register">
        <form action="../includes/register.php" method="post">
            <div class="group">
                <label for="username">Username: </label><br>
                <input type="text" name="username"><br>
            </div>
            <div class="group">
                <label for="password">Password: </label><br>
                <input type="password" name="password"><br>
            </div>
            <div class="group">
                <label for="vpassword">Verify password: </label><br>
                <input type="password" name="vpassword"><br>
            </div>
            <div class="group">
                <label for="rank">Rank (1: communication, 2: practical, 3: admin): </label><br>
                <input type="text" name="rank"><br>
            </div>
            <input type="submit" value="Create" name="buttonRegister" class="button">
        </form>
    </div>
<?php

require("includes/footer.php");
?>