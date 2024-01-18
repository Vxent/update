<?php
session_start();
if (!isset($_SESSION["user"])) {
   header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="HL.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <title>LODI HOOPS</title>
</head>
<style>
  
  .ul {
  margin: 0;
  padding: 0;
  display: flex;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}

ul li {
  list-style: none;
  margin: 0 15px;
}

ul li a {
  position: relative; 
  display: block;
  width: 60px;
  height: 60px;
  text-align: center;
  line-height: 63px;
  background: #333;
  border-radius: 50%;
  font-size: 30px;
  color: #666;
  transition: .5s;
}

ul li a::before {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  border-radius: 50%;
  background: #ffee10;
  transition: .5s;
  transform: scale(.9);
  z-index: -1;
}

ul li a:hover::before {
  transform: scale(1.1);
  box-shadow: 0 0 15px #ffee10;
}

ul li a:hover {
  color: #ffee10;
  box-shadow: 0 0 5px #ffee10;
  text-shadow: 0 0 5px #ffee10;
}

  .out{
    padding-right: 120px;
  }

  .search {
    position: relative;
  
  }
  #shop {
    
  }
  .navbar {
   
   background-image: url();
   background-repeat:no-repeat;
   background-size: cover;
  
   
   
 
 }
 #home {
    
   /* background-image: url(bg-sport5.gif);
   background-repeat:no-repeat;
   background-size: cover;
   */
   
   
 
 }
 #sports {
    
   background-image: url();
   background-repeat:no-repeat;
   background-size: cover;
  
   
  } 
  #shop {
    
   background-image: url();
   background-repeat:no-repeat;
   background-size: cover;
  
   
  } 
  .shop {
    
   background-image: url(.jpg);
   background-repeat:no-repeat;
   background-size: cover;
  
   
  }
  #video {
    
   background-image: url();
  
   
  }
 #shop {
    
   background-image: url();
   background-repeat:no-repeat;
   background-size: cover;
 
   
  
   
   
 
 }
  
   
   
 
 
 #about {
    
      
   background-image: url();
   background-repeat:no-repeat;
   background-size: cover;
 
 
   
  
   
   
 
 }
 .title-word {
  animation: color-animation 4s linear infinite;
}

.title-word-1 {
  --color-1: #4EFF2C;
  --color-2: #2CFFF2;
  --color-3: #4EFF2C;
}

.title-word-2 {
  --color-1: black;
  --color-2: black;
  --color-3: black;
}

.title-word-3 {
  --color-1: black;
  --color-2: black;
  --color-3: black;
}

.title-word-4 {
   --color-1: black;
  --color-2: black;
  --color-3: black;
}
.title-word-5 {
   --color-1: black;
  --color-2: black;
  --color-3: black;
}

@keyframes color-animation {
  0%    {color: var(--color-1)}
  32%   {color: var(--color-1)}
  33%   {color: var(--color-2)}
  65%   {color: var(--color-2)}
  66%   {color: var(--color-3)}
  99%   {color: var(--color-5)}
  100%  {color: var(--color-1)}
}

/* Here are just some visual styles. 🖌 */

.container {
 
  place-items: flex-start;  
  text-align: center;

}

.title {
  font-family: serif;
  font-weight: 800;
  font-size: 5.5vw;
  text-transform: uppercase;
}

