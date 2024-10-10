<html>
	<head>
	</head>
	<body>
	<form method=post>
	Enter Marks of Physics<input type=text name="m1" id="m1"><br>
	Enter Marks of Chemestry<input type=text name="m2" id="m2"><br>
	Enter Marks of Biology<input type=text name="m3" id="m3"><br>
	Enter Marks of Maths<input type=text name="m4" id="m4"><br>
	Enter Marks of Computer<input type=text name="m5" id="m5"><br>
	<input type=submit name="per" id="b1" value=Percentage>
	<input type=submit name="grd" id="b2" value=Grade>
	</form>
	
	
<?php
	if (isset($_REQUEST['per']))
	{
		$phy=$_POST['m1'];
		$che=$_POST['m2'];
		$bio=$_POST['m3'];
		$math=$_POST['m4'];
		$com=$_POST['m5'];
		
		
			$sum=$phy+$che+$bio+$math+$com;
			echo "Total is:".$sum;
		
	}
	if (isset($_POST['grd']))
	{
		$phy=$_POST['m1'];
		$che=$_POST['m2'];
		$bio=$_POST['m3'];
		$math=$_POST['m4'];
		$com=$_POST['m5'];
		echo "Your Total Marks is:".$tot=$phy+$che+$bio+$math+$com . "<br>";
		echo "Your Total Percentage is: ".$per=($phy+$che+$bio+$math+$com)/5 . "<br>";
		if($per<=80 && $per>=90)
			echo "Your Grade is A";
		else if($per<79 && $per>=50)
			echo "Your Grade is B";
		else if($per<49 && $per>=40)
			echo "Your Grade is C";
		else
			echo "Your are Fail";
		
		
	}
		
		

?>
</body>
</html>