<?php
	$conn = mysqli_connect("localhost", "root", "", "opentutorials");
    mysqli_set_charset($conn, "utf8");

    $result = mysqli_query($conn, $sql);

    settype($_POST['id'], 'integer');


    $filtered = array(
        'title' => mysqli_real_escape_string($conn, $_POST['title']),
        'description' => mysqli_real_escape_string($conn, $_POST['description']),
        'id' => mysqli_real_escape_string($conn, $_POST['id'])
    );

    $sql = "
        UPDATE topic
            SET
                title = '{$filtered['title']}',
                description = '{$filtered['description']}'
            
            WHERE
                id = '{$filtered['id']}'
        ";

    $result = mysqli_query($conn, $sql);

    if( $result === false) {
        echo '수정하는 과정에서 문제가 생겼습니다. 관리자에게 문의해주세요';
        error_log(mysqli_error($conn));
    }else{
        echo '성공했습니다. <a href="developerNote.php">돌아가기</a>';
    }
?>