<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mypage</title>
</head>

<body>
    <?php include '../src/lib/header.php' ?>
    <div id="main" style="text-align: center;">
        <h3>사명</h3>
        <p>네오디에스</p>

        <h3>이름/직급</h3>
        <p>홍길동/팀장</p>

        <h3>전화번호</h3>
        <p>010-0000-0000</p>

        <div><a href="#">회원정보 수정</a></div>

        <div><a href="../index.html">로그아웃</a></div>

        <div><a href="#">회원탈퇴</a></div>
        <style>
            #main div{
                margin-bottom:10px;
            }
        </style>
    </div>
</body>

</html>