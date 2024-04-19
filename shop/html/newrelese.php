
 <?php include('header.php'); ?>

 <div class="fashion_section">
   <div id="main_slider" class="carousel slide" data-ride="carousel">
         

      <div class="jewellery_section">
         <div id="jewellery_main_slider" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <div class="container">
                     <h1 class="fashion_taital">New Releases</h1>
                     <div class="fashion_section_2">
                        <div class="row">
<?php 
$localhost='localhost';
$username='root';
$password='';
$db= 'sellproducts';

$conn=mysqli_connect($localhost,$username,$password,$db) or die(mysqli_connect_error());

$uplod=mysqli_query($conn,"SELECT `id`, `type`, `name`, `price`, `number`, `image` FROM `prodect`  ORDER BY `id` DESC LIMIT 6");



while($row= mysqli_fetch_array($uplod))
{

  $id=$row['id'];
  $type=$row['type'];
  $tname=$row['name'];
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

?>
   </div>
                     </div>
                  </div>
               </div>

<?php include('footer.php'); ?>