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
    <?php
    session_start();
    $uid = $_SESSION["id"];

    $_SESSION["id"];

    //1. DB연결
    $con = mysqli_connect("localhost", "root" , "", "sample");

    //2. DB작업 - select
    $sql = "select * from members where id = '$uid'";

    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($result);

    $email = explode("@",$row["email"]);
    $email1 = $email[0];
    $email2 = $email[1];
?>
회원정보 수정 <br>
    <form action="p4.php" method="post" name="ttt">
    아이디 : <input type="text" name="uid" id="uid" value="<?= $row["id"]?>" disabled>   <br>
    비밀번호 : <input type="password" name="pass1" id="pass1" value="<?= $row["pass"]?>">    <br>
    비밀번호 재입력 : <input type="password" name="pass2" id="pass2" value="<?= $row["pass"]?>" >    <br>
    이름 : <input type="text" name="uname" id="uname" value="<?= $row["name"]?>">   <br>
    이메일 : <input type="text" name="email1" id="email1" value="<?= $email1?>"> @ 
    <input type="text" name="email2" id="email2" value="<?= $email2?>">  <br>
    <input type="button" value="회원정보 수정" onclick="check()">
    <input type="reset" value="취소하기">
    </form>
    <br>
    <a href="javascript:history.back()">이전으로</a>
<?php
//3. DB연결 해체
mysqli_close($con);
?>
</body>
</html>