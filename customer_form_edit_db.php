<meta charset="UTF-8">
<?php
//1. เชื่อมต่อ database: 
include('condb.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี

//สร้างตัวแปรสำหรับรับค่าที่นำมาแก้ไขจากฟอร์ม
  $a_id = $_REQUEST["a_id"];
  $a_storename = $_REQUEST["a_storename"];
  $a_name = $_REQUEST["a_name"];
  $a_address = $_REQUEST["a_address"];
  $a_number = $_REQUEST["a_number"];
  $a_link = $_REQUEST["a_link"];
  $a_sn = $_REQUEST["a_sn"];
  $a_code = $_REQUEST["a_code"];
  $a_logo = $_REQUEST["a_logo"];

//ทำการปรับปรุงข้อมูลที่จะแก้ไขลงใน database 
  
  $sql = "UPDATE customer_data SET  
      a_storename='$a_storename' , 
      a_name='$a_name' , 
      a_address='$a_address' ,
      a_number='$a_number' ,
      a_link='$a_link' ,
      a_sn='$a_sn' ,
      a_code='$a_code' ,
      a_logo='$a_logo' 
      WHERE a_id='$a_id' ";

$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
mysqli_close($con); //ปิดการเชื่อมต่อ database 

//จาวาสคริปแสดงข้อความเมื่อบันทึกเสร็จและกระโดดกลับไปหน้าฟอร์ม
  
  if($result){
  echo "<script type='text/javascript'>";
  echo "alert('Update');";
  echo "window.location = 'customerdata.php'; ";
  echo "</script>";
  }
  else{
  echo "<script type='text/javascript'>";
  echo "alert('Error back to Update again');";
  echo "</script>";
}
?>