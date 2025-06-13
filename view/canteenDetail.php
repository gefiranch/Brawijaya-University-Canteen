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
        <h1><a href="#" class="text-decoration-none text-dark">Brawijaya University Canteen</a></h1>
    </header>

    <main class="canteen-details">
        <h2>Campus Canteen</h2>
        <p><strong>Price:</strong> $5 - $15</p>
        <p><strong>Description:</strong> A popular spot for students offering a variety of meals and snacks.</p>

        <div class="row text-center btn-add">
            <div class="col-12 col-md-6 mb-2">
                <button onclick="window.location.href='addComment.php';" class="btn btn-secondary w-100">Add Comment</button>
            </div>
            <div class="col-12 col-md-6">
                <button class="btn btn-secondary w-100">Add Favorites</button>
            </div>
        </div>


        <h4 class="mb-3">Comments</h4>
        <div id="comments">
            <div class="comment-card">
                <strong>Alice:</strong> Great food and friendly staff!
            </div>
            <div class="comment-card">
                <strong>Bob:</strong> Affordable prices and quick service.
            </div>
            <div class="comment-card">
                <strong>Charlie:</strong> Nice atmosphere, but sometimes crowded.
            </div>
        </div>
    </main>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
