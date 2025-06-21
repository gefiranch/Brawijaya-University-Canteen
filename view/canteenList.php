<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <title>Canteen List</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <style>
    body {
      background-color: #f0f0f0;
    }

    header h1 {
      text-align: center;
      margin-top: 20px;
    }

    .canteen-container {
      max-width: 800px;
      margin: 40px auto;
      padding: 20px;
    }

    .card {
      background-color: #ffffff;
      border: 1px solid #cccccc;
      border-radius: 10px;
      padding: 20px;
      margin-bottom: 20px;
      box-shadow: 0 0 8px rgba(0, 0, 0, 0.03);
    }

    .card a {
      text-decoration: none;
      color: #0d6efd;
    }

    .card a:hover {
      text-decoration: underline;
    }
  </style>
</head>

<body>
  <header>
    <h1>Daftar Kantin</h1>
  </header>
  <div class="canteen-container">

    <?php if (empty($canteens)): ?>
      <p class="text-center">Belum ada data kantin.</p>
    <?php else: ?>
      <?php foreach ($canteens as $canteen): ?>
        <div class="card">
          <h4><?= htmlspecialchars($canteen['name']) ?></h4>
          <a href="index.php?c=Canteens&m=viewDetail&id=<?= $canteen['id_canteen'] ?>">Lihat Detail</a>
        </div>
      <?php endforeach; ?>
    <?php endif; ?>

  </div>
</body>

</html>
