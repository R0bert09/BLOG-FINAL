<?php include("../../path.php"); ?>
<?php include(ROOT_PATH . "/controllers/user.php"); 
adminOnly();
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <!-- Font Awesome -->
        <link rel="stylesheet"
            href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
            integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
            crossorigin="anonymous">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Candal|Lora"
            rel="stylesheet">

        <!-- Custom Styling -->
        <link rel="stylesheet" href="../../styles/style.css">

        <!-- Admin Styling -->
        <link rel="stylesheet" href="../../styles/admin1.css">

        <title>Admin Section - Administrar Usuarios</title>
    </head>

    <body>
        
        <?php include("../../includes/adminNav.php");?>
        <!-- Admin Page Wrapper -->
        <div class="admin-wrapper">

            <!-- Left Sidebar -->
            <?php include("../../includes/adminSidebar.php");?>
            <!-- // Left Sidebar -->


            <!-- Admin Content -->
            <div class="admin-content">
                <div class="button-group">
                    <a href="create.php" class="btn btn-big">Agregar Usuarios</a>
                    <a href="index.php" class="btn btn-big">Administrar Usuarios</a>
                </div>
                <div class="content">

                    <h2 class="page-title">Administrar Usuarios</h2>
                    <?php include("../../includes/mensajes.php"); ?>    
                    <table>
                        <thead>
                            <th>SN</th>
                            <th>Username</th>
                            <th>Nombres</th>
                            <th>Apellidos</th>
                            <th colspan="2">Action</th>
                        </thead>
                        <tbody>
                            <?php foreach($admin_users as $key => $user): ?>
                            <tr>
                                <td><?php echo $key + 1; ?></td>
                                <td><?php echo $user['username']; ?></td>
                                <td><?php echo $user['nombres']; ?></td>
                                <td><?php echo $user['apellidos']; ?></td>
                                <td><a href="edit.php?id=<?php echo $user['id']; ?>" class="edit">Editar</a></td>
                                <td><a href="index.php?delete_id=<?php echo $user['id']; ?>" class="delete">Eliminar</a></td>
                            </tr>
                            <?php endforeach;?>
                        </tbody>
                    </table>

                </div>

            </div>
            <!-- // Admin Content -->

        </div>
        <!-- // Page Wrapper -->



        <!-- JQuery -->
        <script
            src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <!-- Ckeditor -->
        <script
            src="https://cdn.ckeditor.com/ckeditor5/12.2.0/classic/ckeditor.js"></script>
        <!-- Custom Script -->
        <script src="../../scripts/scripts.js"></script>

    </body>

</html>