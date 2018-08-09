<?php
    //open connection to mysql db
    $connection = mysqli_connect("localhost","dis2","dis2miniproj","dis2") or die("Error " . mysqli_error($connection));

    //fetch table rows from mysql db
$nametoput = $_GET['name'];
$facetimeid = $_GET['facetime'];
$statetoput = $_GET['state'];
    $sql = "INSERT INTO status VALUES ('$nametoput', '$facetimeid', $statetoput)";
    $result = mysqli_query($connection, $sql) or die("Error in Selecting " . mysqli_error($connection));

    //close the db connection
    mysqli_close($connection);
?>
