
     <?php
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
              <form action="" method="POST" >
              <div class="btn_main"><button class="btn btn-warning my-3" type="submit" name="add" > Add  <i class="fas fa-shopping-cart"></i></button>
              <input type='hidden' name='id' value=<?php echo $id; ?> >
              </form>
              <div class="seemore_bt"><a href="#">See More</a></div>
           </div>
         </div>
        </div>
        <?php
        
        
    




