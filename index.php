<!DOCTYPE html>
<html>
<head>
    <title></title>

 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" type="text/css" href="css/style.css">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
 <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
 <script src="https://kit.fontawesome.com/a076d05399.js"></script>

</head>
<body>

<?php  include 'menu.php';  ?>

<div id="demo" class="carousel slide" data-ride="carousel">
    <ul class="carousel-indicators">
        <li data-target="#demo" data-slide-to="0" class="active"></li>
        <li data-target="#demo" data-slide-to="1"></li>
        <li data-target="#demo" data-slide-to="2"></li>
    </ul>

     <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="images\pic1.jpg" alt="Los Angeles" width="1100" height="500">
        <div class="carousel-caption">
          <h3>Forest</h3>
          <p>Trees and Road!</p>
        </div>
      </div>

      <div class="carousel-item">
        <img src="images\pic2.jpg" alt="Chicago" width="1100" height="500">
        <div class="carousel-caption">
          <h3>Just beauty</h3>
          <p>sea!, sky!, corns !</p>
        </div>
      </div>
    
      <div class="carousel-item">
        <img src="images\pic3.jpg" alt="New York" width="1100" height="500">
        <div class="carousel-caption">
          <h3>Stars Night</h3>
          <p>Pool with Stars</p>
        </div>
      </div>
  
    </div>

    <!-- Left and right controls -->
    <a class="carousel-control-prev" href="#demo" data-slide="prev">
      <span class="carousel-control-prev-icon"></span>
     </a>

    <a class="carousel-control-next" href="#demo" data-slide="next">
      <span class="carousel-control-next-icon"></span>
    </a>
  </div>
</div>




<div class="button day" id="button" onclick="switcher()">
  <div class="mover" id="mover">
    <svg class="icon sun" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="#0E0E0E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="5"></circle><line x1="12" y1="1" x2="12" y2="3"></line><line x1="12" y1="21" x2="12" y2="23"></line><line x1="4.22" y1="4.22" x2="5.64" y2="5.64"></line><line x1="18.36" y1="18.36" x2="19.78" y2="19.78"></line><line x1="1" y1="12" x2="3" y2="12"></line><line x1="21" y1="12" x2="23" y2="12"></line><line x1="4.22" y1="19.78" x2="5.64" y2="18.36"></line><line x1="18.36" y1="5.64" x2="19.78" y2="4.22"></line></svg>
    <svg class="icon moon" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path></svg>
  </div>
  <script src= "script.js"> </script>
</div>










<section class="my-5">

    <div class="py-5">
        <h2 class="text-center">About Us</h2>
    </div>

 <div class="container-fluid">
    <div class="row">

        <div class="col-lg-5 col-10">
            <img src="images/lang1.png" class="img-fluid aboutimg">
        </div>

         <div class="col-lg-6 col-12">
            <h2 class="diplay-4">Languages</h2>
            <p class="py-3">1)HTML<br> 2)CSS<br>3)PHP<br>4)MYSQL<br>5)JS</p>
            <a href="about.php" class="btn btn-success"> Check It </a>
         </div>

        </div>
    </div> 
</section>



