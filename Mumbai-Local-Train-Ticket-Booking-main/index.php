<?php

include 'homehead.php';
?>


<style >
  .container{
     border-spacing: 10px;
     font-family: Montserrat, sans-serif;
     font-size: 18px !important;
     border: 2px solid grey;
     margin-top: 50px;
     margin-bottom: 200px;
     padding-top: 50px;
     padding-right: 120px;
     padding-bottom: 50px;
     padding-left: 150px;
     align-content: center;

    }
</style>

<html>
<head>
  <body style="background-color:#967311;">
<link rel='stylesheet' href='index.css'>
<br><br>
  <h1   text-transform: capitalize; style="background-color:yellow;"><center><b><img src="https://img.icons8.com/clouds/90/000000/add-bookmark.png"/> Welcome To M-Ticket Booking Portal <img src="https://img.icons8.com/clouds/90/000000/add-bookmark.png"/></center></b></h1><br>

<div class="container-sm " style="border-radius: 40px;border:2px solid black;padding: 5% 5% 5% 5%;margin-left:10% ;margin-right: 10%;"  >

  <div class="row">
    <div class="col-sm-2"></div>
    <div class="col-sm-4">
      <a href='book.php'><b><button style="border-radius: 20px;background-color:white;color:black ; border-color:white; height:200px;width: 400px;"  ><img src="https://img.icons8.com/nolan/54/train.png"/>&nbsp&nbspBook Train Tickets </button></b></a>
    </div>
    
    <div class="col-sm-4">
    <a href='bookbus.php'><b><button style="border-radius: 20px;background-color: white ;color: black; border-color:white  ;height:200px;width: 400px;"><img src="https://img.icons8.com/nolan/54/bus.png"/>&nbsp&nbspBook Bus Tickets</button></b></a>
    
    </div>
    <div class="col-sm-2"></div>

  </div>

</div>


<?php include 'footer.php';
?> 
</body>
</html>