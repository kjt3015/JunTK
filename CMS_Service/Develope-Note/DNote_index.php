<?php
    $conn = mysqli_connect("localhost", "root", "", "opentutorials");
    mysqli_set_charset($conn, "utf8");

    $article = array(
        'title' => 'Welcome',
        'description' => 'Hello, web'
    );

    $update_link = '';
    $delete_link = '';

    $sql = "SELECT * FROM topic";
    $result = mysqli_query($conn, $sql);

    while( $row = mysqli_fetch_array($result)){
        $list = $list."<li><a href=\"developerNote.php?id={$row['id']}\">{$row['title']}</a></li>";
    }

    if( isset($_GET['id'])){
        $sql = "SELECT * FROM topic WHERE id={$_GET['id']}";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result);
        $article['title'] = $row['title'];
        $article['description'] = $row['description'];
        
        $update_link = '<button onclick="location.href=\'updata.php?id='.$_GET['id'].'\'" type=button>Updata</button>';
        $delete_link = '
        <form style="display: inline;" action="delete.php" method="POST">
            <input type="hidden" name="id" value="'.$_GET['id'].'">
            <input type="submit" value="Delete">
        </form>
        ';
    }
?>

<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CMS_Template</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="title">
        <h2>
            DeveloperNote
        </h2>
    </div>
    <div class="main">
        <div>
            <h4>Main page</h4>
            <ol><?= $list ?></ol>
            <button onclick="location.href='writing.php'" type="button">Write</button>
            <?= $update_link ?>
            <?= $delete_link ?>
        </div>
    </div>
    <hr>
    <h2><?= $article['title'] ?></h2>
    <?= $article['description'] ?>
    <?= include '../src/lib/menu.php'; ?>
</body>

</html>