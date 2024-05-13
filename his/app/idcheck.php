
<?php
require __DIR__ . '/db.php';

$id = $_GET["userid"];

try{
    

    $pdo = new PDO($dsn, $username, $password);
    
    $stmt = $pdo->prepare("SELECT * FROM user WHERE ID = :id");
    $stmt->bindParam(':id', $id, PDO::PARAM_STR);
    $stmt->execute();

    
    if(!$stmt -> fetch(PDO::FETCH_ASSOC)){
        echo "<span style='color:blue;'>$id</span> 는 사용 가능한 아이디입니다.";
       ?><p><input type= button value="이 ID 사용" onclick="opener.parent.decide(); window.close();"></p>
        
    <?php
    } else {
        echo "<span style='color:red;'>$id</span> 는 중복된 아이디입니다.";
        ?><p><input type=button value="다른 ID 사용" onclick="opener.parent.change(); window.close()"></p>
    <?php
    }

}
catch (PDOException $e) {

    echo 'Connect failed : ' . $e->getMessage() . '';
    
}

$pdo= null;

?>