<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
    <?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

     $host = 'localhost';
     $user = 'root';
     $pass = 'ilya0621';
     $dbname = 'demo';


    $connection = new mysqli($host, $user, $pass, $dbname);
    $sql = "SELECT * FROM user_data "; 
    $result = $connection->query($sql);

    /* извлечение ассоциативного массива */
    while ($row = $result->fetch_assoc()) {
        echo "User: " . $row["name"]. "; Email: " . $row["emailid"]. ";" ."<br>".
            "--------------------------------------------------------------". "<br>";
}
    $connection->close();

    ?>

</body>
</html>
