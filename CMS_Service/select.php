<?php
	$conn = mysqli_connect("localhost", "root", "", "opentutorials");
    mysqli_set_charset($conn, "utf8");
    
    echo "<h1>Single row</h1>";
    $sql = "SELECT * FROM topic WHERE id = 5";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);

    echo '<h2>'.$row['title'].'</h2>';
    echo $row['description'];
?>