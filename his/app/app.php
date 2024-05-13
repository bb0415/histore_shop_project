<?php
  session_start();

$routes = [
    'login',
    'app',
    'db',
    "signup",
    "idcheck",
    "signupprocess",
    "loginprocess",
    "logout",
    

];

// Keeping things fast for a small number of routes.
$regex = sprintf('/\/(%s)\.php/', implode('|', $routes));
if (preg_match($regex, $_SERVER['REQUEST_URI'], $matches)) {
    $file_path = __DIR__ . $matches[0];
    if (file_exists($file_path)) {
        require($file_path);
        return;
    }
}

?>

<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>history_shop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <?PHP require __DIR__ . '/style.php'; ?>
    
</head>

<body style="background-color: #AEEFFA;">

  <?php require __DIR__ . '/navbar.php'; ?>

    <h1 class="t" style="text-align: center; font-size: 64px; color: ivory;">역사 지식상점</h1>

</body>

<body>
    <?php

      echo $_SESSION['UID'];

    ?>

    <button id="bt1" class="learn-more" onClick="location.href='/'"><h1 style="font-size: 22px;">지식 상점 생성<h1></button>
    <button id="bt2" class="learn-more" onClick="location.href='/'"><h1 style="font-size: 22px;">지식 상점 방문<h1</button>

</body>
</html>