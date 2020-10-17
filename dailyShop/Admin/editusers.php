<?php
include('config.php');
include("header.php");



if(isset($_POST['submit'])){
  $id=$_GET["id"];
	$username  =   isset($_POST['username'])?$_POST['username']:'';
	$password  =   isset($_POST['password'])?$_POST['password']:'';
	$email     =   isset($_POST['email'])?$_POST['email']:'';
	$dob       =   isset($_POST['dob'])?$_POST['dob']:'';
	$address   =   isset($_POST['address'])?$_POST['address']:'';



$sql1 = "UPDATE users SET username='$username',password='$password',email='$email',dob='$dob',address='$address'  WHERE id=$id";
$result=mysqli_query($conn,$sql1);
header('location:users.php');}
include("sidebar.php");

?>

<div id="main-content"> <!-- Main Content Section with everything -->
			
			<noscript> <!-- Show a notification if the user has disabled javascript -->
				<div class="notification error png_bg">
					<div>
						Javascript is disabled or is not supported by your browser. Please <a href="http://browsehappy.com/" title="Upgrade to a better browser">upgrade</a> your browser or <a href="http://www.google.com/support/bin/answer.py?answer=23852" title="Enable Javascript in your browser">enable</a> Javascript to navigate the interface properly.
					</div>
				</div>
			</noscript>
			
			<!-- Page Head -->
			<h2>Welcome John</h2>
			<p id="page-intro">What would you like to do?</p>
			
			
			
			<div class="clear"></div> <!-- End .clear -->
			
			<div class="Products"><!-- Start Content Box -->
				
				<div class="content-box-header">
					
					<h3>Products</h3>
					
					<ul class="content-box-tabs">
				
						<li><a href="#tab2" class="default-tab">Edit</a></li>
					</ul>
					
					<div class="clear"></div>
			
      <div class="tab-content" id="tab2">
					
          <form action="#" method="POST">
            
            <fieldset> <!-- Set class to "column-left" or "column-right" on fieldsets to divide the form into columns -->




            <?php   
            $sql1 = "SELECT * FROM users";
				 $result = mysqli_query($conn,$sql1);

				 if (mysqli_num_rows($result) > 0) {
				   // output data of each row
				   while($row = mysqli_fetch_assoc($result)) {
             if($_GET['id']==$row['id']){



            echo  '<p>
            <label>UserName</label>
              <input class="text-input small-input" type="text" id="small-input" name="username" value="'.$row["username"].'" required/>  
              <br /><small>A small description of the field</small>
          </p>

          <p>
            <label>Password</label>
              <input class="text-input small-input" type="text" id="small-input" name="password" value="'.$row["password"].'" required/> 
              <br /><small>A small description of the field</small>
          </p>

          
          <p>
            <label>Email</label>
              <input class="text-input small-input" type="text" id="small-input" name="email" value="'.$row["email"].'" required/> 
              <br /><small>A small description of the field</small>
          </p>
          
          <p>
            <label>Date-of-Birth</label>
              <input class="text-input small-input" type="text" id="small-input" name="dob" value="'.$row["dob"].'" required/> 
              <br /><small>A small description of the field</small>
          </p>
          
          <p>
            <label>Address</label>
              <input class="text-input small-input" type="text" id="small-input" name="address" value="'.$row["address"].'" required/> 
              <br /><small>A small description of the field</small>
          </p>';
           }
          }
          }
          ?>
              
            
              
              <p>
                <input class="button" type="submit" name="submit" value="Submit" />
              </p>
              
            </fieldset>
            
            <div class="clear"></div><!-- End .clear -->
            
          </form>
          
        </div> <!-- End #tab2 -->        
        
      </div> <!-- End .content-box-content -->
      
    </div> <!-- End .content-box -->
    

      
      
    <div class="clear"></div>
    
    
  
    

