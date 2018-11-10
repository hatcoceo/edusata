

<?php
  $doi_lap = $_POST['doi_lap'];
  $khong_can = $_POST['khong_can'];
  $tang_giam = $_POST['tang_giam'];
  $thay_doi = $_POST['thay_doi'];
  $phan_loai = $_POST['phan_loai'];
  $ket_hop = $_POST['ket_hop'];
  $lien_tuong = $_POST['lien_tuong'];
  $tpct = $_POST['tpct'];
  $hien_tai = $_POST['hien_tai'];
  $nhan_dinh = $_POST['nhan_dinh'];
  $khac = $_POST['khac'];

  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "edusata";

  // Create connection
  $conn1 = new mysqli($servername, $username, $password, $dbname);
     // Check connection
     if ($conn1->connect_error) {
     die("Connection failed: " . $conn1->connect_error);
    } 

  $sql = "INSERT INTO edusa (doi_lap, khong_can, tang_giam, thay_doi, phan_loai, ket_hop, lien_tuong, tpct, hien_tai, nhan_dinh, khac)
      VALUES ('$doi_lap', '$khong_can', '$tang_giam', '$thay_doi', '$phan_loai', '$ket_hop', '$lien_tuong', '$tpct', '$hien_tai', '$nhan_dinh', '$khac')";

     if ($conn1->query($sql) === TRUE) {
      echo "Một bản ghi mới đã được tạo ra";
      } 
      else {
      echo "Error: " . $sql . "<br>" . $conn1->error;
    }

    $conn1->close();
?>
<html>
    <head>
      <title>form edusata</title>
    </head>
    <body> 
   
 	   <form action="xulyformedu.php" method="post">
           <table with="2000" border="2"  align="center">
  
                <tr> 
                   <td>đối lập</td>
                   <td>không cần</td>
                   <td>tăng giảm</td>
                   <td>thay đổi</td>
                   <td>phân loại</td>
                   <td>kết hợp</td>
                   <td>liên tưởng</td>
                   <td>tpct</td>
                   <td>hiện tại</td>
                   <td>nhận định</td>
                   <td>khác</td>
                </tr>
                <tr>
	               <td>
		              <input type="text" name="doi_lap" size="5">
	                </td>
	                <td>
		               <input type="text" name="khong_can" size="5">
	                </td>
	                <td>
		               <input type="text" name="tang_giam" size="5">
	                </td>
	                <td>
		               <input type="text" name="thay_doi" size="5">
	                </td>
	                <td>
		               <input type="text" name="phan_loai" size="5">
	                </td>
	                <td>
		               <input type="text" name="ket_hop" size="5">
	                </td>
	                <td>
		               <input type="text" name="lien_tuong" size="5">
	                </td>
	                <td>
		               <input type="text" name="tpct" size="5">
	                </td>
	                <td>
		               <input type="text" name="hien_tai" size="5">
	                </td>
	                <td>
		               <input type="text" name="nhan_dinh" size="5">
	                </td>
	                <td>
		               <input type="text" name="khac" size="5">
	                </td>
	            </tr>
                <tr>
	                <td colspan="11" align="center">
	                  <input type="reset" name="reset" value="đặt lại">&nbsp &nbsp 
	                  <input type="submit" name="submit" value="gửi đi">
	                </td>
                </tr>
            </table>
        </form>

    </body>
</html>