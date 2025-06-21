<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Comment List</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #f0f0f0;
    }

    .container {
      max-width: 800px;
      margin: 30px auto;
    }

    .card {
      background-color: #ffffff;
      border: 1px solid #cccccc;
      border-radius: 10px;
      padding: 20px;
      margin-bottom: 20px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.05);
    }

    .canteen-name {
      font-weight: bold;
      margin-bottom: 5px;
    }

    .comment-text {
      margin-bottom: 15px;
    }

    h2 {
      text-align: center;
      margin-top: 20px;
      color: #333;
    }

    .btn-back {
      margin: 20px;
    }
  </style>
</head>

<body>

  <header class="d-flex justify-content-start align-items-center">
    <a href="index.php?c=Users&m=dashboard" class="btn btn-outline-secondary btn-sm btn-back">← Back to Dashboard</a>
  </header>

  <main class="container">
    <h2>Comment List</h2>
    <p class="text-center">Here you can see your comments.</p>

    <?php if (empty($comments)): ?>
      <p class="text-center">Tidak ada komentar.</p>
    <?php else: ?>
      <?php foreach ($comments as $comment): ?>
        <div class="card">
          <div class="canteen-name"><?= htmlspecialchars($comment['canteen_name']) ?></div>
          <div class="comment-text"><?= htmlspecialchars($comment['comment']) ?></div>
          <form method="post" action="index.php?c=Comments&m=deleteComment" class="text-end">
            <input type="hidden" name="delete_id" value="<?= $comment['id_comment'] ?>">
            <button type="submit" class="btn btn-danger btn-sm"
              onclick="return confirm('Delete this comment?')">Delete</button>
          </form>
        </div>
      <?php endforeach; ?>
    <?php endif; ?>
  </main>

</body>

</html>
