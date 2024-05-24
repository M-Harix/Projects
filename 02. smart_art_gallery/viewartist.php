<?php
  session_start();
  require_once 'conn.php';
  if (isset ($_SESSION['username']))
  {
?> 
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Smart Art Gallery</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome-free-6.2.0-web/css/all.min.css">
    <link rel="stylesheet" href="stylesheet/animate.css">
    <link rel="stylesheet" href="stylesheet/owl.carousel.min.css">
    <link rel="stylesheet" href="stylesheet/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="stylesheet/viewartist2.css" />
</head>

    <body> 
<?php
    if (isset ($_SESSION['username']))
      {
        if($_SESSION['role'] == 'artist')
        {
          require_once 'headerartist.php';
        }
        else if($_SESSION['role'] == 'artist')
        {
          require_once 'headerartist.php';
        }
        else
        {
          require_once 'headercustomer.php';
        }
      }
    else
    {
      require_once 'header.php';
    }

?>
        <div class="home-screen container-fluid" style="height:63%;">
          <div class="home-cover">
                <div id="menu-jk" class="header">
                   <div class="container">
                       <div class="row">
                           <div class="col-md-3 logo">
<?php
    if(isset($_GET['id']))
    {
        $id = $_GET['id'];
        $q="SELECT * FROM artists WHERE id='$id' ";
        $query= mysqli_query($conn, $q);
        foreach($query as $res)
        {
            echo "
                    <img class='logo-wt' src='Images/artists images/".$res['pic']."'style='margin-top:60%;border-radius: 50%;height: 50%;width: 92%;'>
                   <img class='logo-gry' src='Images/images/logo-gray.png' >";
?>                               
                               

                           </div>
                       </div>
                   </div>
               </div>
                <div class="container">
                   <div class="row home-detail" style="padding-top: 43px; padding-bottom: 8px;">
<?php
          echo "                    
                      <div class='col-md-7 mx-auto homexp'>
                           <h5>Hello I'm</h5>
                           <h2>".$res['firstname']." ".$res['lastname']."</h2>
                       </div>";
        }

?>
                   </div>

                </div>
          </div>
        </div>

    <div id="gallery" class="gallery" style="">
        <div class="container">
           <div class="session-title row">
                <h2>My Works</h2>
            </div>
            <div class="row">
                <br/>


<?php
        $q1="SELECT * FROM arts WHERE artistid='$id' ";
        $query1= mysqli_query($conn, $q1);
        foreach($query1 as $res1)
        {
        echo " 
                <div class='gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe'>
                    <img src='Images/arts images/".$res1['pic']."' class='img-responsive'>
                </div>";
        }
    }
?>
            </div>
        </div>


    </div>
<div class="footer" style="line-height: 0.5;">
<?php 
    require_once "footer.php";
?>  
    </div>
    </body>
</html>
<?php 
  }
    else
  {
    header('location:login.php');
  }
?>
