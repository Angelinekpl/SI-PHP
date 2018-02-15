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



<?php while(false !== $article = $statement->fetch(PDO::FETCH_ASSOC)) {
    $id = $article['id'];
    $title = $article['title'];
    $author = $article['author'];
    $date = $article['date'];
    ?>

    <h1 class="title"><?=$title?></h1>
    <p class=""><?=$author?></p>
    <p class=""><?=$date?></p>
    <a class="" href="article.php?id=<?=$id?>">Lire</a>

<?php } ?>

<?php require '../headerFooter/footerFront.php' ?>

