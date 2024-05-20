
<html lang="ko">
<head>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Jua&family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <?PHP require __DIR__ . '/style.php'; ?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body style="background-color: #AEEFFA;">
<?php require __DIR__ . '/navbar.php'; ?>
    <h1 class="t" style="text-align: center; font-size: 64px; color: ivory;">로그인</h1>

    <div class="container"> 
    <div class ="login-form">   
    <form action="loginprocess.php" method="post">

        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInput1" placeholder="ID" maxlength = "32" name = "id" required>
            <label for="floatingInput1">ID</label>
        </div>

        <div class="form-floating">
            <input type="password" class="form-control" id="floatingPassword" placeholder="Password" maxlength = "32" name = "pw" required>
            <label for="floatingPassword">Password</label>
        </div>
        <br>
        <div class="col-12">
        <button type="submit" class="btn btn-primary">login</button>
        </div>   

    </form>
    </div>
</div>
</body>
</html>