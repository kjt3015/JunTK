<?php
include '../src/lib/sql_con.php';

$article = array(
    'title' => 'Welcome',
    'description' => 'Hello, web'
);

$update_link = '';
$delete_link = '';

$sql = "SELECT * FROM devNote";
$result = $conn->query($sql);

while( $row = mysqli_fetch_assoc($result)){
    $list = $list."<li><a href=\"DEV_Note_index.php?id={$row['id']}\">[{$row['writer']}] {$row['title']}</a></li>";
}

if( isset($_GET['id'])){
    $sql = "SELECT * FROM devNote WHERE id={$_GET['id']}";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
    
    $article['title'] = $row['title'];
    $article['description'] = $row['description'];

    $update_link = '<button onclick="location.href=\'updata.php?id='.$_GET['id'].'\'" type=button>Updata</button>';
    $delete_link = '
    <form style="display: inline;" action="./lib/delete.php" method="POST">
        <input type="hidden" name="id" value="'.$_GET['id'].'">
        <input type="submit" value="Delete">
        <input type="text" name="pw">
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

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</head>

<body>
    <main>
        <h2>DeveloperNote</h2>
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
    </main>
</body>

</html>