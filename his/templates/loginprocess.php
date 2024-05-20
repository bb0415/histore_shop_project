<?php
session_start();
require __DIR__ . '/db.php';


$id = $_POST["id"];
$pw = $_POST["pw"];

try{

        $pdo = new PDO($dsn, $username, $password);
    
        $stmt = $pdo->prepare("SELECT * FROM user WHERE ID = :id");
        $stmt->bindParam(':id', $id, PDO::PARAM_STR);
        $stmt->execute();

        $row = $stmt -> fetch(PDO::FETCH_ASSOC);
        
        if($row["ID"] == $id && $row["PW"] == $pw){

            $_SESSION['UID'] = $id;
            echo "<script>location.href='/';</script>"; 
        }else{
            echo "<script>alert('아이디와 비밀번호가 일치하지 않습니다.');</script>";
            echo "<script>location.href='/login.php';</script>";  
        }


} catch (PDOException $e) {

    echo 'Connect failed : ' . $e->getMessage() . '';
    
}

$pdo= null;



?>