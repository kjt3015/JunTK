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
            Write Page
        </h2>
    </div>
    <div class="main">
        <div>
            <form action="./lib/insert.php" method="POST">
                <p><input type="text" name="title" placeholder="title"></p>
                <p><input type="text" name="writer" placeholder="writer"></p>
                <p><textarea name="description" placeholder="description"></textarea></p>
                <input type="submit" value="submit">
                <button onclick="location.href='DEV_Note_index.php'" type="button">Back</button>
            </form>
        </div>
    </div>
    <nav>
        <?php include '../src/lib/menu_bar.php' ?>
    </nav>
</body>

</html>