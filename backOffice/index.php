<?php
	require '../backOffice/db.php';
	$sql = 'SELECT * FROM article';
	$statement = $connection->prepare($sql);
	$statement->execute();
	// Fetch all the rows in the result set
	$article = $statement->fetchAll(PDO::FETCH_OBJ);
?>

<?php require '../headerFooter/headerBack.php' ?>

<div class="container">
  <div class="card mt-5">
    <div class="card-header">
      <h2>Tous les articles</h2>
    </div>
    <div class="card-body">
      <table class="table table-bordered">
        <tr>
          <th>Titre</th>
          <th>Auteur</th>
          <th>Date</th>
          <th>Contenu</th>
          <th>URL</th>
            <th>Catégorie ID</th>
          <th>Action</th>
        </tr>
        <?php foreach($article as $art): ?>
          <tr>
            <td><?= $art->title; ?></td>
            <td><?= $art->author; ?></td>
            <td><?= $art->date; ?></td>
            <td><?= $art->content; ?></td>
            <td><?= $art->url; ?></td>
              <td><?= $art->category_id; ?></td>
            <td>
              <a href="edit.php?id=<?= $art->id ?>" class="btn btn-info">Modifier</a>
              <a onclick="return confirm('Êtes vous sûr de vouloir supprimer cet article?')" href="delete.php?id=<?= $art->id ?>" class='btn btn-danger'>Supprimer</a>
            </td>
          </tr>
        <?php endforeach; ?>
      </table>
    </div>
  </div>
</div>


<?php require '../headerFooter/footerBack.php' ?>
