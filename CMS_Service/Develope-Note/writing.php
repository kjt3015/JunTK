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
            <h4>
                Main page
            </h4>
            <form action="insert.php" method="POST">
                <p><input type="text" name="title" placeholder="title"></p>
                <p><textarea name="description" placeholder="description"></textarea></p>
                <input type="submit" value="submit">
                <button onclick="location.href='developerNote.php'" type="button">Back</button>
            </form>
        </div>
    </div>
    <hr>
</body>

</html>