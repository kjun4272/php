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
            if ((document.ttt.pass1.value == "") || (document.ttt.pass2.value == ""))
            {
                alert("비밀번호를 입력하세요");
                return;
            }
            if (document.ttt.pass1.value != document.ttt.pass2.value )
            {
                alert("비밀번호가 서로 다릅니다");
                return;
            }
          
            if (document.ttt.uname.value == "")
            {
                alert("이름를 입력하세요");
                return;
            }

            document.ttt.submit();

        }
    </script>
</head>
<body>

    회원가입 <br>
    <form action="p2.php" method="post" name="ttt">
    아이디 : <input type="text" name="uid" id="uid">   <br>
    비밀번호 : <input type="password" name="pass1" id="pass1">    <br>
    비밀번호 재입력 : <input type="password" name="pass2" id="pass2">    <br>
    이름 : <input type="text" name="uname" id="uname">   <br>
    이메일 : <input type="text" name="email1" id="email1"> @ <input type="text" name="email2" id="email2">  <br>
    <input type="button" value="회원가입" onclick="check()">
    <input type="reset" value="취소하기">
    </form>

</body>
</html>