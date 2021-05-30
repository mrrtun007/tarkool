<meta charset="UTF-8">
<?php include('h.php');
include('condb.php');
  //$fileupload = $_POST['a_logo'];
//ฟังชันวันที่่
  date_default_timezone_set('Asia/Bangkok');
  $datanow = date('d-m-Y H:i:s');
//ฟังชันสุ่มตัวเลข
  $numrand = (mt_rand());

  $a_storename = $_POST['a_storename'];
  $a_name = $_POST['a_name'];
  $a_address = $_POST['a_address'];
  $a_number = $_POST['a_number'];
  $a_link = $_POST['a_link'];
  $a_sn = $_POST['a_sn'];
  $a_code = $_POST['a_code'];
  $a_logo =(isset($_POST['a_logo']) ? $_POST['a_logo'] :'');
  $img2 = $_POST['img2'];
  $upload = $_FILES['a_logo']['name'];
  $date = $_POST["datanow"];


  if($upload !='') { 

    //โฟลเดอร์ที่เก็บไฟล์
    $path="a_logo/";
    //ตัวขื่อกับนามสกุลภาพออกจากกัน
    $type = strrchr($_FILES['a_logo']['name'],".");
    //ตั้งชื่อไฟล์ใหม่เป็น สุ่มตัวเลข+วันที่
    $newname =$numrand.$datanow.$type;
  
    $path_copy=$path.$newname;
    $path_link="a_logo/".$newname;
    //คัดลอกไฟล์ไปยังโฟลเดอร์
    move_uploaded_file($_FILES['a_logo']['tmp_name'],$path_copy);  
    
  }else{
    $newname = $img2;
  }  


$sql = "UPDATE customer_data SET
    a_storename='$a_storename',
			a_name='$a_name', 
			a_address ='$a_address',
      a_number = '$a_number',
      a_link = '$a_link',
      a_sn ='$a_sn',
      a_code ='$a_code',
      a_logo ='$a_logo',
			a_logo ='$newname',
      datanow ='$datanow ',
      img2 ='$img2'
			WHERE a_id='$a_id' ";
 
    
  
    
    $result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
    mysqli_close($con);
    
    if($result){
      echo "<script>";
      echo "alert('แก้ไขข้อมูลเรียบร้อย');";
      echo "window.location ='customerdata.php'; ";
      echo "</script>";
    } else {
      
      echo "<script>";
      echo "alert('ERROR!');";
      echo "window.location ='customerdata.php'; ";
      echo "</script>";
    }
?>