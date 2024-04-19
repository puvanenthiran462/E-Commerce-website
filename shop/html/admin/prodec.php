
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" type="text/css" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <!-- fonts -->
      <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
      <!-- font awesome -->
      <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <!--  -->
      <!-- owl stylesheets -->
      <link href="https://fonts.googleapis.com/css?family=Great+Vibes|Poppins:400,700&display=swap&subset=latin-ext" rel="stylesheet">
      <link rel="stylesheet" href="css/owl.carousel.min.css">
      <link rel="stylesoeet" href="css/owl.theme.default.min.css">
      
    
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
      
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

   

<div class="fashion_section">
         <div class="container">
                    <h1 class="fashion_taital">prodect</h1>
                    <div class="fashion_section_2">
                       <div class="row">
<?php 
$localhost='localhost';
$username='root';
$password='';
$db= 'sellproducts';

$conn=mysqli_connect($localhost,$username,$password,$db) or die(mysqli_connect_error());

$uplod=mysqli_query($conn,"SELECT * FROM `prodect` where 1");



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
       <div class="tshirt_img"><img src="/shop/html/<?php echo $image; ?>" alt="<?php echo"$image";?>"></div>
       <div class="btn_main">
            <button type="submit" name="update" class="btn btn-outline-info btn-lg">updated</button>
            <button type="submit" name="update" class="btn btn-outline-warning btn-lg">delete</button>
       </div>
    </div>
 </div>
<?php  
}

?>
  