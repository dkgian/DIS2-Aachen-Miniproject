<?php
    //open connection to mysql db
    $connection = mysqli_connect("localhost","dis2","dis2miniproj","dis2") or die("Error " . mysqli_error($connection));

    //fetch table rows from mysql db
    $sql = "select users.fullname, users.facetiimeid, users.pictureurl,  users.name, state.status from users INNER JOIN state on users.name=state.name";
    $result = mysqli_query($connection, $sql) or die("Error in Selecting " . mysqli_error($connection));

    //create an array
    $emparray = array();
    while($row =mysqli_fetch_assoc($result))
    {
        $emparray[] = $row;
    }
    echo json_encode($emparray);

    //close the db connection
    mysqli_close($connection);
?>
