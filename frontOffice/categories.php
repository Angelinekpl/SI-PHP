<?php
require '../backOffice/db.php';
$sql = 'SELECT * FROM article WHERE category_id=:id';
$statement = $connection->prepare($sql);
$statement->bindValue(':id', $_GET['id']);
$statement->execute();
$nb = $statement->rowCount();
$sql2 = 'SELECT category_name FROM categories WHERE category_id=:id';
$statement2 = $connection->prepare($sql2);
$statement2->bindValue(':id', $_GET['id']);
$statement2->execute();
$categories = $statement2->fetch(PDO::FETCH_ASSOC);
$category_name = $categories['category_name'];
?>

<?php require '../headerFooter/headerFrontCategories.php' ?>

<h1 class="title"><?=$category_name?></h1>

<?php while(false !== $article = $statement->fetch(PDO::FETCH_ASSOC)) {

    $title = $article['title'];
    $author = $article['author'];
    $id = $article['id'];
    ?>

    <h1 class="title"><?= $title ?></h1>
    <p><?= $author ?></p>
    <a href="article.php?id=<?= $id ?>">Lire</a>


<?php } ?>




<?php require '../headerFooter/footerFront.php' ?>