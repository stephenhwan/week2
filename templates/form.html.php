<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic Calculator</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Basic Calculator</h1>
        <form action="" method="post" class="calc-form">
            <div class="input-group">
                <label for="val1">First Number:</label>
                <input type="text" name="val1" id="val1" required>
            </div>
            
            <div class="input-group">
                <label for="val2">Second Number:</label>
                <input type="text" name="val2" id="val2" required>
            </div>
            
            <div class="operation-group">
                <p>Select Operation:</p>
                <div class="radio-group">
                    <label>
                        <input type="radio" name="calc" value="add" checked>
                        Addition (+)
                    </label>
                    <label>
                        <input type="radio" name="calc" value="sub">
                        Subtraction (-)
                    </label>
                    <label>
                        <input type="radio" name="calc" value="mul">
                        Multiplication (×)
                    </label>
                    <label>
                        <input type="radio" name="calc" value="div">
                        Division (÷)
                    </label>
                </div>
            </div>
            
            <input type="submit" value="Calculate" class="submit-btn">
        </form>
    </div>
</body>
</html>