<?php
      include('h.php');
                //1. เชื่อมต่อ database:
                include('condb.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี
                //2. query ข้อมูลจากตาราง tb_admin:
                $query = "SELECT * FROM customer_data ORDER BY a_id ASC" or die("Error:" . mysqli_error());
                //3.เก็บข้อมูลที่ query ออกมาไว้ในตัวแปร result .
                $result = mysqli_query($con, $query);
                //4 . แสดงข้อมูลที่ query ออกมา โดยใช้ตารางในการจัดข้อมูล:
              
                echo ' <table class="table table-hover">';
                
                  while($row = mysqli_fetch_array($result)) {
                  echo "<tr>";
                    echo "<td>" .$row["a_storename"] .  "</td> ";
                    echo "<td>" .$row["a_name"] .  "</td> ";
                    echo "<td>" .$row["a_address"] .  "</td> ";
                    echo "<td>" .$row["a_number"] .  "</td> ";
                    echo "<td>" .$row["a_link"] .  "</td> ";
                    echo "<td>" .$row["a_sn"] .  "</td> ";
                    echo "<td>" .$row["a_code"] .  "</td> ";
                    echo "<td align=center>"."<img src='a_logo/".$row["newname"]."' width='100'>"."</td>";
                    echo "<td>" .$row["datesave"] .  "</td> ";
                  }
                echo "</table>";
                //5. close connection
                mysqli_close($con);
                ?>
                