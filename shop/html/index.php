
       <?php include('header.php'); ?>
      <!-- banner bg main end -->
      <!-- fashion section start -->
      <div class="fashion_section">
         <div id="main_slider" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <div class="container">
                     <h1 class="fashion_taital">Man & Woman Fashion</h1>
                     <div class="fashion_section_2">
                        <div class="row">
                          <?php $localhost='localhost';
                         $username='root';
                         $password='';
                         $db= 'sellproducts';
                         $n=0;

                         $conn=mysqli_connect($localhost,$username,$password,$db) or die(mysqli_connect_error());

                         $uplod=mysqli_query($conn,"SELECT * FROM `prodect` where prodect.type='Man & Woman Fashion' ");

                         while($row= mysqli_fetch_array($uplod))
                         {

                           

                          
                           if($n<3){

                           ?>
                          <?php include('fun.php'); ?>
                          <?php  
                         }else{
                         ?>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <div class="container">
                     <h1 class="fashion_taital">Man & Woman Fashion</h1>
                     <div class="fashion_section_2">
                        <div class="row">
                        
                         
                          <?php include('fun.php'); ?>
                          <?php  
                         }
                         $n++;
                        }
                         ?>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
            <i class="fa fa-angle-left"></i>
            </a>
            <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
            <i class="fa fa-angle-right"></i>
            </a>
         </div>
      </div>
      <!-- fashion section end -->
      <!-- electronic section start -->
      <div class="fashion_section">
         <div id="electronic_main_slider" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <div class="container">
                     <h1 class="fashion_taital">Electronic</h1>
                     <div class="fashion_section_2">
                        <div class="row">
                            
                        <?php $localhost='localhost';
                         $username='root';
                         $password='';
                         $db= 'sellproducts';
                         $p=0;

                         $conn=mysqli_connect($localhost,$username,$password,$db) or die(mysqli_connect_error());

                         $uplodee=mysqli_query($conn,"SELECT * FROM `prodect` where prodect.type='Electronic' ");

                         while($row= mysqli_fetch_array($uplodee))
                         {

                          
                           if($p<3){

                           ?>
                         
                          <?php include('fun.php'); ?>
                          <?php  
                         }else{
                         ?>

                        </div>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <div class="container">
                     <h1 class="fashion_taital">Electronic</h1>
                     <div class="fashion_section_2">
                        <div class="row">
                           
                        <?php include('fun.php'); ?>
                          <?php  
                         }
                         $p++;
                        }
                         ?>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <a class="carousel-control-prev" href="#electronic_main_slider" role="button" data-slide="prev">
            <i class="fa fa-angle-left"></i>
            </a>
            <a class="carousel-control-next" href="#electronic_main_slider" role="button" data-slide="next">
            <i class="fa fa-angle-right"></i>
            </a>
         </div>
      </div>
      <!-- electronic section end -->
      <!-- jewellery  section start -->
      <div class="jewellery_section">
         <div id="jewellery_main_slider" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <div class="container">
                     <h1 class="fashion_taital">Jewellery Accessories</h1>
                     <div class="fashion_section_2">
                        <div class="row">
                        <?php $localhost='localhost';
                         $username='root';
                         $password='';
                         $db= 'sellproducts';
                         $m=0;

                         $conn=mysqli_connect($localhost,$username,$password,$db) or die(mysqli_connect_error());

                         $uplodge=mysqli_query($conn,"SELECT  * FROM `prodect` where prodect.type='Jewellery Accessories'  ");

                         while($row= mysqli_fetch_array($uplodge))
                         {

                          

                           
                         
                                if($m<3){  ?>
                            <?php include('fun.php'); ?>
                          <?php  
                         }

                         else{
                         ?>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <div class="container">
                     <h1 class="fashion_taital">Jewellery Accessories</h1>
                     <div class="fashion_section_2">
                        <div class="row">
                          
                        <?php include('fun.php'); ?>
                          <?php  
                          
                         }$m++;
                        }
                         ?>


                        </div>
                     </div>
                  </div>
               </div>
               
            </div>
            <a class="carousel-control-prev" href="#jewellery_main_slider" role="button" data-slide="prev">
            <i class="fa fa-angle-left"></i>
            </a>
            <a class="carousel-control-next" href="#jewellery_main_slider" role="button" data-slide="next">
            <i class="fa fa-angle-right"></i>
            </a>
            <div class="loader_main">
               <div class="loader"></div>
            </div>
         </div>
      </div>
      <!-- jewellery  section end -->
      <?php include('item.php'); ?>
      <?php include('footer.php') ?>
      