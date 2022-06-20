<nav class="navbar navbar-light navbar-expand-lg fixed-top" id="mainNav">
    <div class="container"><a class="navbar-brand" href="index.php">Smash Blog</a><button data-bs-toggle="collapse" data-bs-target="#navbarResponsive" class="navbar-toggler" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="about.php">About us</a></li>
                <li class="nav-item"><a class="nav-link" href="contact.php">Contact us</a></li>

                <?php if(isset($_SESSION['id'])):?>
                     <li class="nav-item dropdown"> 
                            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">
                                <i class="fa fa-user"></i>
                                <?php echo $_SESSION['username'];?>
                                <i class="fa fa-chevron-down" style="font-size: .8em;"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <?php if($_SESSION['admin']):?>
                                <li><a class="dropdown-item" href="<?php echo 'admin/dashboard.php' ?>">Dashboard</a></li>
                                <?php endif;?>
                                <li><a class="dropdown-item" href="EditarP.php?id=<?php echo $_SESSION['id']?>";>Editar Perfil</a></li>
                                <li><a class="dropdown-item" href="<?php echo 'logout.php' ?>">Logout</a></li>
                            </ul>
                        </li>
                <?php else:?>
                    <li class="nav-item"><a class="nav-link" href="<?php echo 'register.php' ?>">Registrate</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?php echo 'login.php' ?>">Inicia Sesion</a></li>
                <?php endif;?>

                

            </ul>
        </div>
    </div>
</nav>