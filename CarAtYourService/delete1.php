//삭제 db연결
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
    //회원정보 삭제 - DB 

    //1. DB연결
    $con = mysqli_connect("localhost", "root" , "", "sample");

    //2. DB작업 - delete
    session_start();
    $uid = $_SESSION["id"];
    $sql = "delete from members where id = '$uid'";

    mysqli_query($con, $sql);

    //3. DB연결 해체
    
    mysqli_close($con);
    unset($_SESSION["id"]);


?>
<script>
        alert("삭제되었습니다.");
        location.href = "login.php";
        </script>;
</body>
</html>