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
        die("Connection failed: " {mysqli_connect_error()});
      }
      $sql = "SELECT num_items FROM Products WHERE product_name={$radio};";
      $result = mysqli_query($conn, $sql);
      $row = mysql_fetch_row($result);
      <?>
</head>

<body>
    You selected: <?=$radio?>.<br/>
    <?php
        foreach($result as $row) // There should only be one row returned! 
        { 
            echo "{$row['course_name']} has {$row['num_students']} students."; 
        } 
    }
    mysqli_close($conn);
    ?>
    <p> Test <p>
</body>
</html>

<!DOCTYPE html> 

<html> 

    <head> 

        <title>SQL test</title> 

        <?php 

            // Retrieve submitted information 

            $course_number = htmlspecialchars($_GET["courses"]);  

            $server = "localhost"; 

            $username = "php"; 

            $password = "php_password"; 

            $database = "testdb"; 

            $conn = mysqli_connect($server, $username, $password, $database); 

             

            // Check for successful connection 

            if (!$conn) { 

              die("Connection failed: {mysqli_connect_error()}"); 

            } 

            $sql = "select course_name, num_students from courses where course_number='{$course_number}';"; 

            $result = mysqli_query($conn, $sql); 

        ?> 

    </head> 

    <body> 

        You selected course <?= $course_number ?>.<br/> 

        <?php 

            foreach($result as $row) // There should only be one row returned! 

            { 

                echo "{$row['course_name']} has {$row['num_students']} students."; 

            } 

            // Don't forget to close the connection! 

            mysqli_close($conn); 

        ?> 

    </body> 

</html> 