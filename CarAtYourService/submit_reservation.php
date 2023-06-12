<?php

$conn = mysqli_connect("localhost", "root" , "", "sample");


$customer_name = $_POST["customer_name"];
$pickup_date = $_POST["pickup_date"];
$return_date = $_POST["return_date"];
$car_type = $_POST["car_type"];

$sql = "insert into reservations (customer_name, pickup_date, return_date, car_type)";

$sql .= "values('$customer_name', '$pickup_date', '$return_date', '$car_type')";

if (mysqli_query($conn, $sql)) {
    echo '<script>alert("예약됐습니다.");
    location.href = "reserve_car1.php";</script>';
        
} else {
    echo "다시 예약해주세요 " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>