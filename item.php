<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Item Page</title>
</head>
<body>
    <h1>Item</h1>

    <?php
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        echo "<h3>ID: $id</h3>";
    } else {
        echo "<p>Error: Item ID not specified</p>";
    }
    ?>
</body>
</html>
