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
        <a href="dashboard.php" class="btn btn-outline-secondary btn-sm btn-back">← Back to Dashboard</a>
    </header>

    <main class="container">
        <h2>Your Liked Items</h2>
        <p class="text-center">Here you can see the items you have liked.</p>

        <!-- Example Liked Item Card -->
        <div class="card">
            <h3>Item Title</h3>
            <p>Description of the item.</p>
            <form action="../controller/unlike.php" method="post">
                <input type="hidden" name="item_id" value="1">
                <button type="submit" class="btn btn-danger btn-sm">Remove</button>
            </form>
        </div>

        <!-- Add more liked items as needed -->
    </main>
</body>

</html>
