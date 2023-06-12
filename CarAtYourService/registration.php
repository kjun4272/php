<html>
<head>
<link rel="stylesheet" href="carrental.css">
<style>
.error {color: red;}
</style>
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
 
<div class="header">
<script>
        function newwin(){
            ttt =  window.open('idcheck.php?uid='+document.ttt.uid.value, 'ttt', 'width=500,height=500');
        }
        function check(){
            if (document.ttt.uid.value == ""){
                alert("아이디를 입력하세요");
                return;
            }
            if ((document.ttt.pass1.value == "")  || (document.ttt.pass2.value == "")){
                alert("비밀번호를 입력하세요");
                return;
            }
            if (document.ttt.pass1.value != document.ttt.pass2.value ){
                alert("비밀번호가 서로 다릅니다");
                return;
            }
            if (document.ttt.uname.value == ""){
                alert("이름를 입력하세요");
                return;
            }
            document.ttt.submit();
        }
    </script>
</head>
<body>
    <h1>회원가입</h1>
    <form action="p2.php" method="post" name="ttt">
        아이디 : <input type="text" name="uid" id="uid">
        <input type="button" value="중복확인" onclick="newwin()"><br>
        비밀번호 : <input type="password" name="pass1" id="pass1"><br>
        비밀번호 재입력 : <input type="password" name="pass2" id="pass2"><br>
        이름 : <input type="text" name="uname" id="uname"><br>
        이메일 : <input type="text" name="email1" id="email1"> @ <input type="text" name="email2" id="email2"><br>
        <input type="button" value="회원가입" onclick="check()">
        <input type="reset" value="취소하기">
    </form>
</body>
</html>