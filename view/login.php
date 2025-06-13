<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f0f0f0;
        }

        .login-container {
            max-width: 400px;
            margin: 50px auto;
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
    </style>
</head>

<body>
    <header>
        <h1>Brawijaya University Canteen</h1>
    </header>

    <main>
        <div class="login-container">
            <h2 class="text-center mb-4">Login</h2>
            <form action="#" method="#">
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" id="username" name="username" placeholder="Username" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                </div>
                <div class="d-grid">
                    <button type="submit" class="btn btn-secondary">Login</button>
                </div>
            </form>
            <p class="mt-3 text-center">Don't have an account? <a href="#">Register here</a></p>
        </div>
    </main>

</body>

</html>
