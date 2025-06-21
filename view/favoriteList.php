<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <title>Your Liked Items</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
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
    <h2><?= htmlspecialchars($user_name) ?>'s Liked Canteens</h2>
    <p class="text-center">Here you can see the canteens you have liked.</p>

    <?php if (!empty($favorites)) : ?>
      <?php foreach ($favorites as $canteen) : ?>
        <div class="card">
          <h4 class="card-title">
            <a href="index.php?c=Canteens&m=viewDetail&id=<?= $canteen['id_canteen'] ?>">
              <?= htmlspecialchars($canteen['name']) ?>
            </a>
          </h4>
          <p><?= nl2br(htmlspecialchars($canteen['description'])) ?></p>
          <form action="index.php?c=Favorites&m=removeFavorite" method="POST" class="mt-2">
            <input type="hidden" name="id_canteen" value="<?= $canteen['id_canteen'] ?>">
            <input type="hidden" name="redirect" value="favorites">
            <button type="submit" class="btn btn-danger btn-sm">Remove from Favorites</button>
          </form>
        </div>
      <?php endforeach; ?>
    <?php else : ?>
      <div class="alert alert-info text-center">You haven't liked any canteens yet.</div>
    <?php endif; ?>
  </main>
</body>

</html>
