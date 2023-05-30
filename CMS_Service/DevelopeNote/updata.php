<?php
include '../src/lib/sql_con.php';

if( isset($_GET['id'])){
    $sql = "SELECT * FROM devNote WHERE id={$_GET['id']}";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);

    $article['title'] = $row['title'];
    $article['writer'] = $row['writer'];
    $article['description'] = $row['description'];
}
?>

<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CMS_Template</title>
</head>

<body>
    <div class="title">
        <h2>
            Updata
        </h2>
    </div>
    <div class="main">
        <div>
            <form action="./lib/modify.php" method="POST">
                <p><input type="hidden" name="id" placeholder="id" value="<?= $_GET['id'] ?>"></p>
                <p><input type="text" name="title" placeholder="title" value="<?= $article['title'] ?>"></p>
                <p><input type="text" name="writer" placeholder="writer" value="<?= $article['writer'] ?>"></p>
                <p><textarea name="description" placeholder="description"><?= str_replace('<br />', '', $article['description']) ?></textarea></p>
                <input type="submit" value="submit">
                <button onclick="location.href='./DEV_Note_index.php'" type="button">Back</button>
            </form>
        </div>
    </div>
    <nav>
        <?php include '../src/lib/menu_bar.php' ?>
    </nav>
</body>

</html>