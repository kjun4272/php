<?php
    session_start();
    if (!isset($_SESSION["id"]))
    {
        echo("<script>
                alert('로그인 후 이용해주세요!');
                location.href = 'login.php';
              </script>
        ");
        exit;
    }
?>






<html>
<head>
    <link rel="stylesheet" href="carrental.css">
    <title>차량 예약하기</title>
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




    <h1>차량 예약</h1>
    <form action="submit_reservation.php" method="post">
        <label for="customer_name">이름:</label><br>
        <input type="text" id="customer_name" name="customer_name" required><br><br>
        
        <label for="pickup_date">빌릴날짜</label><br>
        <input type="date" id="pickup_date" name="pickup_date" required><br><br>

        <label for="return_date">반납날짜</label><br>
        <input type="date" id="return_date" name="return_date" required><br><br>

        <label for="car_type">차종류:</label><br>
        <select id="car_type" name="car_type" required>
            <option value="모닝">모닝</option>
            <option value="스파크">스파크</option>
            <option value="레이">레이</option>
            <option value="캐스퍼">캐스퍼</option>
        </select><br><br>

        <input type="submit" value="예약하기">
    </form>
</body>
</html>
