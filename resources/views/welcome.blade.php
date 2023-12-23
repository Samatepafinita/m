<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRACTICE </title>
</head>
<body>
    <h1>PRACTICE SOLUTION</h1>
    <pre>
    <?php
    for ($i = 10; $i <= 20; $i++) {
        if ($i % 3 === 0 && $i % 5 === 0) {
            echo "rayroy\n"; // If the number is a multiple of both 3 and 5
        } elseif ($i % 3 === 0) {
            echo "ray\n"; // If the number is a multiple of 3
        } elseif ($i % 5 === 0) {
            echo "roy\n"; // If the number is a multiple of 5
        } else {
            echo $i . "\n"; // If the number is not a multiple of 3 or 5
        }
    }
    ?>
    </pre>
</body>
</html>
