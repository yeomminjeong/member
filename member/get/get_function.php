<?php 
    header('Content-Type: application/json');
    header('Access-Controle-Allow-Origin:*');
    

    $sql = 'SELECT * FROM member';
    $result = mysqli_query($conn,$sql);

    // while($row = mysqli_fetch_assoc($result)){
    //     echo json_encode($row);
    // }

    if(isset($_GET['id'])){ //설정 되어 있는지 확인
        $sql = "SELECT * FROM member WHERE id = {$_GET['id']}";
        $result = mysqli_query($conn,$sql);
        while($id = mysqli_fetch_assoc($result)){
            echo json_encode($id);
        }
    } else {
        while($row = mysqli_fetch_assoc($result)){
            echo json_encode($row);
        }
        exit;
    }
?>
