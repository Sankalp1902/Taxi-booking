<html>
   
   <head>
      <title>Welcome </title>
      <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css"> 
<style> 

blink {
        animation: blinker 1s linear infinite;
       }
        @keyframes blinker {  
        50% { opacity: 0; }
       }

.typewriter {
    font-family: Courier, monospace;
	display: inline-block;
}
.typewriter-text {
    display: inline-block;
    overflow: hidden;
    letter-spacing: 2px;
    animation: typing 3s steps(30, end), blink .50s step-end infinite;
    white-space: nowrap;
    font-size: 38px;
    font-weight: 700;    
    box-sizing: border-box;
}
@keyframes typing {
    from { 
        width: 0% 
    }
    to { 
        width: 60% 
    }    
}
</style>
   </head>
   
   <body style="background-image:linear-gradient(#9B870C,whitesmoke); height: 900px;">
       <?php 
       session_start();
        if($_SESSION["status"]!="Active")
        {
          echo "<script>
            alert('Please login first.');
            window.location.href='index.php';
            </script>";            
        }
       ?>
       <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container" style="margin-top: 40px; margin-left: 10%; color:black;">                  
                <div class="typewriter">
                <a href="index.php" class="typewriter-text" style="color: black;">Taxii...!</a>   
                <img src="taxi/taxi.png" height="45" width="90">                 
                </div>
                <div>                                
                <P style="font-size: 23;">Welcome, <?php echo $_SESSION["nm"]; ?></P>   
                <a style="font-size: 23; color: black; float: right; margin-right: 12%;" href = "logout.php">Log Out</a>
                </div>
            </div>
            <hr size="2" width="80%" noshade style="color:#000000" align="center">
        </nav>

<div class="container" style="margin-top: 10px;">
    <h2 style="color:black" >My bookings: </h2><br>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "taxi";
$idd=$_SESSION["id"];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "SELECT * FROM cabbook WHERE id='$idd'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["nam"] . " - Gender: " . $row["gender"] . " No of passengers: " . $row["total"] . " Date: " . $row["date"] . "Pickup location: " . $row["pickup"] . "Drop location:" . $row["droploc"] . "Phone:" . $row["phone"]."<br>"."<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
</div>              
   </body>
   
</html> 