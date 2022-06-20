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
    <title>Registro</title>
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
    <div class="container vh-100">
        <div class="container py-5 h-100">
            <div class="row row d-flex align-items-center justify-content-center h-100">
                <div class="col-md-8 col-lg-7 col-xl-6">
                    <img src="img/login.jpg" alt="login-form" class="img-fluid" style="border-radius: 10px;">
                </div>
                <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
                    <form action="register.php" method="post">
                        <h1>Crear Cuenta</h1><br>
                        <!--input Nombre Apellido-->
                        <div class="row form-outline mb-4">

                            <?php include("helpers/formErrors.php"); ?>

                            <div class="col">
                                <input type="text" class="p-font form-control form-control-lg" placeholder="Nombre" name="nombres" value ="<?php echo $nombres; ?>"/>
                                <label class="p-font form-label" for="form2Example27">Nombre</label>
                            </div>
                            <div class="col">
                                <input type="text" class="p-font form-control form-control-lg" placeholder="Apellido" name="apellidos" value ="<?php echo $apellidos; ?>">
                                <label class="p-font form-label" for="form2Example27">Apellido</label>
                            </div>
                        </div>
                        <!--input username-->
                        <div class="form-outline mb-4">
                            <input type="text" id="username" class="p-font form-control form-control-lg" placeholder="Usuario" name="username" value ="<?php echo $username; ?>"/>
                            <label class=" p-font form-label" for="form2Example27">Nombre de usuario</label>
                        </div>
                        <!--input correo electronico-->
                        <div class="form-outline mb-4">
                            <input type="email" id="Email" class="p-font form-control form-control-lg" placeholder="Correo electronico" name="email" value ="<?php echo $email; ?>"/>
                            <label class="p-font form-label" for="form2Example27">Correo electronico</label>
                        </div>
                        <!--input correo electronico-->
                        <div class="form-outline mb-4">
                            <input type="password" id="password" class="p-font form-control form-control-lg" placeholder="Contraseña" name="password" value ="<?php echo $password; ?>"/>
                            <label class="form-label p-font" for="form2Example27">Contraseña</label>
                            <span id="mensaje" class="p-font"></span>
                        </div>

                        <div class="form-outline mb-4">
                            <input type="password" id="passwordConf" class="p-font form-control form-control-lg" placeholder="Confirmar Contraseña" name="passwordConf" value ="<?php echo $passwordConf; ?>"/>
                            <label class=" p-font form-label" for="form2Example27">Confirmar Contraseña</label>
                        </div>

                        <button type="submit" class="p-font btn btn-block" name="register-btn">Registrarme</button><br>

                        <p class="mb-5 pb-lg-2 p-font" style="color: #393f81;">Ya tienes una tienes una cuenta? <a href="login.php" style="color: #393f81;">Inicia sesión aqui</a></p>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php include("includes/footer.php"); ?>

    <script type="text/javascript" src="scripts/jquery-3.6.0.js"></script>
    <script type="text/javascript" src="scripts/passvalidate.js"></script>

</body>



</html>