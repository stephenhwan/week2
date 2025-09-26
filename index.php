<?php
// Check if val1 is set (form has been submitted)
if (!isset($_POST['val1'])) {
    include 'templates/form.html.php';
} else {
    // Get values from POST
    $val1 = $_POST['val1'];
    $val2 = $_POST['val2'];
    $calc = $_POST['calc'];
    
    // Check if both values are numeric (Part 3 - Error handling)
    if (is_numeric($val1) && is_numeric($val2)) {
        // Switch statement for calculations
        switch ($calc) {
            case 'add':
                $result = $val1 + $val2;
                break;
            case 'sub':
                $result = $val1 - $val2;
                break;
            case 'mul':  // Part 2 - Multiplication
                $result = $val1 * $val2;
                break;
            case 'div':  // Part 2 - Division
                if ($val2 != 0) {
                    $result = $val1 / $val2;
                } else {
                    $error = "Error: Cannot divide by zero!";
                    include 'templates/error.html.php';
                    exit;
                }
                break;
            default:
                $error = "Error: Invalid operation selected!";
                include 'templates/error.html.php';
                exit;
        }
        
        // Create output message
        $output = "The result is: " . $result;
        include 'templates/result.html.php';
    } else {
        // Part 3 - Error handling for non-numeric values
        $error = "Error: Please enter valid numbers only!";
        include 'templates/error.html.php';
    }
}
?>