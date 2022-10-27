<!DOCTYPE html>
<html>
<body>
    <?php
    $server = "localhost";
    $username = "php";
    $password = "1.1.";
    $database = "Users";
    $radio = htmlspecialchars($_POST['radio']);

    $conn = mysqli_connect($server, $username, $password, $database);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
      }

    $sql = "SELECT num_items FROM Products WHERE product_name=$radio;";
    $result = mysqli_query($conn, $sql);
    $row = mysql_fetch_row($result);
    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
            echo "There are {$row['num_items']} $radio in stock."; 
        }
    }
    else{
        echo "Out of luck";
    }
    mysqli_close($conn);
    ?>
</body>
</html>