<?php
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");
    header("Access-Control-Allow-Methods: POST");
    header("Access-Control-Max-Age: 3600");
    header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

    include_once '../config/db.php';
    include_once '../user.php';

    $database = new Database();
    $db = $database->getConnection();

    $item = new user($db);

    $data = json_decode(file_get_contents("php://input"));
    $item->username = $data->username;
    $item->password = $data->password;
    

    // $userArr = $items->Login()->fetch_array(MYSQLI_ASSOC); 
    // if($userArr['nama'] != null){
    //     echo json_encode($userArr);
    // }
   
    if($item->login()){
        echo json_encode("User berhasil Login.");
    } else{
        echo json_encode("User gagal login.");
    }
?>