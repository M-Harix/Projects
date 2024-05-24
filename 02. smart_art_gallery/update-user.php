<?php 
  session_start();
  require_once 'conn.php';

    if(isset($_POST['update']))
      {
        $id       = $_SESSION['id'];
        $fname    = $_POST['fname'];
        $lname    = $_POST['lname'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $email    = $_POST['email'];
        $phone    = $_POST['phone'];

        $query = "UPDATE users SET fname= '$fname', lname= '$lname', phone= '$phone', email= '$email', username= '$username', 
        password= '$password'  WHERE id='$id'";
        $query_run = mysqli_query($conn , $query);
        if($query_run )
        {
          $_SESSION['status']="Record updated sucessfully.";
          header("Location:userprofile.php");
        }
      }

      if(isset($_POST['update-admin']))
      {
        $id       = $_SESSION['id'];
        $username = $_POST['username'];
        $password = $_POST['password'];

        $query = "UPDATE users SET username= '$username', password= '$password'  WHERE id='$id'";
        $query_run = mysqli_query($conn , $query);
        if($query_run )
        {
          $_SESSION['status']="Record updated sucessfully.";
          header("Location:adminprofile.php");
        }
        
      
      }
      if(isset($_POST['update-artist']))
      {
        $id       = $_SESSION['id'];
        $fname    = $_POST['firstname'];
        $lname    = $_POST['lastname'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $email    = $_POST['email'];
        $phone    = $_POST['phone'];
        $city     = $_POST['city'];
        $state    = $_POST['state'];
        $postal   = $_POST['postal'];
        $dob      = $_POST['dob'];
        $address  = $_POST['address'];
        $description = $_POST['description'];

        $query1 = "UPDATE users SET username= '$username', password= '$password' WHERE id='$id'";

        $query2 = "UPDATE artists SET firstname= '$fname', lastname= '$lname', phone= '$phone', email= '$email', city= '$city', state= '$state', postalcode= '$postal', dob= '$dob', address= '$address', description= '$description'  WHERE userid='$id'";

        $query_run1 = mysqli_query($conn , $query1);
        $query_run2 = mysqli_query($conn , $query2);
        if($query_run1 && $query_run2)
        {
          $_SESSION['status']="Record updated sucessfully.";
          header("Location:artistprofile.php");
        }
        
      
      }


?>