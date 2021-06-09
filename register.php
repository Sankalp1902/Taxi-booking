<?php
$adhaar=$_POST['a'];
$name=$_POST['b'];
$user=$_POST['c'];
$pass=$_POST['d'];
$add=$_POST['e'];
$mob=$_POST['f'];
	$link = mysqli_connect('localhost','root','');
        if (!$link) {
        die('Could not connect: ' . mysql_error());
        }	
        mysqli_select_db($link,"taxi");
	$query="SELECT * FROM signup WHERE id='$user'";	
        $result=mysqli_query($link,$query);	
        $row=mysqli_num_rows($result);        
	if($row==0)
	{
		$query1="INSERT INTO signup values ('$adhaar','$name','$user','$pass','$add','$mob')";		
                mysqli_query($link,$query1);		
	}
	else
	{
		echo "User Already Exists";				
	}

echo "<script>
            alert('Please login to continue.');
            window.location.href='index.php';
            </script>";
?>