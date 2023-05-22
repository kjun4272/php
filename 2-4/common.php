<?php
    session_start();
    if (!isset($_SESSION["id"]))
    {
        echo'<script>
        alert("로그인 정보가 없는 접근입니다.");
        location.href = "index.php";
        </script>';
    }
    else
    {
        echo $temp;
    }


?>  