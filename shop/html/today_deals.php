
<?php include("header.php"); ?>
<br><br><br><br><br><br>


<?php 
$localhost='localhost';
$username='root';
$password='';
$db= 'sellproducts';

$conn=mysqli_connect($localhost,$username,$password,$db) or die(mysqli_connect_error());

$uplod=mysqli_query($conn,"SELECT `id`, `type`, `name`, `price`, `number`, `image` FROM `prodect`  ORDER BY `id` DESC LIMIT 3");



while($row= mysqli_fetch_array($uplod))
                         {

                           $id=$row['id'];
                           $type=$row['type'];
                           $tname=$row['name'];
                           $price=$row['price'];
                           $image=$row['image'];

                           ?>
                         
                         
                           
                              <div class="box_main">
                                 <h4 class="shirt_text"> <?php echo "$tname "; ?></h4>
                                 <p class="price_text">Price  <span style="color: #262626;"><?php echo "$$price";?></span></p>
                                 <div class="tshirt_img"><img src="<?php echo $image; ?>"></div>
                                 <div class="btn_main">
                                    <div class="buy_bt"><a href="#" >Buy Now</a><i class="fas fa-shopping-cart"></i></div>
                                    <div class="seemore_bt"><a href="#">See More</a></div>
                                 </div>
                              </div>
                         </div>
                         </div>
                         </div>
                              <?php 
                         }
?>

<?php include('footer.php'); ?>