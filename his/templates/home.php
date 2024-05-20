
<?php session_start(); ?>

<html lang="ko">
<head>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Jua&family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>history_shop</title>
    <script>
        
        function uplode() {
            <? if($_SESSION['UID']){ ?>
                location.href='/posting';
            <? } else{ ?>
                alert("로그인이 필요합니다.");
            <?}?>
                

        } 
        
    </script>
    
</head>

<body style="background-color: #AEEFFA;">


    <h1 class="t" style="text-align: center; font-size: 64px; color: ivory;">역사 지식상점</h1>

</body>

<body>
    <br><br><br><br><br><br>
<div class="container" style="text-align: center;">
    <button id="bt1" class="learn-more" onclick="uplode();"><h1 style="font-size: 22px;">지식 상품 생성<h1></button>
    <br><br><br>
    <button id="bt2" class="learn-more" onClick="location.href='/'"><h1 style="font-size: 22px;">지식 상점 방문<h1</button>
</div>
</body>
</html>