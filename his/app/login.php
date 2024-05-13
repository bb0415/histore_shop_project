<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <style>
        @font-face {

src : url("./fonts/BMJUA_ttf.ttf"); 
font-family: "jua" 

}

h1.t {

font-family: "jua";
text-shadow: -2px 0 rgb(0, 0, 0), 0 2px black, 2px 0 black, 0 -2px black;
}
</style>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body style="background-color: #AEEFFA;">
<?php require __DIR__ . '/navbar.php'; ?>
    <h1 class="t" style="text-align: center; font-size: 64px; color: ivory;">로그인</h1> 
    
        <form action="loginprocess.php" method="post">
            ID : <input type = "text" name = "id" style="text-align: center;"> <br>
            PW : <input type = "password" name = "pw"style="text-align: center;"> <br>
            <input type = "submit" value = "로그인" style="text-align: center;">
            
        </form>
</body>
</html>