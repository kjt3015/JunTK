<?php
include '../../src/lib/sql_con.php';

$filtered = array(
    'id' => mysqli_real_escape_string($conn, $_POST['id'])
);

$sql = "
    DELETE
        FROM devNote
        WHERE id='{$filtered["id"]}'        
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
$pw = $_POST['pw'];
if ($pw === "0831") {
    if ($result = $conn->query($sql) === TRUE) {
        echo '성공했습니다. <a href="../DEV_Note_index.php">돌아가기</a>';
    } else {
        echo '저장하는 과정에서 문제가 생겼습니다. 관리자에 문의하세요' . $conn->error . '<a href="../DEV_Note_index.php">돌아가기</a>';
    }
} else {
    echo '패스워드가 틀렸습니다. <a href="../DEV_Note_index.php"><br>돌아가기</a>';
}
        ?>
    </div>
</body>
</html>