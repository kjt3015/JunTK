<?php
include '../src/lib/sql_con.php';

// $sql = "SELECT * FROM carLog WHERE carList_id='{$_GET['id']}'";
$sql = "select * from carLog where carList_id = '{$_GET['id']}' order by id desc limit 1";
$result = $conn->query($sql);

$myarray = array();

while($row = mysqli_fetch_assoc($result)){
    $myarray[]=$row;
}
// echo print_r($myarray);
?>

<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Return</title>
</head>

<body>
    <?php include '../src/lib/header.php' ?>
    <div id="main" style="width: 90%; top: 30%;">
        <h3>운전자</h3>
        <p><?php echo $myarray[0]['userName']; ?></p>
        <h3>주행시간</h3>
        <p><?php echo $myarray[0]['startTime']." ~ ".$myarray[0]['endTime']; ?></p>

        <form action="./lib/lib_Return.php" method="POST">
            <label for="insert_location"><h3>주차위치</h3></label>
            <input type="hidden" name="id" value="<?= $_GET['id'] ?>">
            <input type="text" name="carLocation">
            <input type="submit" value="사용종료" />
        </form>
    </div>
</body>

</html>