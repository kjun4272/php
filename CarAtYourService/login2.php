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
    $pass = $_POST["pass"];

     //1. DB연결
     $con = mysqli_connect("localhost", "root" , "", "sample");

     //2. DB작업 - insert
     $sql = "select * from members where id = '$uid' AND pass = '$pass'";

     $result = mysqli_query($con, $sql);

    if (mysqli_num_rows($result) == 0)
    {
        echo'<script>
        alert("등록된 사용자가 아닙니다.");
        location.href = "index.php";
        </script>';

    }
    else{
        echo "로그인 되었습니다.";
        $row = mysqli_fetch_array($result);
        session_start();
        $_SESSION["id"] = $row["id"];
        //로그이상태 유지하는 기능
        echo'<script>
        alert("로그인 되었습니다.");
        location.href = "login.php";
        </script>';
    }

     //3. DB연결 해체
     mysqli_close($con);

    ?>


</body>
</html>