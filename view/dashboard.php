<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <style>
        body {
            background-color: #f0f0f0;
        }

        .dashboard-container {
            max-width: 600px;
            margin: 40px auto;
            padding: 30px;
            background-color: #ffffff;
            border: 1px solid #cccccc;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.05);
        }

        header h1 {
            text-align: center;
            margin-top: 20px;
            color: #333;
        }

        .dashboard-buttons a {
            display: block;
            margin: 10px 0;
            padding: 12px;
            background-color: #e0e0e0;
            text-align: center;
            text-decoration: none;
            color: #333;
            border-radius: 5px;
            transition: background-color 0.2s ease;
        }

        .dashboard-buttons a:hover {
            background-color: #d0d0d0;
        }
    </style>
</head>

<body>
    <header>
        <h1>Brawijaya University Canteen</h1>
    </header>

    <main>
        <div class="dashboard-container text-center">
            <h2>Welcome to the Dashboard</h2>
            <p>Here you can manage your canteen activities.</p>
            <div class="dashboard-buttons mt-4">
                <a href="#">Canteen List</a>
                <a href="#">My Comment</a>
                <a href="#">My Favorites</a>
                <a href="index.php?c=Users&m=logout">Logout</a>
            </div>
        </div>
    </main>

</body>

</html>
