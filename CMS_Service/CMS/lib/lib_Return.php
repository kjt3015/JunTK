<?php
include '../../src/lib/sql_con.php';

$sql = "
    UPDATE carList
        SET carStatus='예약가능', carLocation='{$_POST['carLocation']}' WHERE id='{$_POST['id']}';
    ";
?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CMS</title>
</head>
    <style>
        .main{
            text-align: center;
            margin: 80vw 20vw;
        }
    </style>
<body>
    <div class="main">
        <?php
        if( $conn->query($sql) === TRUE ) {
            echo '성공했습니다.<br>';
            echo '<a href="/CMS/index.php">돌아가기</a>';
        }else{
            echo '저장하는 과정에서 문제가 생겼습니다. 관리자에 문의하세요'.$conn->error;
        }
        ?>
    </div>
</body>
</html>