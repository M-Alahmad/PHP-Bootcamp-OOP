<?php include("../init.php"); ?>
<?php include("elements/header.php"); ?>

<h1>Post.php</h1>

<?php
$postsRepsitory = new App\Post\PostsRepository($pdo);
$id = $_GET['id'];
$post = $postsRepsitory->fetchPost($id);
 ?>

 <div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title"><?php echo $post->title; ?></h3>
  </div>
  <div class="panel-body">
   <?php echo nl2br($post->content); ?>
  </div>
 </div>

<?php include("elements/footer.php"); ?>
