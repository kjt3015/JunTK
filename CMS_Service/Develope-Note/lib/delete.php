<?php
	$conn = mysqli_connect("localhost", "root", "", "opentutorials");
    mysqli_set_charset($conn, "utf8");

    $filtered = array(
        'id' => mysqli_real_escape_string($conn, $_POST['id'])
    );

    $sql = "
        DELETE
            FROM topic
            WHERE id='{$filtered['id']}'         
    ";

    $result = mysqli_query($conn, $sql);
    if( $result === false) {
        echo '삭제하는 과정에서 문제가 생겼습니다. 관리자에 문의하세요';
        error_log(mysqli_error($conn));
    }else{
        echo '성공했습니다. <a href="developerNote.php">돌아가기</a>';
    }
?>