<?php
	$conn = mysqli_connect("localhost", "root", "", "opentutorials");
    mysqli_set_charset($conn, "utf8");

    $sql = "
        INSERT INTO topic
            (title, description, created)
        VALUES(
            '{$_POST['title']}',
            '{$_POST['description']}',
            NOW()
        )
    ";
    $result = mysqli_query($conn, $sql);
    if( $result === false ) {
        echo '저장하는 과정에서 문제가 생겼습니다. 관리자에 문의하세요';
        error_log(mysqli_error($conn));
    }else{
        echo '성공했습니다. <a href="developerNote.php">돌아가기</a>';
    }
?>