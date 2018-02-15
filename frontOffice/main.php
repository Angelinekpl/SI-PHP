<?php
require '../backOffice/db.php';
$sql = 'SELECT * FROM article';
$statement = $connection->prepare($sql);
$statement->execute();
?>


<?php require '../headerFooter/headerFrontMain.php' ?>

<?php
if (isset($_GET['error'])) {
    ?>
    <div style="color: red"><?=$_GET['error']?></div>
    <?php
}
?>


<h1 class="allArticles">ALL ARTICLES</h1>

<section class="licorne">
<?php while(false !== $article = $statement->fetch(PDO::FETCH_ASSOC)) {
    $id = $article['id'];
    $title = $article['title'];
    $author = $article['author'];
    $date = $article['date'];
    ?>

    <div class="container">
        <div class="content">
            <h1 class="title"><?=$title?></h1>
            <p class="author">by <?=$author?></p>
            <p class="date"><?=$date?></p>
            <a class="read" href="article.php?id=<?=$id?>">READ</a>
        </div>
    </div>

<?php } ?>
</section>
<?php require '../headerFooter/footerFront.php' ?>