h1 
{
  text-transform: uppercase;
    background-image: linear-gradient( -225deg, rgb(213, 234, 215) 0%, #dbe3ed 29%, #04212e 67%, #00ccff 100% );
    background-size: auto auto;
    background-clip: border-box;
    background-size: 200% auto;
    color: #fff;
    background-clip: text;
   text-fill-color: transparent; 
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    animation: textclip 2s linear infinite;
    display: inline-block;
    font-size: 50px;
   
}
.logo {
  padding-left: 60px;
  width: 280px;
} 
   
         
.btn-grad {
            background-image: linear-gradient(to right, #000000 0%, #434343  51%, #000000  100%);
            margin: 10px;
            padding: 5px 25px;
            text-align: center;
            text-transform: uppercase;
            transition: 0.5s;
            background-size: 200% auto;
            color: white;            
            box-shadow: 0 0 20px #eee;
            display: block;
            text-decoration: none;
          }

          .btn-grad:hover {
            background-position: right center; /* change the direction of the change here */
            color: #fff;
            text-decoration: none;
          }
         

 .navbar1{
  position: relative;
  left: 400px;
 }  
 .logout {
  position: relative;
  right: -50px;
 }  
 .nav-item {
  display: flex;
  margin: 0;
  align-items: center;
  padding-right: 80px;

  
}
.nav-item :hover {
  color: red;
}
    
</style>
<body>
 <section class="container-lg bg-light mw-100">
      <nav class="navbar navbar-expand-lg navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <img class="logo" src="LH.png" alt="">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation" style="padding: initial;">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="navbar1 collapse navbar-collapse" id="navbarNavAltMarkup">
            <ul class=" navbar-nav">
              <li class="nav-item">
                <a class="nav-link text-dark" href="#home">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-dark" href="#sports">Jerseys</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-dark" href="#shop">Shop</a>
              </li>
             
              <li class="nav-item">
                <a class="nav-link text-dark" href="#about">About</a>
              </li>
            
            </ul>
               <div class="logout">
                 <a href="logout.php"><button class="btn-grad">Log out</button></a>
               </div>
          </div>
        </div>
      </nav>
    </div>
 </section>
      
  <!-- HOME -->
  <section id="home">

    <div class="container">
      <div class="row"  >
        
        <div class="col-6-lg col-6-md col-sm-6" style="background-image: url(bg-sport5.gif);">
          <h1>Sportwear Jersey <br>Design <br>Leash your <br>Inner Beast</h1><br>
          <div class="p-5"> 
              <button class="btn-grad3 text-dark">Learn More <i class="fa-solid fa-arrow-right"></i></button>

          </div>
        </div>
        <div class="col-6-lg col-6-md col-sm-6">
           <img src="jersey.jpg" alt="" width="100%">
        </div>
      </div>
    </div>
 
</section>
  
 

  <section id="sports">
    <div class="text-center pt-5" >
      <h1>SPORTS</h1>
    </div>
     <div class="cards text-center p-5 " >
        <a href="mpl.html" target=_blank><img src="esport.png" alt="" width="250px" class="img2 p-5"></a>
        <a href="index.html" target=_blank><img src="nike.png" alt="" width="250px" class="img2 p-5" ></a>
       <a href="vball.html" target=_blank><img src="vball.png" alt="" width="300px" class="img2 p-3" ></a>
       
      </div>
      <div class="cards text-center ">
        <a href="hoodie.html" target=_blank><img src="longsleeve.png" alt="" width="250px" class="img2 p-5"></a>
        <a href="cycling.html" target=_blank><img src="cycling.png" alt="" width="250px" class="img2 p-5" ></a>
       <a href="football.html" target=_blank><img src="soccer.png" alt="" width="250px" class="img2 p-3" ></a>
       
      </div>
      <div class="text-center">
        <a href="new.html" target=_blank><img src="new.png" alt="" width="250px" class="img2 p-5" ></a>
       

      </div>
      <div class="text-center p-5">
          <img src="LH.png" alt="" width="10%">
            <h6>Contact us:For Customization of your Jersey</h6><a href="https://web.facebook.com/xentleesoflexi"> https://web.facebook.com/xentleesoflexi</a>
      </div>

  </section>

  <!-- shop -->
  
  <section id="shop">
    <div class="text-center">
     
    </div>
    <!-- <div class="text-center p-5">
     <img src="shopcart.png" alt="" width="50%" >
    </div> -->
    <div class="shop container " >
   
      <div class="row" >
          
        
         <div class="col-6-lg col-sm-6 col-6-md" style="text-align: center;">
          <div class="pb-3">
           
        
         

           </div>
           <h1>OFFICIAL STOREs <br>SHOP NOW</h1> 
          <h2><b>NIKE NEW COLLECTION <br>JUST DO IT. </b></h2>
        
          
          
          <div class="p-5">
           <a href="shoes.html" target=_blank><button class="btn-grad3 text-dark">SHOP NOW <i class="fa-solid fa-cart-shopping"> </i></button></a>

          </div>
        </div>
        <div class="col-6-lg col-sm-6 col-6-md" >
              <img src="bg-1.png" alt="" width="100%">
           </div> 
       
      </div>
       
    </div>
  </section>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- Tutorial Customization -->

  <section id="video">
    <div class="here text-center pt-5 ">
      <h1><b>HERE  HOW WE CUSTOMIZE OUR JERSEY DESIGN</b></h1>
    </div> <hr>
        <div class="text-center p-5">
          
          <img src="bg-sport9.gif" alt="" width="100%" height="100%">
        

        <div class="text-center">
          <h4>Quote:</h4><h2>DON'T HATE <br> THE JERSEY <br>HATE THE GAME</h2>
          <a href="https://www.youtube.com/watch?v=cbNc5TGrRxE"><img src="yt.png" alt="" width="100px"> Click: Full Tutorial</a>
        </div>
      </div>
  </section>
  
  <!-- ABOUT US -->
  <section id="about" class="bg-dark">
    <div class="text-center p-5">
      <h1>About us</h1>
    </div>
    <div class="container " style="">
      <div class="row"> 
        <div class="col-6-lg col-6-md col-sm-6 p-5">
           <img src="login-side.png" alt="">
           <p style="color: white;">Our Website is very helpful To Ours Sports Players. To Give Them 
           a Idea for their Jersey Design and make Cool and competitive players

           </p>

        </div>
        <div class="col-6-lg col-6-md col-sm-6 p-5">
          <img src="LH.png" alt="" srcset="" width="30%">
          <p class="" style="color: white;">IS A CLOTHING SPORTS DESIGNER COMPANY 
          THAT <br>WAS ORIGINALLYFOUNDED & ENTABLISHED IN<br> PAMPANGA, PHIILIPPINES IN 2023.WE ARE CREATING A JERSEY LAYOUT DESIGN THAT CAN 
          HELP TO CHOOSE YOUR SPORTSWEAR AND ITS  <a href="#sports"><i class="fab fa-download"><button style="background: black;color: white;">FREE TO DOWNLOAD</button></i></a><br></p>
          <img src="allsport.png" alt="" width="60%" class="pt-5">
          <!-- <img src="nayk.png" alt="" width="10%" height="40%"> -->
        </div>
      

      </div>
      
     
     
    </div>
  </section>
  <!-- <p>IS A CLOTHING SPORTS DESIGNER COMPANY 
          THAT WAS <br>ORIGINALLYFOUNDED & ENTABLISHED IN PAMPANGA, <br>PHIILIPPINES IN 2023.WE ARE CREATING A JERSEY <br>LAYOUT DESIGN THAT CAN 
          HELP TO CHOOSE <br>YOUR SPORTSWEAR AND ITS FREE TO DOWNLOAD</p> -->

 
        <!--Footer  -->
    <section id="footer" class="bg-dark">
      <footer class="container">
       <div class="text-center text-light "><h6>©2023 Lodihoops .All right reserved</h6></div> 
       <div class="row">
        <div class="col-6">
          <img src="LH.png" alt="" width="40%">
          <h6 class="text-light ">CLOTHING MANUFACTURER BASED IN <br>PHILIPPINES THAT OFFERS FULL SUBLIMATION <br> SPORTSWEAR AND COMPANY UNIFORMS.</h6>
          
         

        </div>
        <div class="col-6">
          

        <ul>
          <li>
            <a href="#">
              <i class="fab fa-facebook">www.FbLodihoops.Com</i>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="fab fa-github">www.GhLodihoops.Com</i>
            </a>
            </li>
          <li>
            <a href="#">
              <i class="fab fa-chrome">www.gglLodihoops.Com</i>
            </a>
    
          </li>
          <li>
            <a href="#">
              <i class="fab fa-youtube">www.YtLodihoops.Com</i>
            </a> 
          </li>
        </ul>
        

        </div>
        

      </div>
      
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">


      
        

      </footer>
    </section>
      
  
  
   
       
  
       
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>
</html>