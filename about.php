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




<footer>
<p class="p-3 bg-dark text-white text-center">&copy; Copyrights
    <br>
    | Made by -Christos Kyriacou- |
    </p>
</footer>




</body>
</html>