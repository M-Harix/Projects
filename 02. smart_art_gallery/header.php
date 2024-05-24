<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="fontawesome-free-6.2.0-web/css/all.css">
    <link rel="stylesheet" href="stylesheet/header.css">
   </head> 
<body>
  <nav class="header" id="myHeader">
    <div class="navbar">
      <span class='bx bx-menu'><i class="fa-solid fa-bars"></i></span>
      <div class="logo"><a href="index.php">Smart Art</a></div>
      <div class="nav-links" style="width: 58em;">
        <div class="sidebar-logo">
          <span class='bx bx-x' ><i class="fa-solid fa-xmark"></i></span>
        </div>
        <ul class="links">
          <li><a href="home.php">Home</a></li>
          <li><a href="login.php">Collection</a>
            <span class='bx bxs-chevron-down htmlcss-arrow arrow  '><i class="fa-solid fa-angle-down" style="color:white; margin-left: 2%;"></i></span>
            <ul class="htmlCss-sub-menu sub-menu">
              <li><a href="login.php">Calligraphy</a></li>
              <li><a href="login.php">Abstract</a></li>
              <li><a href="login.php">Miniature</a></li>
              <li class="more">
                <span><a href="#" style="cursor: pointer;">More</a>
                <span class='bx bxs-chevron-right arrow more-arrow'><i class="fa-solid fa-angle-right" style="color:white;"></i></span>
              </span>
                <ul class="more-sub-menu sub-menu">
                  <li><a href="login.php">Landscape</a></li>
                  <li><a href="login.php">Figurative</a></li>
                  <li><a href="login.php">Realism</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li>
            <a href="login.php">Exhibitions</a>
            <span class='bx bxs-chevron-down js-arrow arrow '><i class="fa-solid fa-angle-down" style="color:white; margin-left: 2%;"></i></span>
            <ul class="js-sub-menu sub-menu" style="padding-left: 0;">
              <li><a href="login.php">Coming Soon</a></li>
              <li><a href="login.php">Available</a></li>
              <li><span><a href="login.php">More</a></span></li>
            </ul>
          </li>
          <li><a href="login.php">Artists</a></li>
          <li><a href="about us.php">About Us</a></li>
          <li><a href="contact.php">Contact Us</a></li>
          <div class="right-side">
            <li class="log"><a href="login.php" class="login">Login
              <i class="fa-solid fa-right-to-bracket" style="color:white; margin-left: 2%;"></i></a></li>
            <li><a href="signup.php" class="signup">Signup
              <i class="fa-solid fa-user-plus" style="color:white; margin-left: 2%;"></i></a></li>
          </div>
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
    </div>
  </nav>
  <script>
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
  </script>
</body>
</html>
