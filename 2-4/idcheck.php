<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script>
        function clear_id()
        {   
            window.opener.document.ttt.uid.value="";
            window.opener.document.ttt.uid.focus();
            window.close();
        }



    </script>
</head>
<body>
    <?php
   $uid =$_GET["uid"];

   //1. DB연결
   $con = mysqli_connect("localhost", "root" , "", "sample");

   //2. DB작업 - select
   $sql = "select * from members where id = '$uid'";

   $result = mysqli_query($con, $sql);
   if(mysqli_num_rows($result)==0)
   {
       echo '사용할 수 있습니다.
       <br> <a href="javascript:window.close()">예</a>';
   }
   else
   {
       echo'사용할 수 없습니다. 
       <br> <a href="javascript:clear_id()">예</a>';
   }


    //3. DB연결 해체
    mysqli_close($con);


?>
</body>
</html>