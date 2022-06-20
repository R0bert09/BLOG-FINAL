<?php include('path.php'); ?>
<?php include("controllers/user.php"); 
guestsOnly();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesión</title>
    <!--Bootstrap CSS-->
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic&amp;display=swap">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="styles/style2.css">
    <style>
        .btn {
            border: none;
            outline: none;
            height: 50px;
            width: 100%;
            background-color: #92252a;
            color: white;
            border-radius: 4px;
            font-weight: bold;
        }

        .btn:hover {
            background: white;
            border: 1px solid;
            color: #92252a;
        }
    </style>
</head>

<body>

    <?php include("includes/log&regNav.php"); ?>
    <br>
    <div class="vh-100">
        <div class="container py-5 h-100">
            <div class="row d-flex align-items-center justify-content-center h-100">
                <div class="col-md-8 col-lg-7 col-xl-6">
                    <img src="img/login.jpg" alt="login-form" class="img-fluid" style="border-radius: 10px;">
                </div>
                <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
                    <form action="login.php" method="post">

                        <?php include("helpers/formErrors.php"); ?>

                        <h1>Iniciar Sesión</h1><br>
                        <!--Input Correo electronico-->
                        <div class="form-outline mb-4">
                            <input type="text" id="form1Example13" class="p-font form-control form-control-lg" name="username" value="<?php echo $username; ?>"/>
                            <label class="form-label p-font" for="form1Example13">Usuario</label>
                        </div>
                        <!--Input Contrasenia-->
                        <div class="form-outline mb-4">
                            <input type="password" id="form1Example23" class="p-font form-control form-control-lg" name="password" value="<?php echo $password; ?>"/>
                            <label class="p-font form-label" for="form1Example23">Password</label>
                        </div>
                        <!-- button inicio de sesion -->
                        <button type="submit" class="btn btn-block" name="login-btn">Iniciar Sesión</button><br>
                        <!--link register-->
                        <p class="mb-5 pb-lg-2 p-font" style="color: #393f81;">Aun no tienes una cuenta? <a href="register.php" style="color: #393f81;">Crea una cuenta aqui</a></p>
                    </form>

                </div>
            </div>
        </div>
    </div>

    <?php include("includes/footer.php"); ?>

</body>
</html>