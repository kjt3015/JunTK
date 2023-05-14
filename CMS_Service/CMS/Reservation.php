<?php
    include '../src/lib/sql_con.php';

    $sql = "SELECT * FROM newCar WHERE id={$_GET['id']}";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
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
    <div class="title">
        <h2>
            Reservation
        </h2>
    </div>
    <div class="main">
        <h3>주차위치</h3>
        <div>
            <span><?= $row['location']; ?></span> <span><?= $row[''] ?></span>
        </div>
        
        <form action="./lib/send.php" method="POST">
            <label for="time"><h3>예약</h3></label>
            <input type="hidden" name="id" value="<?= $_GET['id'] ?>">
            예약자: <input type="text" name="name" placeholder="ex.홍길동"><br>
            예약시간: <input type="time" name="start"> ~ <input type="time" name="end"><br>
            <input type="submit" value="submit">
        </form>
    </div>
    <nav>
        <?php include '../src/lib/menu_bar.php' ?>
    </nav>
</body>

</html>