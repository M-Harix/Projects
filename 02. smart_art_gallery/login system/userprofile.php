
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/artistprofile.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body>
<?php
    require_once 'userprofilenav.php';
?>
      <div class="card" style="width:80%; margin:0 auto; margin-bottom: 4%;">
        <form action="simplesidenavupdate.php" method="post" enctype="multipart/form-data">
            <div class="row">
              <div class="container-profilepic">
                <a href="#" class="changepic"><img src="Images/Profile Images/1.jpg" class="profilepic" className="photo-preview" alt="John">
                 <div class="middle-profilepic">
                  <div class="text-profilepic">
                    <i class="fas fa-camera"></i><br>Change it
                  </div>
               </div>
              </a>
            </div> 
            <div class="col-xs-6">
              <div class="form-group">
                <label>First Name</label>
                <input type="text" name="inputFName" class="form-control" required>
              </div>
            </div>
            <div class="col-xs-6">
              <div class="form-group">
                <label>Last Name</label>
                <input type="text" name="inputLName" class="form-control" required>
              </div>
            </div>
            <div class="col-xs-6">
              <div class="form-group">
                <label>Username</label>
                <input type="text" name="inputUsername" class="form-control" required>
              </div>
            </div>
            <div class="col-xs-6">
              <div class="form-group">
                <label>Password</label>
                <input type="password" name="inputPass" class="form-control" required>
              </div>
            </div>
            
            <div class="col-xs-6">
              <div class="form-group">
                <label>Email</label>
                <input type="email" name="inputEmail" class="form-control" required>
              </div>
            </div>
          </div> 
          <div class="form-group">
            <label>Address</label>
            <input type="text" name="inputAddress" class="form-control" required>
          </div>
          <div class="form-group">
            <label>Phone No.</label>
            <input type="tel" name="inputPhone" class="form-control" placeholder="0300-1234567" pattern="[0-9]{4}-[0-9]{7}">
          </div>         
          <div class="text-center">
            <input type="submit" class="btn" value="Update"></i>
          </div><br>
        </form>
      </div>
  </body>
</html>