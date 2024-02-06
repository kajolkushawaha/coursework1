<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="../css/register.css" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <div class="container">
        
        <form action="../script/register.php" method="POST">
            <h1>Create new Account</h1>
            <?php
                if(isset($_SESSION['status'])){
                    echo $_SESSION['status'];
                    unset($_SESSION['status']);
                }
            ?>
            <br>
            <div>
                <label for="firstname">First name</label>
                <input name="firstname" type="text" id="firstname" placeholder="Enter first name" required>
            </div>
            <div> 
               <label for="lastname">Last name</label>
                <input name="lastname" type="text" id="lastname" placeholder="Enter Last name" required>
            </div>
            <div>
                <label for="email">Email</label>
                <input name="email" type="email" id="email" placeholder="Enter email" required>
            </div>
            
            <div>
                <label for="password">Password</label>
                <input name="password" type="password" id="password" placeholder="Password" required>
            </div>
            <input type="submit">

        </form>
    </div>
</body>
</html>
