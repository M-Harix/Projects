<?php
  session_start();
  require_once 'conn.php';
  if (isset ($_SESSION['username']))
  {
    if($_SESSION['role'] == 'admin')
    {
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="fontawesome-free-6.2.0-web/css/all.css">
    <link rel="stylesheet" href="stylesheet/headeradmin.css">
   </head>
<body>
  <nav class="header" id="myHeader">
    <div class="navbar">
      <span class='bx bx-menu'><i class="fa-solid fa-bars"></i></span>
      <div class="logo"><a href="#">S A G</a></div>
      <div class="nav-links">
        <div class="sidebar-logo">
          <span class='bx bx-x' ><i class="fa-solid fa-xmark"></i></span>
        </div>
        <ul class="links">
          <li><a href="dashboard.php">Dashboard</a></li>
          <li><a href="arts-admin.php">Arts</a>
<!--
            <span class='bx bxs-chevron-down htmlcss-arrow arrow  '><i class="fa-solid fa-angle-down" style="color:white; margin-left: 2%;"></i></span>
            <ul class="htmlCss-sub-menu sub-menu" style="padding-left: 0;">
              <li><a href="#">CALLIGRAPHY</a></li>
              <li><a href="#">ABSTRACT</a></li>
              <li><a href="#">MINIATURE</a></li>
              <li class="more">
                <span><a href="#">More</a>
                <span class='bx bxs-chevron-right arrow more-arrow'><i class="fa-solid fa-angle-right" style="color:white;"></i></span>
              </span>
                <ul class="more-sub-menu sub-menu">
                  <li><a href="#">LANDSCAPE</a></li>
                  <li><a href="#">FIGURATIVE</a></li>
                  <li><a href="#">REALISM</a></li>
                </ul>
              </li>
            </ul>
-->
          </li>
          <li><a href="exhibitionadmin.php">Exhibitions</a></li>
          <li><a href="artistadmin.php">Artists</a></li>
        </ul>
      </div>
      <!--
      <div class="search-box">
        <span class='bx bx-search'> <i class="fa-solid fa-magnifying-glass"></i></span>
        <div class="input-box">
          <input type="text" placeholder="Search...">
        </div>
      </div>
    -->
      <div class="dropdown" style="text-align: initial;">
          <img src="Images/logo.png" onclick="myFun()" class="profile-circle dropbtn"/>
          <i class="fa-solid fa-angle-down dropbtn" onclick="myFun()" style="color:white; margin-left: 7%;"></i>
          <div id="myDropdown" class="dropdown-content">
            <a href="adminprofile.php"><i class="fa fa-user" aria-hidden="true"></i> My Profile</a>
            <a href="dashboard.php"><i class="fa-solid fa-image" aria-hidden="true"></i></i> Dashboard</a>
            <a href="index.php"><i class="fa fa-sign-out" aria-hidden="true"></i>Log Out</a>
          </div>
        </div>
    </div>
  </nav>
  <script>
    // javascript of profile dropdown
    function myFun() {
  document.getElementById("myDropdown").classList.toggle("ushow");
}

// Close the dropdown menu if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('ushow')) {
        openDropdown.classList.remove('ushow');
      }
    }
  }
}




    let navbar = document.querySelector(".navbar");
        let searchBox = document.querySelector(".search-box .bx-search");
        // let searchBoxCancel = document.querySelector(".search-box .bx-x");

        searchBox.addEventListener("click", ()=>{
          navbar.classList.toggle("showInput");
          if(navbar.classList.contains("showInput")){
            searchBox.classList.replace("bx-search" ,"bx-x");
          }else {
            searchBox.classList.replace("bx-x" ,"bx-search");
          }
        });

        // sidebar open close js code
        let navLinks = document.querySelector(".nav-links");
        let menuOpenBtn = document.querySelector(".navbar .bx-menu");
        let menuCloseBtn = document.querySelector(".nav-links .bx-x");
        menuOpenBtn.onclick = function() {
        navLinks.style.left = "0";
        }
        menuCloseBtn.onclick = function() {
        navLinks.style.left = "-100%";
        }


        // sidebar submenu open close js code
        let htmlcssArrow = document.querySelector(".htmlcss-arrow");
        htmlcssArrow.onclick = function() {
         navLinks.classList.toggle("show1");
        }
        let moreArrow = document.querySelector(".more-arrow");
        moreArrow.onclick = function() {
         navLinks.classList.toggle("show2");
        }
        let jsArrow = document.querySelector(".js-arrow");
        jsArrow.onclick = function() {
         navLinks.classList.toggle("show3");
        }

        // When the user scrolls the page, execute myFunction
window.onscroll = function() {myFunction()};

// Get the header
var header = document.getElementById("myHeader");

// Get the offset position of the navbar
var sticky = header.offsetTop;

// Add the sticky class to the header when you reach its scroll position. Remove "sticky" when you leave the scroll position
function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}
  </script>
</body>
</html>
<?php 
    }
    else
    {
      header('location:login.php');
    }
  }
  else
  {
    header('location:login.php');
  }
?>