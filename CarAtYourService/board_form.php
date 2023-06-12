<?php
session_start();

if (isset($_SESSION["id"])) {
  $id = $_SESSION["id"];
} else {
  echo "<script>alert('로그인 후 이용해주세요!');history.go(-1);</script>";
  exit;
}
?>
<html>
<head> 
<meta charset="utf-8">
<title>리뷰게시판</title>
<link rel="stylesheet" href="carrental.css">
<script>
  function check_input() {
      if (!document.board_form.subject.value)
      {
          alert("제목을 입력하세요!");
          document.board_form.subject.focus();
          return;
      }
      if (!document.board_form.content.value)
      {
          alert("내용을 입력하세요!");    
          document.board_form.content.focus();
          return;
      }
      document.board_form.submit();
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
<section>
   	<div id="board_box">
	    <h3 id="board_title">
	    		게시판 > 리뷰 쓰기
		</h3>
	    <form  name="board_form" method="post" action="board_insert.php" enctype="multipart/form-data">
	    	 <ul id="board_form">
				<li>
					<span class="col1">아이디 : </span>
					<span class="col2"><?=$id?></span>
				</li>		
	    		<li>
	    			<span class="col1">제목 : </span>
	    			<span class="col2"><input name="subject" type="text"></span>
	    		</li>	    	
	    		<li id="text_area">	
	    			<span class="col1">내용 : </span>
	    			<span class="col2">
	    				<textarea name="content"></textarea>
	    			</span>
	    		</li>
	    		<li>
			        <span class="col1"> 첨부 파일</span>
			        <span class="col2"><input type="file" name="upfile"></span>
			    </li>
	    	    </ul>
	    	<ul class="buttons">
				<li><button type="button" onclick="check_input()">완료</button></li>
				<li><button type="button" onclick="location.href='board_list.php'">목록</button></li>
			</ul>
	    </form>
	</div> 
</section> 
</body>
</html>
