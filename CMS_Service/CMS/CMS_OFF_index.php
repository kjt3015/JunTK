<?php
//서버와 연결
include '../src/lib/sql_con.php';

//carList 모든 항목 쿼리문작성, 결과값 수신
$sql = "SELECT * FROM carList WHERE carStatus='예약가능'";
$result = $conn->query($sql);

//array선언, result변수에 결과값 array형식으로 모두 저장
$myarray = array();

while ( $row = mysqli_fetch_assoc($result)){
    $myarray[]=$row;
}
// my_data변수에 json형태로 인코딩하여 myarray를 저장
$my_data = json_encode($myarray, JSON_PRETTY_PRINT|JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);

$main_page = '
<a class="id" href="./Reservation.php?id=' . $myarray[0]['id'] . '">
    <img class="carImg" src="' . $myarray[0]['carImg'] . '" alt="img">
</a>

<div class="car_info">
    <div class="carName">
        ' . $myarray[0]['carName'] . '
    </div>
    <div class="carNumber">
        ' . $myarray[0]['carNumber'] . '
    </div>
</div>
';

$empty_page = '
<img class="carImg" src="./img/Icon/empty.png" alt="img" style="height: 150px; width: 150px; padding: 10px 30%;">

<div class="car_info">
    <div class="carName">Empty</div>
    <div class="carNumber">예약가능 차량이 없습니다</div>
</div>
';
?>

<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CMS_OFF</title>
    <script>
        alert("원하는 차량 이미지를 터치해주세요.");
        // 반복의 위한 i변수, index 0은 초기화면에서 표시하기 때문에 1부터 시작함
        var i = 1;
        // php에서 json으로 변화시킨 sql query 결과물을 my_data에 입력
        var my_data = <?php echo $my_data; ?>;

        // console.log(my_data);
        // console.log(my_data[0]["carName"]);

        // 버튼을 누르면 click Event로 showNext()함수를 지정, 각항목을 순서대로 출력시킴
        function showNext() {
            //carImg의 내용을 변환
            console.log(my_data[i]["id"]);
            let carId_class = document.getElementsByClassName("id")[0];
            carId_class.href = "./Reservation.php?id=" + my_data[i]["id"];
            
            let carImg_class = document.getElementsByClassName("carImg")[0];
            carImg_class.src = my_data[i]["carImg"];

            let carName_class = document.getElementsByClassName("carName")[0];
            carName_class.innerText = my_data[i]["carName"];

            let carNumber_class = document.getElementsByClassName("carNumber")[0];
            carNumber_class.innerText = my_data[i]["carNumber"];

            // 다음 데이터를 출력하기 위해서 i를 증가
            i++;

            // 데이터의 끝이 오면 0으로 초기화 하여 무한반복
            if (i >= my_data.length) i = 0;
        }
    </script>
</head>

<body>
    <?php include '../src/lib/header.php' ?>
    <div id="main">
        <div class="color" style="background-color: #BEDBD2;"></div>
            <?php
            if(mysqli_num_rows($result) == 0){
                echo $empty_page;
            }else{
                echo $main_page;
            }
            ?>
    </div>
</body>

</html>