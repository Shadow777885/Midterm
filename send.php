<!DOCTYPE html>
<html>
<body>
    <p>
    <?php
    $server = "localhost";
    $username = "php";
    $password = "1.1.";
    $database = "Users";
    $conn = mysqli_connect($server, $username, $password, $database);
    $radio = htmlspecialchars($_POST['radio']);
 
    $sql = "SELECT product_id FROM Products WHERE product_id={$radio};";
    $result = mysqli_query($conn, $sql);
    $row = mysql_fetch_row($result);
    foreach($result as $row) // There should only be one row returned! 
    { 
        echo "There are {$row['num_items']} {$row['product_name']} in stock."; 
    }
    echo "Just A test"; 
    mysqli_close($conn);
    ?>
    <p>
</body>
</html>