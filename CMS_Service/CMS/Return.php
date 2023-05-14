<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Return</title>
</head>

<body>
    <div class="title">
        <h2>
            Return
        </h2>
    </div>
    <div class="main">
        <h3>
            김준태
        </h3>
        <span>
            시작시간: <span>오전 10:00</span><br>
        </span>
        <span>
            종료시간: <span>오후 13:00</span><br>
        </span>
        <br>
        
        <form action=".index.php" method="post">
            <label for="location"><h3>주차위치</h3></label>
            <input type="text" name="location">
            <input type="submit" value="사용종료" />
        </form>
    </div>
    <nav>
        <?php include '../src/lib/menu_bar.php' ?>
    </nav>
</body>

</html>