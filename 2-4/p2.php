<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $uid = $_POST["uid"];
    $pass = $_POST["pass1"];
    $uname = $_POST["uname"];
    $email1 = $_POST["email1"];
    $email2 = $_POST["email2"];
    $email = $email1."@".$email2;

    $regist_day = date("Y-m-d H:i:s");
    $level = 1;
    $point = 1000;

    //1. DB연결
    $con = mysqli_connect("localhost", "root" , "", "sample");

    //2. DB작업 - insert
    $sql = "insert into members(id, pass, name, email, regist_day, level, point) values('$uid', '$pass', '$uname', '$email', 's$regist_day', $level, $point)";

    mysqli_query($con, $sql);

    //3. DB연결 해체
    mysqli_close($con);
    
?>
    <!-- 입력한<?= $uid ?>데이터를 저장했습니다. <br>
    <a href="p1.php">처음으로</a> -->
    <script>
        alert("저장되었습니다.");
        location.href = "p1.php";
        </script>
</body>
</html>