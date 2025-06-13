<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>Add Comment</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <style>
        body {
            background-color: #f0f0f0;
        }

        .comment-container {
            max-width: 600px;
            margin: 40px auto;
            background-color: #ffffff;
            padding: 30px;
            border-radius: 10px;
            border: 1px solid #cccccc;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.05);
        }

        header {
            padding: 1rem;
        }
    </style>
</head>

<body>
    <header>
        <button class="btn btn-outline-secondary btn-sm ms-3" onclick="window.history.back();">← Back</button>
    </header>

    <main>
        <div class="comment-container">
            <h2 class="text-center">Add Comment</h2>
            <p class="text-center mb-4">Please fill out the form below to add a comment.</p>

            <form action="/final/controller/commentAddController.php" method="post">
                <div class="mb-3">
                    <label for="comment" class="form-label">Comment</label>
                    <textarea id="comment" name="comment" class="form-control" rows="4" placeholder="Write your comment here..." required></textarea>
                </div>
                <div class="d-grid">
                    <input type="submit" value="Add Comment" class="btn btn-secondary" />
                </div>
            </form>
        </div>
    </main>

</body>

</html>
