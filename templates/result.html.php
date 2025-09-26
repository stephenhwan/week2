<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator Result</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <div class="result-box">
            <h1>Calculation Result</h1>
            <p class="result"><?php echo $output; ?></p>
            <a href="index.php" class="back-btn">Calculate Again</a>
        </div>
    </div>
</body>
</html>