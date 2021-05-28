<?php
    $username = $_POST['user'];
    $password = $_POST['pass'];

    $severName = "localhost";
    $userSever = "root";
    $passServer = "";
    $dbName = "demo";

    $con = mysqli_connect($severName, $userSever, $passServer, $dbName);

    if(mysqli_connect_errno()){
        echo "Ket noi that bai";
    }
    else{
        $kq = mysqli_query($con,"SELECT * FROM taiKhoan WHERE UserName = '$username' AND Password = '$password'");
        if(mysqli_num_rows($kq)>0){
            echo "Dang nhap thanh cong";
        }
        else{
            echo "Dang nhap that bai";
        }
    }
?>