<!DOCTYPE html>
<html>
<head>
    <p> Test begin <p>
    <?php
    $server = "localhost";
    $username = "php";
    $password = "1.1.";
    $database = "Users";
    $radio = htmlspecialchars($_POST['radio']);

    $conn = mysqli_connect($server, $username, $password, $database);
    if (!$conn) {
        echo("Connection failed: " {mysqli_connect_error()});
      }
      $sql = "SELECT num_items FROM Products WHERE product_name={$radio};";
      $result = mysqli_query($conn, $sql);
      $row = mysql_fetch_row($result);
      ?>
</head>

<body>
    <p> You selected: <?=$radio?>.<br/> <p>
    <?php
        foreach($result as $row) // There should only be one row returned! 
        { 
            echo "{$row['course_name']} has {$row['num_students']} students."; 
        } 
    mysqli_close($conn);
    ?>
    <p> Test end <p>
</body>

</html>
