<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main Page</title>
    <style>
        img {
            width: 100px;
            height: 100%;
        }
        #btn {
            background-color: #f8f8f8;
            color: #888;
            border: 1px solid #e8e8e8;
            font-size: 1.125em;
            letter-spacing: 0px;
            padding: 10px 60px;
            cursor: pointer;
            display: inline-block;
            margin: 15px 10px;
        }

        #btn:hover {
            background: rgba(96, 96, 0, 0.5);
            color: white;
            transition: all 0.5s;
        }
        #main{
            position: relative;
            top: 60vw;
            text-align:center;
            /* overflow: hidden; */
            /* border: 1px solid black; */
        }
    </style>
</head>

<body>
    <?php include '../src/lib/header.php' ?>
    <div id="main">
        <div>
            <button id="btn" onclick="location.href='./CMS_OFF_index.php'" type="button">예 약</button>
        </div>
        <br>
        <div>
            <button id="btn" onclick="location.href='./CMS_ON_index.php'" type="button">반 납</button>
        </div>        
    </div>
</body>

</html>