<?php
    include '../src/lib/sql_con.php';

    $sql = "SELECT * FROM newCar";
    $result = mysqli_query($conn, $sql);
?>