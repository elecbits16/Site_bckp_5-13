<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<div id="logobar" >
<div class="container">
   
     
</div>
</div>



<nav class="navbar navbar-default hidden-xs hidden-sm hidden-md " style="background-color: white; " >
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
   

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div  style="background-color: white; ">
      <ul class="nav navbar-nav">

        
        <li>  <a href="index.php">   <img src="images/logo.png" width="250" ></a></li>
           
          <li style="padding-top: 12px ;" > <form class="searchbox"  method="get" action="results.php"  enctype="multipart/form-data"  >
        <input type="text" placeholder="Search......" name="user_query" class="searchbox-input" style=" width: 600px; background: white; border-color: black; border-style: solid;    border-width: 3px; "  required>
       
        <span class="searchbox-icon"  >  <input type="submit" name="search" style="color: white; background-color: black; border-color: black;
        border-style: solid; " value="GO"> </span>
    </form>
    </li>
    
        <li><a href="aboutus.php" style="padding:30px 0px 0px 10px; font-family: 'Muli', sans-serif; float:left; color:black; "><strong>&nbspAbout Us</strong> </a></li>

        <li><a href="cart.php" style="padding:30px 0px 0px 10px; font-family: 'Muli', sans-serif; float:left; color:black;"><strong >&nbsp&nbsp<i class="material-icons">shopping_cart</i>:<?php total_items(); ?> </strong></a></li>
             
           
       
        
      </ul>
      
      <div class="nav navbar-nav navbar-right">
      <br>
     <div class="dropdown">
  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">My account
  <span class="caret"></span></button>
  <ul class="dropdown-menu">
    <li><?php
     if (!isset($_SESSION['customer_email'])) {

       echo "
       <p style='padding: 10px 0px 0px 10px;'><span class='glyphicon glyphicon-user' style='vertical-align: text-top; padding-right:10px;font-family: 'Muli', sans-serif; float:left; color:black;  '> </span>Hi Guest</p>" ; 

      
     }
     else
     {

      $c_email =  $_SESSION['customer_email'];

      global $con;
      $name_query="SELECT * FROM customers WHERE customer_email='$c_email'";

      $run_name_query = mysql_query( $name_query,$con );
      
      while ($row_name_pro = mysql_fetch_array($run_name_query)) 
    {
        $customer_name = $row_name_pro['customer_name'];
     


       

    }

     }

    ?>
    
    
    <?php
     if (!isset($_SESSION['customer_email'])) {

      echo "<a href='checkout.php' style='padding:0px 0px 0px 10px; font-family: 'Muli', sans-serif;'>Login</a> ";
     }
     else
     {
      echo "<p style='padding: 10px 0px 0px 10px; '><span class='glyphicon glyphicon-user' style='vertical-align: text-top; padding-right:10px; '> </span><a href='account.php 'style='font-family: 'cursive'; float:left; color:black; '>Hi $customer_name</a></p>";    

       echo "<a href='customer/logout.php' style='padding:0px 0px 0px 10px; font-family: 'Muli', sans-serif;'>Logout</a> ";

     }
?></li>
   
  </ul>
</div>
   </div>   
      
      
      </div>
      
       

    

     
      
       
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<nav class="navbar navbar-default  hidden-lg  navbar-fixed-top  " style="background-color: white; " >
  <div class="container-fluid">


  



    <!-- Brand and toggle get grouped for better mobile display -->
   
    <div class="navbar-header" style="padding: 10px 0px 0px 20px; ">

<div class="col-lg-2 col-xs-2 "  >
     <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
  </div>  
<div class="col-lg-3  col-xs-6">
    <a href="index.php"><img src="images/logo.png" width="200" ></a>
</div>
    
<!--<div class="col-lg-4 col-xs-5 " >
<form class="searchbox"  method="get" action="results.php"  enctype="multipart/form-data"  >
        <input type="text" placeholder="Search......" name="user_query" class="searchbox-input" style=" width: 600px; background: white; border-color: black; border-style: solid;    border-width: 3px; "  required>
       
        <span class="searchbox-icon"  >  <input type="submit" name="search" style="color: white; background-color: black; border-color: black;
        border-style: solid; " value="GO"> </span>
    </form>
</div>  -->



    <div  class=" col-xs-4" style="float: right; padding-right: 30px; "  >





  <a href="#"><?php

include("cartbar.php");

?></a>


</div>
     
    
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" style="background-color: white; padding: 10px 0px 0px 40px; ">
      <ul class="nav navbar-nav">
        
       

        
      </ul>
      
      <ul class="nav navbar-nav navbar-right">
        
       <li> <a href="aboutus.php" style="padding-left: 20px; "><span id="g2" class="glyphicon glyphicon-bookmark" style="vertical-align: text-top; padding-right:10px;"></span>&nbspAbout Us</a> </li>
       <li> <a href="contactus.php" style="padding-left: 20px; "><span id="g2" class="glyphicon glyphicon-bookmark" style="vertical-align: text-top; padding-right:10px;"></span>&nbspContact Us</a> </li>
       <li> <a href="all_products.php" style="padding-left: 20px; "><span id="g2" class="glyphicon glyphicon-bookmark" style="vertical-align: text-top; padding-right:10px;"></span>&nbspAll projects</a> </li>
     
      <li> <a href="services.php" style="padding-left: 20px; "><span id="g2" class="glyphicon glyphicon-bookmark" style="vertical-align: text-top; padding-right:10px;"></span>&nbspRequest Service</a> </li>
      <li> <a href="extra.php" style="padding-left: 20px; "><span id="g2" class="glyphicon glyphicon-bookmark" style="vertical-align: text-top; padding-right:10px;"></span>&nbspExtra</a> </li>
      <li> <a href="offers.php" style="padding-left: 20px; "><span id="g2" class="glyphicon glyphicon-bookmark" style="vertical-align: text-top; padding-right:10px;"></span>&nbspOffers</a> </li>
       <li> <a href="http://elecbits.in/blog" style="padding-left: 20px; "><span id="g2" class="glyphicon glyphicon-bookmark" style="vertical-align: text-top; padding-right:10px;"></span>&nbspBlog</a> </li>
 <li> <a href="http://elecbits.in/careers" style="padding-left: 20px; "><span id="g2" class="glyphicon glyphicon-bookmark" style="vertical-align: text-top; padding-right:10px;"></span>&nbspCareers</a> </li>

       
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>




</body>

<script type="text/javascript">
    $(document).ready(function(){
            var submitIcon = $('.searchbox-icon');
            var inputBox = $('.searchbox-input');
            var searchBox = $('.searchbox');
            var isOpen = false;
            {
                if(isOpen == false){
                    searchBox.addClass('searchbox-open');
                    inputBox.focus();
                    isOpen = true;
                }
            };  
             submitIcon.mouseup(function(){
                    return false;
                });
            searchBox.mouseup(function(){
                    return false;
                });
            $(document).mouseup(function(){
                    if(isOpen == true){
                        $('.searchbox-icon').css('display','block');
                        submitIcon.click();
                    }
                });
        });
            function buttonUp(){
                var inputVal = $('.searchbox-input').val();
                inputVal = $.trim(inputVal).length;
                if( inputVal !== 0){
                    $('.searchbox-icon').css('display','none');
                } else {
                    $('.searchbox-input').val('');
                    $('.searchbox-icon').css('display','block');
                }
            }

</script>
</html>