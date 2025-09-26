<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator Error</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <div class="error-box">
            <h1>Oops! Something went wrong</h1>
            <p class="error-message"><?php echo $error; ?></p>
            <a href="index.php" class="back-btn">Try Again</a>
        </div>
    </div>
</body>
</html>