<?php
    $connection = mysqli_connect("localhost","dis2","dis2miniproj","dis2") or die("Error " . mysqli_error($connection));

    //fetch table rows from mysql db
    $nametoput = $_GET['name'];

    $sql = "UPDATE state SET status=1  WHERE name='$nametoput'";
    $result = mysqli_query($connection, $sql) or die("Error in Selecting " . mysqli_error($connection));

    mysqli_close($connection);
?>
