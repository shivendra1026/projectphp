<?php
include("config.php");
include("header.php");



if(isset($_POST['submit'])){
  $id=$_GET["id"];
	$name          = isset($_POST['name'])?$_POST['name']:'';
	$price         = isset($_POST['price'])?$_POST['price']:'';
	$image         = isset($_POST['image'])?$_POST['image']:'';
	$colors        = isset($_POST['colors'])?$_POST['colors']:'';
	$category      = isset($_POST['category'])?$_POST['category']:'';
	$tags          = isset($_POST['tags'])?$_POST['tags']:'';
  $description   = isset($_POST['description'])?$_POST['description']:'';
  $tag_array     = json_encode($tags);



$sql = "UPDATE products SET name='$name',price='$price',image='$image',colors='$colors',category='$category',tags='$tag_array', description='$description' WHERE id=$id";
$result=mysqli_query($conn,$sql);
header('location:products.php');}
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
            $sql = "SELECT * FROM products";
				 $result = mysqli_query($conn,$sql);

				 if (mysqli_num_rows($result) > 0) {
           // output data of each row
          
				   while($row = mysqli_fetch_assoc($result)) {
            if($_GET['id']==$row['id']){ 
             



            echo  '<p>
                <label>Name</label>
                  <input class="text-input small-input" type="text" id="small-input" name="name"  value="'.$row["name"].'" required />
                  <br /><small>A small description of the field</small>
              </p>

              <p>
                <label>Price</label>
                  <input class="text-input small-input" type="number" id="small-input" name="price" value="'.$row["price"].'" required/> 
                  <br /><small>A small description of the field</small>
              </p>

              
              <p>
                <label>Image</label>
                  <input class="text-input small-input" type="file" id="small-input" name="image" value="'.$row["image"].'" required/> 
                  <br /><small>A small description of the field</small>
              </p>

              <p>
                <label>Colors</label>
                  <input class="text-input small-input" type="text" id="small-input" name="colors" value="'.$row["colors"].'" required />
                  <br /><small>A small description of the field</small>
              </p>



              <p>
                <label>Categories</label>              
                <select name="category" class="small-input">
                  <option value="Male" name="category">Male</option>
                  <option value="Female" name="category">Female</option>
                  <option value="kids" name="category">kids</option>
                  <option value="Electronics" name="category">Electronics</option>
                  <option value="Sports" name="category">Sports</option>
                  
                </select> 
              </p>
              
              <p>
                <label>Tags</label>  
                  <input type="checkbox" name="tags" value="'.$row["tags"].'">fashion</input>
                                <input type="checkbox" name="tags[]" value="Ecommerce" >Ecommerce</input>
                                <input type="checkbox" name="tags[]" value="Shop">Shop</input>
                                <input type="checkbox" name="tags[]" value="Handbag">Handbag</input>
                                <input type="checkbox" name="tags[]" value="laptop">laptop</input>
                                <input type="checkbox" name="tags[]" value="Headphone">Headphone</input>
                                
                </p>
              <p>
                <label> Description</label>
                <textarea class="text-input textarea wysiwyg" id="textarea" name="description" cols="79" rows="15" value="'.$row["description"].'" required></textarea>
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
    

      
 
    
    
  
    

