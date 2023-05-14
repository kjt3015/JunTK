<?php
//서버와 연결
include '../src/lib/sql_con.php';

//newCar의 모든 항목 쿼리문작성, 결과값 수신
$sql = "SELECT * FROM newCar WHERE carStatus='예약가능'";
$result = mysqli_query($conn, $sql);

//array선언, result변수에 결과값 array형식으로 모두 저장
$myarray = array();
while ( $row = mysqli_fetch_assoc($result)){
    $myarray[]=$row;
}
// echo print_r($myarray);
// echo $myarray[0]['carName'];

// my_data변수에 json형태로 인코딩하여 myarray를 저장
$my_data = json_encode($myarray, JSON_PRETTY_PRINT|JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
?>


<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CMS_OFF</title>
    <link rel="stylesheet" href="../src/css/style.css">
    <script>
        // 반복의 위한 i변수, index 0은 초기화면에서 표시하기 때문에 1부터 시작함
        var i = 1;
        // php에서 json으로 변화시킨 sql query 결과물을 my_data에 입력
        var my_data = <?php echo $my_data; ?>;
        
        // console.log(my_data);
        // console.log(my_data[0]["carName"]);
        
        // 버튼을 누르면 click Event로 showNext()함수를 지정, 각항목을 순서대로 출력시킴
        function showNext(){
            //imgLink의 내용을 변환
            let imgLink_class = document.getElementsByClassName("imgLink")[0];
            imgLink_class.src=my_data[i]["imgLink"];

            let carName_class = document.getElementsByClassName("carName")[0];
            carName_class.innerText=my_data[i]["carName"];

            let carNumber_class = document.getElementsByClassName("carNumber")[0];
            carNumber_class.innerText=my_data[i]["carNumber"];
            
            // 다음 데이터를 출력하기 위해서 i를 증가
            i ++;
            
            // 데이터의 끝이 오면 0으로 초기화 하여 무한반복
            if(i >= my_data.length)i = 0;
        }
    </script>
</head>

<body>
    <main>
        <div class="title">
            <span>
                <h1>
                    CMS
                </h1>
                <p>
                    Car Management System
                </p>
                <img src="../src/img/NeoDS/neods_a.jpg">
            </span>
        </div>
        
        <div class="main_content">
            <div class="section">
                <div class="status_box">
                    <div class="color" style="background-color: #BEDBD2;"></div>
                    <span class="status">
                        주행가능
                    </span>
                    
                    <a href="./Reservation.php?id=<?php echo $myarray[0]['id']; ?>">
                        <img class="imgLink" src="<?php echo $myarray[0]['imgLink']; ?>" alt="img">
                    </a>

                    <div class="car_info">
                        <div class="carName">
                            <?php echo $myarray[0]['carName']; ?>
                        </div>
                        <div class="carNumber">
                            <?php echo $myarray[0]['carNumber']; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <nav>
            <?php include '../src/lib/menu_bar.php' ?>
        </nav>
    </main>
    </body>

</html>