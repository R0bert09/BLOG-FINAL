<?php include("path.php"); ?>
<?php include(ROOT_PATH . "/controllers/posts.php"); 

$post = selectOne('posts', ['id'=>$_GET['id']]);


?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Blog Post - Brand</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic&amp;display=swap">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
</head>

<body>
    
    <?php include("includes/nav.php"); ?>

    <header class="masthead" style="background-image:url('<?php echo BASE_URL . '/assets/img/' . $post['image']; ?>');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-lg-8 mx-auto position-relative">
                    <div class="post-heading">
                        <h1><?php echo $post['title']; ?></h1>
                        <span class="meta">Posteado el&nbsp;<?php echo date('j F, Y', strtotime($post['created_at'])); ?></span>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <article>
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-lg-8 mx-auto">
                    <p><?php echo html_entity_decode($post['body']); ?></p>
                    <a href="#"><img class="img-fluid" src="<?php echo BASE_URL . '/assets/img/' . $post['image']; ?>"></a>
                </div>
            </div>
        </div>
    </article>

    <?php include("includes/footer.php");?>
    
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/clean-blog.js"></script>
</body>

</html>