<?php
require '../backOffice/db.php';
$id = $_GET['id'];
$sql = 'SELECT * FROM article WHERE id=:id';
$statement = $connection->prepare($sql);
$statement->execute([':id' => $id ]);
$art = $statement->fetch(PDO::FETCH_OBJ);

if (isset ($_POST['title'])  && isset($_POST['author']) && isset($_POST['date']) && isset($_POST['content']) && isset($_POST['url']) && isset($_POST['category_id']) ) {
  $title = $_POST['title'];
  $author = $_POST['author'];
  $date = $_POST['date'];
  $content = $_POST['content'];
  $url = $_POST['url'];
  $category_id = $_POST['category_id'];
  $sql = 'UPDATE article SET title=:title, author=:author, date=:date, content=:content, url=:url, category_id=:category_id WHERE id=:id';
  $statement = $connection->prepare($sql);
  if ($statement->execute([':title' => $title, ':author' => $author, ':date' => $date, ':content' => $content, ':url' => $url, ':category_id' => $category_id,  ':id' => $id])) {
    header("Location: ../backOffice/index.php");
  }
}
?>

<?php require '../headerFooter/headerBack.php'; ?>

<div class="container">
  <div class="card mt-5">
    <div class="card-header">
      <h2>Mettre à jour un article</h2>
    </div>
    <div class="card-body">
      <?php if(!empty($message)): ?>
        <div class="alert alert-success">
          <?= $message; ?>
        </div>
      <?php endif; ?>
      <form method="post">

        <div class="form-group">
          			<label for="title">Titre</label>
          			<input value="<?= $art->title; ?>"type="text" name="title" id="title" class="form-control">
        		</div>

        		<div class="form-group">
          			<label for="author">Auteur</label>
          			<input value="<?= $art->author; ?>" type="text" name="author" id="author" class="form-control">
        		</div>

        		<div class="form-group">
          			<label for="date">Date de parution</label>
          			<input value="<?= $art->date; ?>"type="date" name="date" id="date" class="form-control">
        		</div>

        		<div class="form-group">
          			<label for="content">Contenu</label>
          			<input value="<?= $art->content; ?>"type="text" name="content" id="content" class="form-control">
        		</div>

        		<div class="form-group">
          			<label for="url">URL</label>
          			<input value="<?= $art->url; ?>"type="text" name="url" id="url" class="form-control">
        		</div>

                <div class="form-group">
                    <label for="category_id">Catégorie ID</label>
                    <input value="<?= $art->category_id; ?>"type="text" name="category_id" id="category_id" class="form-control">
                </div>
        			
        		<div class="form-group">
          			<button type="submit" class="btn btn-info">Modifier l'article</button>
          		</div>

      </form>
    </div>
  </div>
</div>

<?php require '../headerFooter/footerBack.php'; ?>

