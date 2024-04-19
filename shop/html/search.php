<?php include('header.php'); ?>


<?php 
       
       if(isset($_POST['submit']))
       {
          
         

            $tname=$_POST['search'];

            $localhost='localhost';
            $username='root';
            $password='';
            $db= 'sell';
           

            
            $conn=mysqli_connect($localhost,$username,$password,$db) or die(mysqli_connect_error());
            
       ?>
       <div class="fashion_section">
<div id="main_slider" class="carousel slide" data-ride="carousel">
   <div class="jewellery_section">
    <div id="jewellery_main_slider" class="carousel slide" data-ride="carousel">
       <div class="carousel-inner">
          <div class="carousel-item active">
             <div class="container">
                <h1 class="fashion_taital"><?php echo $tname; ?></h1>
                <div class="fashion_section_2">
                   <div class="row">
                   <?php 

                    $uplodge=mysqli_query($conn,"SELECT  * FROM `prodect` where  prodect.name= $tname");
                   if(isset($uploadge)){
                    while($row= mysqli_fetch_array($uplodge))
                    {

                      $id=$row['id'];
                      $type=$row['type'];
                      $price=$row['price'];
                      $image=$row['image'];

                      
                    
                            ?>
                      <div class="col-lg-4 col-sm-4">
                         <div class="box_main">
                            <h4 class="shirt_text"> <?php echo "$tname "; ?></h4>
                            <p class="price_text">Price  <span style="color: #262626;"><?php echo "$$price";?></span></p>
                            <div class="tshirt_img"><img src="<?php echo $image; ?>"></div>
                            <div class="btn_main"><button class="btn btn-warning my-3" type="submit" name="add" > Add  <i class="fas fa-shopping-cart"></i></button>
                                 <div class="seemore_bt"><a href="#">See More</a></div>
                            </div>
                         </div>
                      </div>
                     <?php  
                    }
                   }else{
                       echo "item Not Available";
                   }

                    ?>
                   </div>
                </div>
             </div>
          </div>
        
       
             <?php      }
 
       
      
      ?>
    

<?php include('footer.php'); ?>