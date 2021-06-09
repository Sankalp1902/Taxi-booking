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
                <a style="font-size: 23; color: black; float: right; margin-right: 12%;" href = "bookings.php">My bookings</a>
                </div>
            </div>
            <hr size="2" width="80%" noshade style="color:#000000" align="center">
        </nav>

<div class="container" style="margin-top: 10px;">
    <h2 style="color:black" >New ride booking:</h2>
    <form class="form-horizontal" style="margin-top: 25px;" method="POST" action="book.php">
    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
            <label for="name" class="col-sm-6 control-label">Name of Traveller</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" pattern="[A-Za-z].{2,}" id="name" name="name" required placeholder="Name">
            </div>
            </div>
            <div class="from-group">
                <label for="gender" class="col-sm-5 control-label">Gender:</label>
                <div class="col-sm-5">
                    <select class="form-control" id="gender" name="gender" required>
                    <option></option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="Other">other</option>
                    </select>
                </div>
            </div>            
            <div class="form-group" style="margin-top: 20px;">
            <label for="no" class="col-sm-5 control-label">No of persons travelling</label>
            <div class="col-sm-10">
            <input type="number" class="form-control" id="no" name="no" required>
            </div>
            </div>
            <div class="form-group">
            <label for="date" class="col-sm-2 control-label">Date</label>
            <div class="col-sm-10">
                <input type="date" class="form-control" id="date" name="date" required>                 
            </div>
            </div>
            
            <div class="form-group">
            <label for="phone" class="col-sm-5 control-label">Mobile Number</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" id="phone" min="5999999999" max="9999999999" name="phone" required placeholder="Phone">
            </div>
            </div>            
             </div>
        <div class="col-lg-6">
            <div class="container">
            <div class="form-group col-md-6">
            <label for="pick" class="col-sm-12 control-label">Pickup location</label>
            <div class="col-sm-12">
                <input type="text" class="form-control" id="pick" name="pick" required>
            </div>
            </div>
            <div class="form-group col-md-6">
            <label for="drop" class="col-sm-12 control-label">Drop location:</label>
            <div class="col-sm-12">
                <input type="text" class="form-control" id="drop" name="drop" required>               
            </div>
            </div>
            </div>
            <div class="form-group" style="margin-top: 20%;margin-left: 10%;">
            
              <button type="submit" class="btn btn-outline-secondary btn-lg" name="b1">Sign up</button>
            
            </div>
        </div>
    </div>       
</form>
</div>              
   </body> 
</html> 