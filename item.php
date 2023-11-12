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
    <?php

    function search($array, $key, $value)
    {
        $results = array();

        if (is_array($array)) {
            if (isset($array[$key]) && $array[$key] == $value) {
                $results[] = $array;
            }

            foreach ($array as $subarray) {
                $results = array_merge($results, search($subarray, $key, $value));
                //머지는 병합입니다~
            }
        }

        return $results;
    }

    $json = file_get_contents('item.json');
    $data = json_decode($json, true);

    $results = search($data['items'], 'id', $id);

    foreach ($results as $result) {
        echo "종류와 가격: " . $result['id'] . " (" . $result['cost'] . ")\n";
    }

    ?>
</body>
</html>
