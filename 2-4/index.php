<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script>
        function check(){
            if (document.ttt.uid.value == "")
            {
                alert("아이디를 입력하세요");
                return;
            }
            if (document.ttt.pass.value == "")
            {
                alert("비밀번호를 입력하세요");
                return;
            }

            document.ttt.submit();

        }
    </script>
</head>
<body>
<?php
session_start();
    if (!isset($_SESSION["id"]))
    {
       echo '로그인 <br>
        <form action="login2.php" method="post" name="ttt">
        아이디 : <input type="text" name="uid" id="uid">   <br>
        비밀번호 : <input type="password" name="pass" id="pass">    <br>
        <input type="button" value="로그인" onclick="check()">
        <input type="reset" value="취소하기">
        </form>
        <br>
        <a href="p1.php"> 회원가입 </a>';
    }
    else
    {
        echo"<a href='p3.php'>회원정보 수정</a><br>";
        echo"<a href='game.php'>게임</a><br>";
        echo"<a href='logout.php'>로그아웃</a><br>";
        echo"<a href='p5.php'>회원탈퇴</a><br>";
        
    }


    





?>

</body>
</html>