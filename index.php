<?php include("path.php"); ?>
<?php include(ROOT_PATH . "/controllers/topics.php");

$posts = array();
$postsTitle = 'Posts Recientes';

if (isset($_GET['t_id'])) {
  $posts = getPostsByTopicId($_GET['t_id']);
  $postsTitle = "Has buscado post en '" . $_GET['name'] . "'";
} else if (isset($_POST['search-term'])) {
  $postsTitle = "Buscaste '" . $_POST['search-term'] . "'";
  $posts = searchPosts($_POST['search-term']);
} else {
  $posts = getPublishedPosts();
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Candal|Lora" rel="stylesheet">

  <!-- Custom Styling -->
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&amp;display=swap">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic&amp;display=swap">
  <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
  <link rel="stylesheet" href="styles/style.css">

  <title>Blog</title>
</head>

<body>
  <?php include("includes/nav.php"); ?>
  <header class="masthead" style="background-color: #92252a;">
  </header>
  <?php include("includes/mensajes.php"); ?>
  <!-- Page Wrapper -->
  <div class="page-wrapper">

    <!-- Post Slider -->
    <div class="post-slider">
      <h1 class="slider-title">Trending Posts</h1>
      <i class="fas fa-chevron-left prev"></i>
      <i class="fas fa-chevron-right next"></i>

      <div class="post-wrapper">

        <?php foreach ($posts as $key => $post) : ?>
          <div class="post">
            <img src="<?php echo BASE_URL . '/assets/img/' . $post['image']; ?>" alt="" class="slider-image">
            <div class="post-info">
              <h4><a href="post.php?id=<?php echo $post['id']; ?>"> <?php echo $post['title']; ?></a></h4>
              <i class="far fa-user"> <?php echo $post['username']; ?></i>
              &nbsp;
              <i class="far fa-calendar"> <?php echo date('F j, Y', strtotime($post['created_at'])); ?></i>
            </div>
          </div>
        <?php endforeach; ?>

      </div>

    </div>
    <!-- // Post Slider -->

    <!-- Content -->
    <div class="content clearfix">

      <!-- Main Content -->
      <div class="main-content">
        <h1 class="recent-post-title"><?php echo $postsTitle ?></h1>

        <?php foreach ($posts as $post) : ?>
          <div class="post clearfix">
            <img src="<?php echo BASE_URL . '/assets/img/' . $post['image']; ?>" alt="" class="post-image">
            <div class="post-preview">
              <h2><a href="post.php?id=<?php echo $post['id']; ?>"><?php echo $post['title']; ?></a></h2>
              <i class="far fa-user"> <?php echo $post['username']; ?></i>
              &nbsp;
              <i class="far fa-calendar"> <?php echo date('F j, Y', strtotime($post['created_at'])); ?></i>
              <p class="preview-text p-font">
                <?php echo html_entity_decode(substr($post['body'], 0, 150) . "..."); ?>
              </p>
              <a href="post.php?id=<?php echo $post['id']; ?>" class="btn read-more">Leer mas</a>
            </div>
          </div>
        <?php endforeach; ?>


      </div>
      <!-- // Main Content -->

      <div class="sidebar">

        <div class="section search">
          <h2 class="section-title">Buscar</h2>
          <form action="index.php" method="post">
            <input type="text" name="search-term" class="text-input" placeholder="Search...">
          </form>
        </div>


        <div class="section topics">
          <h2 class="section-title">Temas</h2>
          <ul>
            <?php foreach ($topics as $key => $topic) : ?>
              <li><a href="<?php echo BASE_URL . '/index.php?t_id=' . $topic['id'] . '&name=' . $topic['name'] ?>"><?php echo $topic['name']; ?></a></li>
            <?php endforeach; ?>
          </ul>
        </div>

      </div>

    </div>
    <!-- // Content -->

  </div>
  <!-- // Page Wrapper -->

  <!-- footer -->
  <?php include("includes/footer.php"); ?>
  <!-- // footer -->


  <!-- JQuery -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <!-- Slick Carousel -->
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

  <!-- Custom Script -->
  <script src="scripts/scripts.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/js/clean-blog.js"></script>

</body>

</html>