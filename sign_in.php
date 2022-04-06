<?php
/***
 * 
 * To solve the two errors by tommorrow
 */
include_once ('db_connect.php');
//start session 
session_start();

 global $connect;
 $error_message = '';

    if ($_POST) {
        

        $username = $_POST['username'];
        $password = $_POST['password'];


        $query = 'SELECT * FROM  ims_users WHERE email ="'.$username.'" AND password="'.$password.'" LIMIT 1';

        $stmt = $connect->prepare($query);

        $result = $stmt->execute();


          if ($stmt->rowcount() > 0) {
                $stmt->setFetchMode(PDO::FETCH_ASSOC);
                $user = $stmt->fetchAll()[0];
                $_SESSION['user'] = $user;

                header('Location:dashboard.php');

          }else{
            $error_message ="Please make sure that username and password are correct.";
          }
       
    }
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" >
        <link rel="stylesheet" href="style.css">
        <script src="login.js"></script>
        <title>IMS Sign In</title>
    </head>

    <body id="loginBody">
          
       <?php  
         if (!empty($error_message)) { ?>
    
                  <div id="errorMessage">

                      <p> Error: <?= $error_message ?></p>

                  </div>
             

          <?php } ?>

           <div class="container">  
             <div class="loginHeader">
               <h1>IMS</h1> 
               <p>Inventory Management System</p>
             </div> 
             <div class="loginBody">
                  <form action="sign_in.php" method="POST">
                      <div class=" loginInputContainer">
                            <label for="">Username</label>
                            <input type="text" name="username" placeholder="username">
                      </div>
                      <div class=" loginInputContainer">
                            <label for="">Password</label>
                            <input type="password" name="password" placeholder="password">
                      </div>
                      <div class=" loginButtonContainer">
                            <button>SignIn</button>
                      </div>
                  </form>
             </div>
          </div>
    </body>

    </html>