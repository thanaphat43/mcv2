<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

</head>
<body>

<div id="container"  align="center">
     <form action="<?php echo site_url('Welcome/reg_menu'); ?>" enctype="multipart/form-data" method="POST">
   
	<h1>เพิ่มขบวนรถไฟ</h1>

	<div id="body"  align="center">
		
		<table style="width:50%" border="0">
	<tr>
		<th></th>
		<th></th>
	</tr>
	<tr>
		<td>ขบวน</td>
		<td>
			<!--<input type="text" name="train_id" placeholder="ขบวน">-->
			<select name="train_id">
            <option value="">-----ขบวน-----</option>
			<option value="234">234</option>
			<option value="424">424</option>
			<option value="72">72</option>
			<option value="428">428</option>
		</select>
		</td>
	</tr>
	<tr>
		<td>สถานีต้นทาง</td>
		<td>
			<!---<input type="text" name="Departure_station" placeholder="สถานีต้นทาง">-->
			<select name="Departure_station">
			<option value="">-----สถานีต้นทาง-----</option>
			<option value="สุรินทร์">สุรินทร์</option>
			<option value="สำโรงทาบ">สำโรงทาบ</option>
			<option value="อุบลราชธานี">อุบลราชธานี</option>
			
		</select>
		</td>
	</tr>
	<tr>
		<td>เวลาออก</td>
		<td>
		
			<input type="time" name="Time_out" placeholder="เวลาออก">
		
		</td>
	</tr>
	<tr>
		<td>ถึงเวลา(ห้วยราช)</td>
		<td>
            <input type="time" name="to_station1" placeholder="ถึงเวลา(ห้วยราช">
	
		</td>
    </tr>
    <tr>
		<td>ออก(ห้วยราช)</td>
		<td>
            <input type="time" name="out_station1" placeholder="ออก(ห้วยราช">
	
		</td>
    </tr>
    <tr>
		<td>สถานีปลายทาง</td>
		<td>
            <!--<input type="text" name="station_terminal" placeholder="สถานีปลายทาง">-->
	<select name="station_terminal">
			 <option value="">-----สถานีปลายทาง-----</option>
			  <option value="กรุงเทพมหานคร">กรุงเทพมหานคร</option>
			  <option value="นครราชสีมา">นครราชสีมา </option>
              <option value="กระบี่">กระบี่ </option>
              <option value="กาญจนบุรี">กาญจนบุรี </option>
              <option value="กาฬสินธุ์">กาฬสินธุ์ </option>
              <option value="กำแพงเพชร">กำแพงเพชร </option>
              <option value="ขอนแก่น">ขอนแก่น</option>
              <option value="จันทบุรี">จันทบุรี</option>
              <option value="ฉะเชิงเทรา">ฉะเชิงเทรา </option>
              <option value="ชัยนาท">ชัยนาท </option>
              <option value="ชัยภูมิ">ชัยภูมิ </option>
              <option value="ชุมพร">ชุมพร </option>
              <option value="ชลบุรี">ชลบุรี </option>
              <option value="เชียงใหม่">เชียงใหม่ </option>
              <option value="เชียงราย">เชียงราย </option>
              <option value="ตรัง">ตรัง </option>
              <option value="ตราด">ตราด </option>
              <option value="ตาก">ตาก </option>
              <option value="นครนายก">นครนายก </option>
              <option value="นครปฐม">นครปฐม </option>
              <option value="นครพนม">นครพนม </option>
              
              <option value="นครศรีธรรมราช">นครศรีธรรมราช </option>
              <option value="นครสวรรค์">นครสวรรค์ </option>
              <option value="นราธิวาส">นราธิวาส </option>
              <option value="น่าน">น่าน </option>
              <option value="นนทบุรี">นนทบุรี </option>
              <option value="บึงกาฬ">บึงกาฬ</option>
              <option value="บุรีรัมย์">บุรีรัมย์</option>
              <option value="ประจวบคีรีขันธ์">ประจวบคีรีขันธ์ </option>
              <option value="ปทุมธานี">ปทุมธานี </option>
              <option value="ปราจีนบุรี">ปราจีนบุรี </option>
              <option value="ปัตตานี">ปัตตานี </option>
              <option value="พะเยา">พะเยา </option>
              <option value="พระนครศรีอยุธยา">พระนครศรีอยุธยา </option>
              <option value="พังงา">พังงา </option>
              <option value="พิจิตร">พิจิตร </option>
              <option value="พิษณุโลก">พิษณุโลก </option>
              <option value="เพชรบุรี">เพชรบุรี </option>
              <option value="เพชรบูรณ์">เพชรบูรณ์ </option>
              <option value="แพร่">แพร่ </option>
              <option value="พัทลุง">พัทลุง </option>
              <option value="ภูเก็ต">ภูเก็ต </option>
              <option value="มหาสารคาม">มหาสารคาม </option>
              <option value="มุกดาหาร">มุกดาหาร </option>
              <option value="แม่ฮ่องสอน">แม่ฮ่องสอน </option>
              <option value="ยโสธร">ยโสธร </option>
              <option value="ยะลา">ยะลา </option>
              <option value="ร้อยเอ็ด">ร้อยเอ็ด </option>
              <option value="ระนอง">ระนอง </option>
              <option value="ระยอง">ระยอง </option>
              <option value="ราชบุรี">ราชบุรี</option>
              <option value="ลพบุรี">ลพบุรี </option>
              <option value="ลำปาง">ลำปาง </option>
              <option value="ลำพูน">ลำพูน </option>
              <option value="เลย">เลย </option>
              <option value="ศรีสะเกษ">ศรีสะเกษ</option>
              <option value="สกลนคร">สกลนคร</option>
              <option value="สงขลา">สงขลา </option>
              <option value="สมุทรสาคร">สมุทรสาคร </option>
              <option value="สมุทรปราการ">สมุทรปราการ </option>
              <option value="สมุทรสงคราม">สมุทรสงคราม </option>
              <option value="สระแก้ว">สระแก้ว </option>
              <option value="สระบุรี">สระบุรี </option>
              <option value="สิงห์บุรี">สิงห์บุรี </option>
              <option value="สุโขทัย">สุโขทัย </option>
              <option value="สุพรรณบุรี">สุพรรณบุรี </option>
              <option value="สุราษฎร์ธานี">สุราษฎร์ธานี </option>
              <option value="สุรินทร์">สุรินทร์ </option>
              <option value="สตูล">สตูล </option>
              <option value="หนองคาย">หนองคาย </option>
              <option value="หนองบัวลำภู">หนองบัวลำภู </option>
              <option value="อำนาจเจริญ">อำนาจเจริญ </option>
              <option value="อุดรธานี">อุดรธานี </option>
              <option value="อุตรดิตถ์">อุตรดิตถ์ </option>
              <option value="อุทัยธานี">อุทัยธานี </option>
              <option value="อุบลราชธานี">อุบลราชธานี</option>
              <option value="อ่างทอง">อ่างทอง </option>
              <option value="อื่นๆ">อื่นๆ</option>
			
			
		</select>
		</td>
	</tr>
    <tr>
		<td>ถึงเวลาสถานีปลายทาง</td>
		<td>
            <input type="time" name="to_station2" placeholder="ถึงเวลาสถานีปลายทาง">
	
		</td>
	</tr>
	 <tr>
		<td>หมายเหตุ</td>
		<td>
			<!--<input type="text" name="note" placeholder="หมายเหตุ">-->
			<select name="note">
				<option value="">-----หมายเหตุ-----</option>
			<option value="รถธรรมดา">รถธรรมดา</option>
			<option value="รถดีเซลราง">รถดีเซลราง</option>
			<option value="รถด่วนดีเซลราง">รถด่วนดีเซลราง</option>
			
		</select>
	
		</td>
	</tr>
	
		<td>
		  <input type="submit" value="เพิ่มขบวน">
		</td>
	</tr>	
	</table>
	</form>
	<a href="http://localhost/codeigniter/index.php/">แสดงข้อมูลทั้งหมด</a>
	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div>

</body>
</html>