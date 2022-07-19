
<?php

if (isset($_POST['submit'])) {
    session_start();
    $conn = new PDO("mysql:host=localhost:3306;dbname=peminjaman", "root", "",);
    $username = $_POST['username'];
    $password = $_POST['password'];
    $result = $conn->prepare("SELECT * FROM user WHERE username = ?");
    $result->bindParam(1, $username);
    $result->execute();

    if ($row = $result->fetch()) {
        if (password_verify($password, $row["password"])) {
            header("Location: admin.php");
            $_SESSION['username'] = $username;
            $_SESSION['login'] = true;
            $_SESSION['level'] = $row["level"];

            if ($_SESSION["level"]=$row["level"]=="admin"){
            header ("Location: admin.php");
            }
            else if ($_SESSION["level"]=$row["level"]=="petugas"){
                header ("Location: petugas/petugas.php");
             }  
              else if ($_SESSION["level"]=$row["level"]=="siswa"){
                header ("Location: siswa.php");
             }        
            exit;

        }else {
             $_SESSION['login failed'] = true;
        }
    } else {
        $_SESSION['login failed'] = true;
    }
    }
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Login Web Parrel</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <link rel="stylesheet" href="css/style.css">

    </head>
    <body class="img js-fullheight" style="background-image: url(images/bg1.jpg);">
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-5">
                    <h2 class="heading-section">Login Dulu Deckk</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="login-wrap p-0">
                <h3 class="mb-4 text-center">Sudah punya akun deckk?</h3>
                <form action="" method="POST" class="signin-form">
                    <?php
                            if (isset($_SESSION['login failed'])) : ?>
                            <div     role="alert">
                                Akunmu Raono Deckk!!
                            </div>
                            <?php
                                unset($_SESSION['login failed']);
                            endif;
                            ?>
                    <div class="form-group">
                        <input for="username" name="username" id="username"type="text" class="form-control" placeholder="Username" required>
                    </div>
                <div class="form-group">
                  <input  id="password" name="password" type="password" class="form-control" placeholder="Password" required>
                  <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                </div>
                <div class="form-group">
                    <button type="submit" name="submit" class="form-control btn btn-primary submit px-3">Login</button>
                </div>
                <div class="form-group d-md-flex">
                    <div class="w-50">
                        <label class="checkbox-wrap checkbox-primary">Remember me
                                      <input type="checkbox" checked>
                                      <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="w-50 text-md-right">
                                    <a href="#" style="color: #fff">Lali Password</a>
                                </div>
                </div>
              </form>
             
              </div>
                </div>
            </div>
        </div>
    </section>

    <script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

    </body>
</html>