<section class="my-5">

    <div class="py-5">
        <h2 class="text-center">Places</h2>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-12">
                <div class="card">
                     <img class="card-img-top" src="images/pic1.jpg" alt="Card image">
                         <div class="card-body">
                             <h4 class="card-title">EXCELENT</h4>
                             <p class="card-text">Some example text </p>
                             <a href="#" class="btn btn-primary">See Profile</a>
                          </div>
                </div>
            </div>


            <div class="col-lg-4 col-md-4 col-12">
                <div class="card">
                     <img class="card-img-top" src="images/pic2.jpg" alt="Card image">
                         <div class="card-body">
                             <h4 class="card-title">EXCELENT</h4>
                             <p class="card-text">Some example text </p>
                             <a href="#" class="btn btn-primary">See Profile</a>
                          </div>
                </div>
            </div>




            <div class="col-lg-4 col-md-4 col-12">
                <div class="card">
                     <img class="card-img-top" src="images/pic3.jpg" alt="Card image">
                         <div class="card-body">
                             <h4 class="card-title">EXCELENT</h4>
                             <p class="card-text">Some example text </p>
                             <a href="#" class="btn btn-primary">See Profile</a>
                          </div>
                </div>
            </div>



            <div class="col-lg-4 col-md-4 col-12">
                <div class="card">
                     <img class="card-img-top" src="images/pic4.jpg" alt="Card image">
                         <div class="card-body">
                             <h4 class="card-title">EXCELENT</h4>
                             <p class="card-text">Some example text </p>
                             <a href="#" class="btn btn-primary">See Profile</a>
                          </div>
                </div>
            </div>


            <div class="col-lg-4 col-md-4 col-12">
                <div class="card">
                     <img class="card-img-top" src="images/pic5.jpg" alt="Card image">
                         <div class="card-body">
                             <h4 class="card-title">EXCELENT</h4>
                             <p class="card-text">Some example text </p>
                             <a href="#" class="btn btn-primary">See Profile</a>
                          </div>
                </div>
            </div>




            <div class="col-lg-4 col-md-4 col-12">
                <div class="card">
                     <img class="card-img-top" src="images/pic6.jpg" alt="Card image">
                         <div class="card-body">
                             <h4 class="card-title">EXCELENT</h4>
                             <p class="card-text">Some example text </p>
                             <a href="#" class="btn btn-primary">See Profile</a>
                          </div>
                </div>
            </div>



        </div>
    </div>


</section>


<section class="my-5">
    <div class="py-5">
        <h2 class="text-center">Gallery</h2>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-12">  
                 <div class="space">
                
                <img src="images/pic3.jpg"  class="img-fluid pb-3">
        
            </div>
                </div>

            <div class="col-lg-4 col-md-4 col-12">
            <div class="space">
                <img src="images/pic3.jpg" class="img-fluid pb-3">
            </div>
            </div>

        <div class="col-lg-4 col-md-4 col-12">
        <div class="space">
                <img src="images/pic3.jpg" class="img-fluid pb-3">
        </div>
        </div>

        <div class="col-lg-4 col-md-4 col-12">
        <div class="space">
                <img src="images/pic3.jpg" class="img-fluid pb-3">
        </div>
        </div>


        <div class="col-lg-4 col-md-4 col-12">
        <div class="space">
                <img src="images/pic3.jpg" class="img-fluid pb-3">
        </div>
        </div>

        <div class="col-lg-4 col-md-4 col-12">
        <div class="space">
                <img src="images/pic3.jpg" class="img-fluid pb-3">
        </div>
        </div>

        
        </div>
    </div>


</section>


<section class="my-5">
    <div class="py-5">
        <h2 class="text-center">Info</h2>
    </div>

    <div class="w-50 m-auto">
       <form action="userinfo.php" method="post">
            <div class="form-group">
             <label>Username</label>
             <input type="text" name="user" autocomplete="off" class="form-control">
            </div>

        
      
         <div class="form-group">
             <label>E-mail</label>
             <input type="text" name="email" autocomplete="off" class="form-control">
         </div>

         
      
          <div class="form-group">
             <label>Mobile</label>
             <input type="text" name="mobile" autocomplete="off" class="form-control">
         </div>

       
         <div class="form-group">
             <label>Comments</label>
             <textarea class="form-control" name="comments"> </textarea>
          </div>


            <button type="Submit" class="btn btn-success">Submit</button>
             <br>
       </form>

<div>


  <div class="arrow">
    <a href="#" title="Back to Top"><span class="fas fa-angle-up"></span></a>
  </div>
  
<nav>
    <div class="logo">
    </div>
</nav>

<div class="content">
    <h2 class="header"> </h2>

</div>

</section>




<footer>
<p class="p-3 bg-dark text-white text-center position:absolute
    bottom:0">&copy; Copyrights
    <br>
    | Made by -Christos Kyriacou- |
    </p>
</footer>






<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script> src="https://cdnjs.cloudeflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>
</html>
