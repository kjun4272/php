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
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="carrental.css">
    <title>예약 목록</title>
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

$conn = mysqli_connect("localhost", "root", "", "sample");

$sql = "select * from reservations";
$result = mysqli_query($conn, $sql);

?>

    <h1>예약 목록</h1>
    <center>
    <table border="1">
        <thead>
            <tr>
                <th>고객 이름</th>
                <th>픽업 날짜</th>
                <th>반납 날짜</th>
                <th>차량 종류</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if (mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . $row["customer_name"] . "</td>";
                    echo "<td>" . $row["pickup_date"] . "</td>";
                    echo "<td>" . $row["return_date"] . "</td>";
                    echo "<td>" . $row["car_type"] . "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='5'>예약된 사람이 없습니다.</td></tr>";
            }
            ?>
        </tbody>
        
    </table>
    </div>
</body>

</html>


<?php
mysqli_close($conn);
?>
