<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <title>Canteen Details</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <style>
    body {
      background-color: #f0f0f0;
    }

    header h1 {
      text-align: center;
      margin-top: 20px;
    }

    .canteen-details {
      max-width: 700px;
      margin: 40px auto;
      background-color: #ffffff;
      border: 1px solid #ccc;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.05);
    }

    .comment-card {
      background-color: #f9f9f9;
      border: 1px solid #ddd;
      padding: 15px;
      border-radius: 8px;
      margin-bottom: 15px;
    }

    .btn-add {
      margin-top: 20px;
      margin-bottom: 30px;
    }
  </style>
</head>

<body>
  <header>
    <h1><a href="index.php?c=Users&m=dashboard" class="text-decoration-none text-dark">Brawijaya University Canteen</a></h1>
  </header>

  <main class="canteen-details">
    <h2><?= htmlspecialchars($canteen['name']) ?></h2>
    <p><strong>Price Range:</strong> <?= htmlspecialchars($canteen['price']) ?></p>
    <p><strong>Description:</strong> <?= nl2br(htmlspecialchars($canteen['description'])) ?></p>

    <div class="row text-center btn-add">
      <div class="col-12 col-md-6 mb-2">
        <a href="index.php?c=Comments&m=addComment&id=<?= $canteen['id_canteen'] ?>" class="btn btn-secondary w-100">Add Comment</a>
      </div>
      <div class="col-12 col-md-6">
        <form action="index.php?c=Favorites&m=addFavorite" method="post">
          <input type="hidden" name="id_canteen" value="<?= $canteen['id_canteen'] ?>">
          <button type="submit" class="btn btn-secondary w-100">Add to Favorites</button>
        </form>
      </div>
    </div>

    <h4 class="mb-3">Comments</h4>
    <div id="comments">
      <?php if (!empty($comments)) : ?>
        <?php foreach ($comments as $comment) : ?>
          <div class="comment-card">
            <strong><?= htmlspecialchars($comment['user_name'] ?? 'Anonymous') ?>:</strong>
            <?= nl2br(htmlspecialchars($comment['comment'])) ?>
          </div>
        <?php endforeach; ?>

      <?php else : ?>
        <div class="text-muted">No comments yet.</div>
      <?php endif; ?>
    </div>
  </main>

</body>

</html>
