<!DOCTYPE html>
<html>
<head>
    <?php
    $server = "localhost";
    $username = "php";
    $password = "1.1.";
    $database = "Users";
    $radio = htmlspecialchars($_POST['radio']);

    $conn = mysqli_connect($server, $username, $password, $database);
    if (!$conn) {
        die("Connection failed: {mysqli_connect_error()}");
      }
      $sql = "SELECT num_items, product_name FROM Products WHERE product_name='{$radio}';";
      $result = mysqli_query($conn, $sql);
      ?>
</head>

<body>
    You selected: <?=$radio?>.<br/>
    <?php
        foreach($result as $row) // There should only be one row returned!
        { 
            echo "There are {$row['num_items']} {$row['product_name']}.";
        } 
    mysqli_close($conn);
    ?>
</body>
</html>
