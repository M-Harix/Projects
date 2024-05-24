<!DOCTYPE html>
<html>
    <head>
        <title>S_M_S</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <style>
            .back-video{
                position:fixed;
                top:0;
                right:0;
                z-index:-1;
                pointer-events: none;
            }
            @media (min-aspect-ratio: 16/9){
                .back-video{
                    width: 100%;
                    height: 100%;
                }
            }
            @media (max-aspedct-ratio: 16/9){
                .back-video{
                    width: auto;
                    height: 100%;
                }
            }
        </style>
    </head>
    <body style="background: black;">
        <h1 style="text-align: center; color:white;">Student Management System</h1>
        
        <a href="one.php" class="btn btn-success" style="float:right; margin-top:-47px;margin-right: 10px;">Login</a>
        <a href="signup.php" class="btn btn-light" style="float:right; margin-top:-47px; margin-right:85px;">Signup</a>
        <video autoplay loop muted plays-inline class="back-video">
			<source src="videos/globe.mp4">
		</video>
        <!-- <div class="container d-flex justify-content-center align-items-center"	style="min-height:80vh; color:black;">
            <img src="pics/image.png" class="" alt="admin image">
        </div> -->
    </body>
</html>