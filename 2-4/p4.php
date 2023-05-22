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
    session_start();
     $pass = $_POST["pass1"];
     $uname = $_POST["uname"];
     $email1 = $_POST["email1"];
     $email2 = $_POST["email2"];
     $email = $email1."@".$email2;

     $uid = $_SESSION["id"];
    //1. DB연결
    $con = mysqli_connect("localhost", "root" , "", "sample");

    //2. DB작업 - 수정 - update
    $sql = "update members set pass = '$pass', name = '$uname', email = '$email' where id = '$uid'";

    mysqli_query($con, $sql);

    //3. DB연결 해체
    mysqli_close($con);
    ?>

    <script>
        alert("수정되었습니다");
        location.href = "index.php";
    </script>
</body>
</html>