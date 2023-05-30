<?php
include '../src/lib/sql_con.php';

$sql = "SELECT carLocation FROM carList WHERE id='{$_GET['id']}'";

$result = $conn->query($sql);
$myarray = array();

$row = mysqli_fetch_assoc($result)
?>

<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservation_Template</title>
</head>

<body>
    <?php include '../src/lib/header.php' ?>
    <div id="main" style="width: 90%; top: 30%;">
        <h3>주차위치</h3>
        <div><span><?= $row['carLocation']; ?></span></div>

        <form action="./lib/lib_Reservation.php" method="POST">
            <label for="time"><h3>예약</h3></label>
            <input type="hidden" name="id" value="<?= $_GET['id'] ?>">
            예약자: <input type="text" name="userName" placeholder="ex.홍길동"><br>
            예약시간: <input type="time" name="startTime"> ~ <input type="time" name="endTime"><br>
            <input type="submit" value="submit">
        </form>
    </div>
</body>

</html>