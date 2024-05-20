
<?php


    
    if(!$stmt -> fetch(PDO::FETCH_ASSOC)){
        echo "<span style='color:blue;'>{{uid}}</span> 는 사용 가능한 아이디입니다.";
       '<p><input type= button value="이 ID 사용" onclick="opener.parent.decide(); window.close();"></p>';
        
    } 
    else {
        echo "<span style='color:red;'>{{uid}}</span> 는 중복된 아이디입니다.";
        '<p><input type=button value="다른 ID 사용" onclick="opener.parent.change(); window.close()"></p>';
    }


?>