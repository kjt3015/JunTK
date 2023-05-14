<?php
//서버와 연결
include '../src/lib/sql_con.php';

//newCar의 모든 항목 쿼리문작성, 결과값 수신
$sql = "SELECT * FROM newCar";
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

<html>
    <head>
        <title>MySQL데이터</title>

        <script>
            var i = 0;
            var my_data = <?php echo $my_data; ?>;
            // console.log(my_data);
            // console.log(my_data[0]["carName"]);
            function showNext(){
                let imgLink_class = document.getElementsByClassName("imgLink")[0];
                imgLink_class.src=my_data[i]["imgLink"];
                
                let carName_class = document.getElementsByClassName("carName")[0];
                carName_class.innerText=my_data[i]["carName"];
                
                let carNumber_class = document.getElementsByClassName("carNumber")[0];
                carNumber_class.innerText=my_data[i]["carNumber"];
                
                i ++;
                if(i == my_data.length)i = 0;
            }
        </script>
    </head>
    
    <body>
        <div>
            <img class="imgLink" src="#">
            <p class="carName" value="Empty">This is carName</p>
            <p class="carNumber" value="Empty"></p>            
        </div>
        
        <button onclick="showNext()">다음</button>
    </body>
</html>