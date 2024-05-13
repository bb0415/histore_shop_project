<?php
require __DIR__ . '/db.php';

$id = $_POST["decide_id"];
$pw = $_POST["upw"];
$pw2 = $_POST["upw2"];

try{

    if($pw == $pw2){

        $pdo = new PDO($dsn, $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


        $stmt = $pdo->prepare("INSERT INTO user(id, pw) VALUES(:id, :pw)");
        $stmt->bindParam(':id', $id, PDO::PARAM_STR);
        $stmt->bindParam(':pw', $pw, PDO::PARAM_STR);

        $stmt->execute();

        echo "<script>alert('회원가입이 완료되었습니다!');</script>";
        echo "<script>location.href='/';</script>";  
    }
    else {
        echo "<script>alert('비밀번호가 일치하지 않습니다.');</script>";
        echo "<script>location.href='/';</script>";  
    }


} catch (PDOException $e) {

    echo 'Connect failed : ' . $e->getMessage() . '';
    
}

$pdo= null;


?>