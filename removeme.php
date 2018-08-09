<?php
    //open connection to mysql db
    $connection = mysqli_connect("localhost","dis2","dis2miniproj","dis2") or die("Error " . mysqli_error($connection));

    //fetch table rows from mysql db
$nametoremove = $_GET['name'];
echo $nametoremove;
    $sql = "DELETE FROM status WHERE name='$nametoremove'";
    $result = mysqli_query($connection, $sql) or die("Error in Selecting " . mysqli_error($connection));

    //close the db connection
    mysqli_close($connection);
?>
