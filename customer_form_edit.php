<?php
    //1. เชื่อมต่อ database:
    include('condb.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี
    $a_id = $_REQUEST["ID"];
    //2. query ข้อมูลจากตาราง:
    $sql = "SELECT * FROM customer_data WHERE a_id='$a_id' ";
    $result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
    $row = mysqli_fetch_array($result);
    extract($row);
    ?>
<?php include('h.php');?>
<form  name="admin" action="customer_form_add_db.php" method="POST" id="admin" class="
form-horizontal">

        <input type="hidden" name="a-id" value="<?php echo $a_id; ?>">
          <div class="form-group">
            <div class="col-sm-6" align="left">
              <input  name="a_storename" type="text" required class="form-control" id="a_storename
              " value="<?=$a_storename;?>" placeholder="ชื่อร้านค้า" pattern="^[a-zA-Z0-9]+$" title="ภาษาอังกฤษหรือตัวเลขเท่านั้น" minlength="2"  />
            </div>
          </div>
          <p></p>
          <div class="form-group">
            <div class="col-sm-6" align="left">
              <input  name="a_name" type="text" required class="form-control" id="a_name"value="<?=$a_name;?>" placeholder="ชื่อลูกค้า" pattern="^[a-zA-Z0-9]+$" minlength="2" />
            </div>
          </div>
          <p></p>
          <div class="form-group">
            <div class="col-sm-6" align="left">
              <input  name="a_address" type="text" required class="form-control" id="a_address"value="<?=$a_address;?>" placeholder="ที่อยู่" />
            </div>
          </div>
          <p></p>
          <div class="form-group">
            <div class="col-sm-6" align="left">
              <input  name="a_number" type="text" required class="form-control" id="a_numder"value="<?=$a_number;?>" placeholder="เบอร์" pattern="^[a-zA-Z0-9 .]+$" minlength="2" />
            </div>
          </div>
          <p></p>
          <div class="form-group">
            <div class="col-sm-6" align="left">
              <input  name="a_link" type="text" required class="form-control" id="a_link"value="<?=$a_link;?>" placeholder="เว็ปไซต์" pattern="^[a-zA-Z0-9]+$" minlength="2" />
            </div>
          </div>
          <p></p>
          <div class="form-group">
            <div class="col-sm-6" align="left">
              <input  name="a_sn" type="text" required class="form-control" id="a_sn"value="<?=$a_sn;?>" placeholder="sn" pattern="^[a-zA-Z0-9]+$" minlength="2" />
            </div>
          </div>
          <p></p>
          <div class="form-group">
            <div class="col-sm-6" align="left">
              <input  name="a_code" type="text" required class="form-control" id="a_code"value="<?=$a_code;?>" placeholder="รหัสลับ" pattern="^[a-zA-Z0-9]+$" minlength="2" />
            </div>
          </div>
          <p></p>
          <div class="form-group">
            <div class="col-sm-6" align="left">
              <input  name="a_logo" type="text" required class="form-control" id="a_logo"value="<?=$a_logo;?>" placeholder="โลโก้" pattern="^[a-zA-Z0-9]+$" minlength="2" />
            </div>
          </div>
          <p></p>
          <div class="form-group">
            <div class="col-sm-6" align="right">
            <p></p>
              <button type="submit" class="btn btn-success" id="btn"> <span class="glyphicon glyphicon-saved"></span> บันทึก  </button>      
            </div> 
          </div>
        </form>