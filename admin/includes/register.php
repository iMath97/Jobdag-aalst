<?php
    include "connection.php";

    if(isset($_POST['buttonRegister'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $vpassword = $_POST['vpassword'];
        $rank = $_POST['rank'];

        $nameOk = 0;
        $nameExists = 1;
        $passOk = 0;

        $sql = "SELECT * FROM users WHERE Username='$username' LIMIT 1;";
        $users = mysqli_query($con, $sql);
        $user = mysqli_fetch_assoc($users);
    
        if ($user['Username'] != $username) {
            $nameExists = 0;
        }
      
        
        
        if($username == null){
            echo "Username is empty<br>";
        } elseif(strlen($username) <= 2){
            echo "Username is too short<br>";
        } elseif($nameExists == 1){
            echo "Username already exists <br>";
        } else {
            $nameOk = 1;
        }

        $passArr = str_split($password);
        $numbers = 0;
        foreach($passArr as $character){
            if(is_numeric($character)){
                $numbers+=1;
            }
        }

        if($password == null){
            echo "Password is empty<br>";
        } elseif(strlen($password) < 8){
            echo "Password is too short<br>";
        }elseif($vpassword == null){
            echo "Verification password is empty<br>";
        } elseif($password != $vpassword){
            echo "Passwords do not match<br>";
        } elseif($numbers < 1){
            echo "Your password doesn't have a number<br>";
        } else {
            $passOk = 1;
        }

        


        if($nameOk == 1 && $passOk == 1){
            $password = md5($password);
            $register = "INSERT INTO `users` (`Id`, `Username`, `Password`, `Rank`) VALUES (NULL, '$username', '$password', '$rank');";
            $complete = mysqli_query($con, $register);


            header("Location: ../users.php?register=success");
        }
    }

?>