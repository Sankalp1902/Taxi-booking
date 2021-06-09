<?php
session_start();
$l=$_SESSION["id"];
$n=$_POST['name'];
$m=$_POST['gender'];
$o=$_POST['no'];
$p=$_POST['date'];
$s=$_POST['phone'];
$q=$_POST['pick'];
$r=$_POST['drop'];

	$link = mysqli_connect('localhost','root','');
        if (!$link) {
        die('Could not connect: ' . mysql_error());
        }	
        mysqli_select_db($link,"taxi");
	
		$query2="INSERT INTO cabbook VALUES ('$l','$n','$m','$o','$p','$q','$r','$s')";		                		
                mysqli_query($link,$query2);
echo "<script>
            alert('Request accepted!');
            window.location.href='bookings.php';            
      </script>";
?>