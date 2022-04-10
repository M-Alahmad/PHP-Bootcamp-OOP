<?php include("../init.php"); ?>
<?php include("elements/header.php"); ?>

<h1>Startseite des Blogs</h1>
<p class="lead">Das hier ist die Startseite des Blogs.</p>

<?php
  $postsRepsitory = new App\Post\PostsRepository($pdo);
  $res = $postsRepsitory->fetchPosts();
?>

<ul>
    <?php foreach ($res AS $row): ?>
    <li>
        <a href="post.php?id=<?php echo $row->id; ?>">
            <?php echo $row->title; ?>
        </a>
    </li>
    <?php endforeach; ?>
</ul>

<?php include("elements/footer.php"); ?>