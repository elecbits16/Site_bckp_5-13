<!DOCTYPE html>
<?php

session_start();
include("functions/functions.php");

?>

<html>
<head>
  <!-- Links of sheet -->
  <title>Elecbits | Components</title>
  <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="styles/css/stylecontact.css">
   <link href="https://fonts.googleapis.com/css?family=Faster+One" rel="stylesheet">
  <?php
  include("public/link.php");
  ?>


  <meta name="viewport" content="width=device-width, initial-scale=1">
  


  



</head>
<body>
<!-- Links of sheet end -->
<!--Top bar start-->
<?php 

include("public/topbar.php");

?>

<!--Top bar end-->

  

<!--Logo bar start-->
<?php 

include("public/logobar.php");

?>
<!--Logo bar end-->

<!--Menu bar start-->
<?php

include("public/menubar.php");

?>
   <!-- Menu bar end--> 

<div class="content">

<div class="container">
 
<form class="cbp-mc-form" method="post" action=" " >

<br>

 <div  style="font-size: 20px; padding: 0px 0px 0px 20px;" > <span style="font-family: 'Faster One', cursive; font-size: 48px; color: red;">O</span>RDER ANY ELECTRONICS COMPONENTS</div> 


<p>
<hr>
<strong>NEED ELECTRONICS COMPONENTS</strong><br>
<hr>
<p style="font-weight: 600;"> We provide a wide range of components at your doorstep.</p>
<br>
<strong>WHY YOU SHOULD BUY IT FROM US ?</strong><br>

<hr>

 <div class="row text-center">

            <div class="col-md-3 col-sm-6 hero-feature">
                <div class="thumbnail">
                <br>
                    <img src="images/np1.png" alt="">
                    <div class="caption">
                        <h3>SAVE TIME</h3>
                        <p style="text-align: justify;">No need to travel all around the city for electronics components and projects, Just click and order.</p>
                       
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 hero-feature">
                <div class="thumbnail">
                    <br>
                    <img src="images/np2.png" alt="">
                    <div class="caption">
                        <h3 >FREE SHIPPING</h3>
                        <p style="text-align: justify;">We provide free home delivery. Just select your project or order a customized version on the comfort of a click.</p>
                        
                    </div>
                </div>
            </div>

            <div class="col-md-3 col1-sm-6 hero-feature">
                <div class="thumbnail">
                    <br>
                    <img src="images/np3.png" alt="">
                    <div class="caption">
                        <h3>CASH ON DELIVERY</h3>
                        <p style="text-align: justify;">Easy payments at your door. We believe in our customers and provide payment option after their complete satisfaction. </p>
                       
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 hero-feature">
                <div class="thumbnail">
                    <br>
                    <img src="images/np4.png" alt="">
                    <div class="caption">
                        <h3>EASY RETURNS</h3>
                        <p style="text-align: justify;"> We provide the best quality available in the market, If still you're not satified we will return as soon as possible.</p>
                       
                    </div>
                </div>
            </div>

           
 

        </div>

  



</p>




  <div class="col-lg-6">
    <label for="first_name">Name</label>
    <input type="text" id="first_name" name="first_name" required/>
    
    <label for="email">Email Address</label>
    <input type="email" id="email" name="email" required/>
    
   
    
        
    
  </div>
  <div class="col-lg-6">
  
    <label for="phone">Phone Number</label>
    <input type="text" id="phone" name="phone"  required/>


    <label for="phone">Your Location </label>
       <select name="country" >
                      <option >New Delhi</option>
                      <option >Noida</option>
                      <option >Gurgaon</option>
                                            <option >Ghaziabad</option>
                                            <option >Outside NCR</option>
                    </select>


  </div>
  <div class="col-lg-12">

<label for="phone">Component(s)</label>
    <input type="text" id="phone" name="pt" required/>


    <label for="affiliations"> Short Description</label>
    <textarea id="affiliations" name="affiliations" /></textarea>
   </div>   
    
  


<div class="col-lg-6">

  <label >Select quantity</label>
    <select name="range" required/>       
       <option>1 </option>
       <option>2</option>
       <option>3</option>
       <option>4</option> 
       <option>5</option> 

       </select>




</div>


<div class="col-lg-6">



<label>Choose a delivery date   <span style="font-size: 15px;"> (Closest date would be <?php echo date('d-m-Y', strtotime("+2 day")); ?>)</span> : </label>
<input type="date"  name="ddate" min='<?php echo date('Y-m-d', strtotime("+2 day")); ?>' required/>






</div>


</div>






  <br>
 
 <div style="text-align: center; ">
 <button class="btn btn-success" style="font-size: 24px;" type="submit" name="update">SUBMIT</button>
  </div>
  
</form>
</div>
</div>
<br>

<!--footer start-->
<?php

include("public/footer.php");

?>



<!--footer end-->
<div style="float:left;  top: 100px; width:40;height:60; padding:6px; position: fixed; border-radius:8px;">

 
   <b style="color:black;">

   <br>
<a href="https://www.facebook.com/elecbits7" target="blank" class="tips" title="follow me on Facebook"><img src="images/facebook.png"> </a><br>
<br>
  <a href="https://twitter.com/elecbits16" target="blank" class="tips" title="follow me on Twitter"><img src="images/twitter.png"></a><br>


  </b>  

</div>

<?php
include("flt.php");
?>















<?php

if (isset($_POST['update'])) {

  $fname = $_POST['first_name'];  
  $email = $_POST['email'];  
  $phone = $_POST['phone'];

  $range = $_POST['range'];
  $loc = $_POST['country'];
   $date = $_POST['ddate'];

   $pt = $_POST['pt'];
   $affiliations = $_POST['affiliations'];


   $msg = "$fname,  $email,  $phone, $pt , $affiliations, $range, $loc, $date ";

   $message = "Thanks for contacting Elecbits, we will respond to you soon.  Meanwhile visit us at http://elecbits.in";

    $from= "from: Info_Elecbits@elecbits.in";

if(filter_var($email, FILTER_VALIDATE_EMAIL)){

if( mail("saurav.rav67@gmail.com", "Components", $msg, $from) && mail("elecbits16@gmail.com", "Components", $msg, $from) &&mail($email, "We appreciate your concern", $message , $from) ) 
      {  
           echo "<script>alert('Your response has been added. Your response is important to us.')</script>";  
      }  

}
  
}

?>









</body>
</html>