<?php
include('condb.php');

$a_storename = $_POST['a_storename'];
$a_name = $_POST['a_name'];
$a_address = $_POST['a_address'];
$a_number = $_POST['a_number'];
$a_link = $_POST['a_link'];
$a_sn = $_POST['a_sn'];
$a_code = $_POST['a_code'];
$a_logo = $_POST['a_logo'];
$sql ="INSERT INTO customer_data1
    
    (a_storename,  a_name, a_address ,a_number, a_link ,a_sn ,a_code, a_logo) 

    VALUES 

    ('$a_storename', '$a_name','$a_address','$a_number','$a_link','$a_sn','$a_code','$a_logo')";
    
    $result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
    mysqli_close($con);
    
    if($result){
      echo "<script>";
      echo "alert('เพิ่มข้อมูลเรียบร้อย');";
      echo "window.location ='customerdata.php'; ";
      echo "</script>";
    } else {
      
      echo "<script>";
      echo "alert('ERROR!');";
      echo "window.location ='customerdata.php'; ";
      echo "</script>";
    }
?>