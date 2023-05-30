<?php
$conn = mysqli_connect("conank.iptime.org", "cmsAdmin", "simulab_vc", "cmsDB", "53306");

$stmt = mysqli_prepare($conn,"
    INSERT INTO devNote
        (writer, title, description)
    VALUES(?, ?, ?)");

$param1 = $_POST['writer'];
$param2 = $_POST['title'];
$param3 = nl2br($_POST['description']);

mysqli_stmt_bind_param($stmt, 'sss', $param1, $param2, $param3);

mysqli_stmt_execute($stmt);
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
        if(mysqli_stmt_error($stmt)){
            echo "Error: ".mysqli_stmt_error($stmt);
        }else{
            echo '성공했습니다. <a href="../DEV_Note_index.php">돌아가기</a>';
        }
        ?>
    </div>
</body>
</html>