<?php
  session_start();
  require_once 'conn.php';
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Smart Art Gallery</title>
  <link rel="stylesheet" type="text/css" href="stylesheet/signup.css">
</head>

<body>
<?php
  require_once 'header.php';
?>
  <div class="login-root">
    <div class="box-root flex-flex flex-direction--column" style="min-height: 100vh;flex-grow: 1;">
      <div class="loginbackground box-background--white padding-top--64">
        <div class="loginbackground-gridContainer">
          <div class="box-root flex-flex" style="grid-area: top / start / 8 / end;">
            <div class="box-root" style="background-image: linear-gradient(white 0%, rgb(247, 250, 252) 33%); flex-grow: 1;">
            </div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 4 / 2 / auto / 5;">
            <div class="box-root box-divider--light-all-2 animationLeftRight tans3s" style="flex-grow: 1;"></div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 6 / start / auto / 2;">
            <div class="box-root box-background--blue800" style="flex-grow: 1;"></div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 7 / start / auto / 4;">
            <div class="box-root box-background--blue animationLeftRight" style="flex-grow: 1;"></div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 8 / 4 / auto / 6;">
            <div class="box-root box-background--gray100 animationLeftRight tans3s" style="flex-grow: 1;"></div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 2 / 15 / auto / end;">
            <div class="box-root box-background--cyan200 animationRightLeft tans4s" style="flex-grow: 1;"></div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 3 / 14 / auto / end;">
            <div class="box-root box-background--blue animationRightLeft" style="flex-grow: 1;"></div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 4 / 17 / auto / 20;">
            <div class="box-root box-background--gray100 animationRightLeft tans4s" style="flex-grow: 1;"></div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 5 / 14 / auto / 17;">
            <div class="box-root box-divider--light-all-2 animationRightLeft tans3s" style="flex-grow: 1;"></div>
          </div>
        </div>
      </div>
      <div class="box-root padding-top--24 flex-flex flex-direction--column" style="flex-grow: 1; z-index: 9;">
        <div class="box-root padding-top--48 padding-bottom--24 flex-flex flex-justifyContent--center">
          <h1><a href="index.php" rel="dofollow">Smart Art Gallery</a></h1>
        </div>
        <div class="formbg-outer">
          <div class="formbg">
            <div class="formbg-inner padding-horizontal--48">
              <span class="padding-bottom--15"><b style="color: #91004d;">Sign up to your account</b></span>

              <form action="insert.php" method="POST" enctype="multipart/form-data">
                    <div class="field padding-bottom--24">

                      <label class="padding-top--18">First Name</label>
                      <input type="text" name="fname"  placeholder="Enter First Name" >
                      <label class="padding-top--18">Last Name</label>
                      <input type="text" name="lname"  placeholder="Enter Last Name" >
                      <label class="padding-top--18">Username</label>
                      <input type="text" name="username" placeholder="Enter Username" required>
                      <label class="padding-top--18">Email</label>
                      <input type="text" name="email" placeholder="Enter Email" >
                      <label class="padding-top--18">Password</label>
                      <input type="password" name="password" placeholder="Enter Password" required>
                      <label class="padding-top--18">Date of Birth</label>
                      <input type="date" name="dob"  placeholder="Enter your DOB">
                      <label class="padding-top--18">Address</label>
                      <input type="text" name="address" placeholder="Your Address">
                      <label class="padding-top--18">Picture</label>
                      <input type="file" name="pic">
                    </div>
                    <div class="field padding-bottom--24">
                      <input type="submit" id="login" name="user-signup" value="Register">
                    </div>
                    <span>Already have an account? <a href="login.php">Login</a></span>
              </form>
            </div>
          </div>
          <div class="footer-link padding-top--18">
            
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>