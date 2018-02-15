<?php
require '../backOffice/db.php';
$sql = 'SELECT * FROM article WHERE id=:id';
$statement = $connection->prepare($sql);
$statement->bindValue(':id', $_GET['id']);
$statement->execute();
$article = $statement->fetch(PDO::FETCH_ASSOC);
$title = $article['title'];
$author = $article['author'];
$date = $article['date'];
$url = $article['url'];
$content = $article['content'];
?>

<?php require '../headerFooter/headerFrontArticle.php' ?>

<div class="container">
    <div class="content">
        <h1 class="title"><?=$title?></h1>
        <p class="author"><?=$author?></p>
        <p class="date"><?=$date?></p>
        <p class="articletxt"><?=$content?></p>
        <a target="_blank" href="<?= $url ?>" class="fullArticle">Read the original</a>
    </div>
</div>
<?php require '../headerFooter/footerFront.php' ?>