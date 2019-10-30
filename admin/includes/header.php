<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <div class="wrapper">
            <nav>
                <div class="left">
                    <ul>
                        <?php
                        if($page == "admin"){
                            echo "<li><a href='admin.php' class='active'>Admin</a></li>";
                        } else {
                            echo "<li><a href='admin.php'>Admin</a></li>";
                        }
                        if($page == "users"){
                            echo "<li><a href='users.php' class='active'>Users</a></li>";
                        } else {
                            echo "<li><a href='users.php'>Users</a></li>";
                        }
                        if($page == "communication"){
                            echo "<li><a href='communication.php' class='active'>Communication</a></li>";
                        } else {
                            echo "<li><a href='communication.php'>Communication</a></li>";
                        }
                        if($page == "practical"){
                            echo "<li><a href='practical.php' class='active'>Practical</a></li>";
                        } else {
                            echo "<li><a href='practical.php'>Practical</a></li>";
                        }
                        ?>
                    </ul>
                </div>
                <div class="right">
                    <form action="includes/logout.php" method="post">
                        <input type="submit" value="Logout" class="logout">
                    </form>
                </div>
            </nav>
        </div>
    </header>
    <div class="wrapper">
        <main>
            