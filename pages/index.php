<?php
include("../init.php");

$postsController = $container->make("postsController");
$postsController->index();

?>
<?php /*
<?php include("elements/header.php"); ?>

<h1>Startseite des Blogs</h1>
<p class="lead">Das hier ist die Startseite des Blogs.</p>

<?php
  $postsRepsitory = $container->make("postsRepository");
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
*/ ?>