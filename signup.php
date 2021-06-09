<!DOCTYPE html>
<html lang="en">
<head>
  <title>Form</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">    
</head>
<body style="background-image:linear-gradient(#9B870C,whitesmoke); height: 900px;">
<div style="margin-top:30px;" class="container">
  <h2>User Registration</h2>
  <hr>
  <form method="POST" action="register.php">
    <div class="form-group">  
    <div class="form-group">
      <label for="a">Adhaar Number :</label>      
      <input type="text" class="form-control" required id="a" placeholder="Adhaar Number" name="a">
    </div>
    <hr>
      <label for="b">Full name:</label>
      <input type="text" class="form-control" required id="b" placeholder="First name-Last name" name="b">
    </div>
    <hr>
    <div class="form-group">
      <label for="c">User ID</label>
      <input type="text" class="form-control" required id="c" placeholder="ID" name="c">
    </div>
    <hr>
    <div class="form-group">
      <label for="d">Password :</label>      
      <input type="text" class="form-control" required id="d" placeholder="Password" name="d">
    </div>
    <hr>
    <div class="form-group">
      <label for="e">Address :</label>      
      <input type="text" class="form-control" required id="e" placeholder="Address" name="e">
    </div>
    <hr>
    <div class="form-group">
      <label for="f">Phone :</label>      
      <input type="text" class="form-control" required id="f" placeholder="Phone" name="f">
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>
</body>
</html>