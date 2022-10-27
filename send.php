<!DOCTYPE html>
<html>
<body>
    <p>
    <?php
    $server = "localhost";
    $username = "php";
    $password = "1.1.";
    $database = "Users";
    $radio = htmlspecialchars($_POST['radio']);

    $conn = mysqli_connect($server, $username, $password, $database);
 
    $sql = "SELECT num_items FROM Products WHERE product_name="{$radio}"";";
    $result = mysqli_query($conn, $sql);
    $row = mysql_fetch_row($result);
    foreach($result as $row) // There should only be one row returned 
    { 
        echo "There are {$row['num_items']} $radio in stock."; 
    }
    echo "Just A test"; 
    mysqli_close($conn);
    ?>
    <p>
</body>
</html>