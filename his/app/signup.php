

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

<script>

function change(){
	document.getElementById("decide").innerHTML = "<span style='color:red;'>ID 중복 여부를 확인해주세요.</span>"
	document.getElementById("id").disabled = false
	document.getElementById("id").value = ""
	document.getElementById("join_button").disabled = true
	document.getElementById("check_button").value = "ID 중복 검사"
	document.getElementById("check_button").setAttribute("onclick", "checkid()")
}
function decide(){
	document.getElementById("decide").innerHTML = "<span style='color:blue;'>사용 가능한 아이디입니다.</span>"
	document.getElementById("decide_id").value = document.getElementById("id").value
	document.getElementById("id").disabled = true
	document.getElementById("join_button").disabled = false
	document.getElementById("check_button").value = "다른 ID로 변경"
	document.getElementById("check_button").setAttribute("onclick", "change()")
}
function checkid(){
	var userid = document.getElementById("id").value;
	if(userid)  //userid로 받음
	{
		url = "idcheck.php?userid="+userid;
		window.open(url,"chkid","width=400,height=200");
	} else {
		alert("아이디를 입력하세요.");
	}



}
</script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body style="background-color: #AEEFFA;">
<?php require __DIR__ . '/navbar.php'; ?>
    <h1 class="t" style="text-align: center; font-size: 64px; color: ivory;">회원가입</h1> 
    
        <form action="signupprocess.php" method="post">

            아이디 : <input type = "text" name = "uid" id="id" maxlength = "32" required> <br>
            <input type="hidden" name="decide_id" id="decide_id">
            <span id="decide" style='color:red;'>ID 중복 여부를 확인해주세요.</span>
            <input type="button" id="check_button" value="ID 중복 검사" onclick="checkid();"> <br>
            비밀번호 : <input type = "password" name = "upw" maxlength = "32" required> <br>
            비밀번호 재입력 : <input type = "password" name = "upw2" maxlength = "32" required> <br>
            <input type = "submit" value = "가입" id = "join_button" disabled=true>
            
        </form>
</body>
</html>