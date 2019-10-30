<?php
    

    if(isset($_POST['loginbtn'])){
        include "connection.php";

        $username = $_POST['username'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM users WHERE Username='$username';";
        $resp = mysqli_query($con, $sql);
        $arr = mysqli_fetch_assoc($resp);

        $testname = $arr['Username'];
        
        if($username == null || $password == null){
            echo "lege velden";
        } else {

           //pass verification
           
           

           if($username == $testname){

                $pass = $arr['Password'];
                $password = md5($password);

                if($password == $pass){
                    $id = $arr['Id'];
                    $rank = $arr['Rank'];

                    
                    session_start();

                    $_SESSION['ID'] = $id; 
                    $_SESSION['Username'] = $username;
                    $_SESSION['Rank'] = $rank;

                    if($rank == 1){
                        header("Location: ../communication.php");
                    } elseif($rank == 2){
                        header("Location: ../practical.php");
                    } elseif($rank == 3){
                        header("Location: ../admin.php");
                    }

                    

                } else {
                    header("Location: ../../index.php");
                }

           } else {
            header("Location: ../../index.php");
           }

        }
    }

?>