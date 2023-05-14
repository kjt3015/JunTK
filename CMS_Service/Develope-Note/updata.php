<?php
    $conn = mysqli_connect("localhost", "root", "", "opentutorials");
    mysqli_set_charset($conn, "utf8");

    $sql = "SELECT * FROM topic";

    if( isset($_GET['id'])){
        $sql = "SELECT * FROM topic WHERE id={$_GET['id']}";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result);
        
        $article['title'] = $row['title'];
        $article['description'] = $row['description'];
    }

    $result = mysqli_query($conn, $sql);
    $list = '';

    while( $row = mysqli_fetch_array($result)){
        $list = $list."<li><a href=\"index.php?id={$row['id']}\">{$row['title']}</a></li>";
    }
?>

<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Updata</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="title">
        <h2>
            Updata
        </h2>
    </div>
    <div class="main">
        <div>
            <h4>
                Updata
            </h4>
            <form action="modify.php" method="POST">
                <p><input type="hidden" name="id" placeholder="id" value="<?= $_GET['id'] ?>"></p>
                <p><input type="text" name="title" placeholder="title" value="<?= $article['title'] ?>"></p>
                <p><textarea name="description" placeholder="description"><?= $article['description'] ?></textarea></p>
                <input type="submit" value="submit">
                <button onclick="location.href='developerNote.php'" type="button">Back</button>
            </form>
        </div>
    </div>
    <hr>
</body>

</html>