<html>
<head>
<link rel="stylesheet" href="carrental.css">

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
<div class="navbar">
  <a href="carrental.php">홈</a>
  <a href="tarrif.php">요금제</a>
  <a href="reserve_car.php">예약하기</a>
  <a href="reserve_car1.php">예약현황</a>
  <a href="board_form.php">리뷰쓰기</a>
  <a href="board_list.php">리뷰목록</a>
  <a href="login.php" class="right">로그인</a>
  <a href="registration.php" class="right">회원가입</a>
</div>



<div class="bg-image"></div>

<div class="bg-text">

 


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
        <a>  </a>';
    }
    else
    {
        echo"<a href='p3.php'>회원정보 수정</a><br>";
        echo"<a href='logout.php'>로그아웃</a><br>";
        echo"<a href='delete.php'>회원탈퇴</a><br>";
        
    };
    


?>

 
  
  
  </div>
</div>


</body>
</html>