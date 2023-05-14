<?php
    include './lib/sql_con.php';
?>

<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CMS_Template</title>
    <link rel="stylesheet" href="../src/css/style.css">
</head>

<body>
    <div class="title">
        <h2>
            Main
        </h2>
    </div>
    
    <div class="main">
        <h3>Main</h3>

        <?php 
        while( $row = mysqli_fetch_array($result)){
        ?>
        
        <div>
            <table>
                <tr>
                    <td colspan="2"><img src="<?php echo $row['imgLink']; ?>" alt="img"></td>
                </tr>
                <tr>
                    <td><div><?php echo $row['carNumber']; ?></div></td>
                    <td><div class="now">테스트중</div></td>
                </tr>
            </table>
        </div>
        
        <?php
        }
        ?>

    </div>
    <?= include '../src/lib/menu.php'; ?>
    </body>

</html>