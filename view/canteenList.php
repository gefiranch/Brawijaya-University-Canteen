<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <title>Canteen List</title>
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
    <h1><a href="#" class="text-decoration-none text-dark">Brawijaya University Canteen</a></h1>
  </header>

  <main class="canteen-container">
    <h2 class="text-center mb-4">Canteen List</h2>
    <p class="text-center">Here you can find a list of canteens available at Brawijaya University.</p>

    <div class="card">
      <h3>Main Campus Canteen</h3>
      <a href="#">See details</a>
    </div>

    <div class="card">
      <h3>Science Block Canteen</h3>
      <a href="#">See details</a>
    </div>

    <div class="card">
      <h3>Engineering Canteen</h3>
      <a href="#">See details</a>
    </div>
  </main>

</body>

</html>
