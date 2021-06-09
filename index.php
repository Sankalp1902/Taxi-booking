<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Taxi...!</title>
<style>
blink{
        animation: blinker 1s linear infinite;
     }
        @keyframes blinker 
        {  
        50% { opacity: 0; }
       }

.typewriter 
{
    font-family: Courier, monospace;
	display: inline-block;
}
.typewriter-text 
{
    display: inline-block;
    overflow: hidden;
    letter-spacing: 2px;
    animation: typing 3s steps(30, end), blink .50s step-end infinite;
    white-space: nowrap;
    font-size: 38px;
    font-weight: 700;    
    box-sizing: border-box;
}
@keyframes typing 
{
    from { 
        width: 0% 
    }
    to { 
        width: 60% 
    }    
}
</style>
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
</head>
<body style="background-image:linear-gradient(#9B870C,whitesmoke); height: 753px;">    
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container" style="margin-top: 40px; margin-left: 10%; color:whitesmoke;">                  
                <div class="typewriter">
                <a href="index.php" class="typewriter-text" style="color: black;">Taxii...!</a>   
                <img src="taxi/taxi.png" height="45" width="90">  
                </div>                                    
            </div>
            <hr size="2" width="80%" noshade style="color:#000000" align="center">
        </nav>
    <div style="text-align : center;">
       <h1>Register and Book your cab NOW!</h1>
    </div>
<div style="margin-left: 25%;" class="col-sm-6">
        <div style="text-align:center; margin-top: 120px;">                                        
            <button id="sign" style="color:whitesmoke" type="button" class="btn btn-outline-secondary btn-lg" onclick="window.location.href='signup.php'">Sign-up</button>
        </div>           
        <div class="box" style="text-align: center; margin-top: 50px;">                        
            <h1 style="color:black;font-family: cursive;" class="section-subheading">OR</h1>
        </div>
        <div style="text-align: center; margin-top: 70px;">        
        <button id="log" type="button" class="btn btn-outline-secondary btn-lg" data-toggle="modal" data-target="#login">Login</button>        
        </div> 
<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">To compete with others ;)</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" method="POST" action="loginb.php">            
            <div class="form-group">
            <label class="col-sm-10" for="id">User Id</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="username" name="username" required placeholder="Enter your ID"> 
                <span id="isE"></span>
            </div>
            </div>
            <div class="form-group">
            <label class="col-sm-10" for="password" >Password</label>
            <div class="col-sm-10">
                <input type="password" class="form-control" id="password" name="password" required placeholder="Hope you didn't forgot :)">
            </div>
            </div>
        <hr noshade style="color:#000000" align="center">
            <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <button type="submit" class="btn btn-success" name="b2">LOGIN</button>
              <a class="btn btn-outline-secondary" style="margin-left: 20px; cursor: pointer;" href="signup.php" >Not registered yet?</a>  
            </div>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>        
</div>
</body>
</html>
