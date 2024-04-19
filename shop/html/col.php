
<?php include('header.php'); ?> 

<div class="container">
<div class="row ">
  <div class="col-8 w-75 p-3 ">
  <br>
<?php
  if(empty($_SESSION['cart'])){
    ?>
    <h1 class="text-warning py-5">NO PRODUCT SELECTED .....! </h1>
    <?php
  }
  else if(isset($_SESSION['cart'])){
    

    $localhost='localhost';
    $username='root';
    $password='';
    $db= 'sellproducts';
 
    $prodect_id=array_column($_SESSION['cart'],'id');

    $conn=mysqli_connect($localhost,$username,$password,$db) or die(mysqli_connect_error());
    ?>
     
        <?php

        $total=0;
        $con=0;
   foreach($prodect_id as  $key => $id ){
   if($id!=null)
   {
    $pid=$id;
   

    $uplod=mysqli_query($conn,"SELECT * FROM `prodect`where `id`= $pid");
?>

 
    
    <?php
    while($row= mysqli_fetch_array($uplod))
    {
       $id=0;
       $ra=1;
      $tname=$row['name'];
      $price=$row['price'];
      $image=$row['image'];

      $total=$total +(int)$price;
      $con++;
     ?>

    <form action="" method="POST"> 
     <?php  $ppid=$row['id']; ?>
     <div class="row bg-white border rounded ">
         <div class="col-3 pt-2">
         <img src="<?php echo $image;  ?>" class="border rounded pt-2 bg-light">
         </div>
         <div class="col-6">
          <input type="hidden" name="pid" value="<?php echo $ppid; ?>" >
         <h1 class="pt-2 font-weight-bold"><?php echo "$tname ";?></h1><br>
         <h3 class="pt-2">Price <?php echo "$$price";?></h3> 
          <button class="btn btn-outline-warning " type="submit" value="save">save for later </button>
          <button class="btn btn-outline-danger mx-2" type="submit"  name="remove" value="save">remove</button>
        </div>
        

         

      </div>
      
    </form>
     <br>
  
   
    
  
  
    
    

   
      <?php
    }
    }
    
  }
  
 
?>
  </div>
  <div class="col-4  pt-5 p-4 py-5">
    <div class="bg-light p-4  border rounded">
  <div class="row p-4 ">
    <h1>Price Details</h1></div>
     
  
  <div class="row h-125">
     <div class="col-6" ><h3>No of items</h3>
     <h3>Delevery Charges</h3>
     </div>
     <div class="col-6">
       <h4><?php echo $con; ?>
          </h4>
          <h4 class="col-6 text-success">FREE</h4>
        </div>
      </div>
      <div class="row  btn-warning">
        <div class="col-6">
          <h3>Amount Payable </h3>
        </div>
        <div class="col-6  ">
          <h2 id="amount">$
            <?php echo $total; ?>
          </h2>
        </div>
  
      </div><br>
      <hr>
      <div>
        <a href="pay.php"><button class="btn btn-outline-info btn-lg"> BUY NOW! $
            <?= number_format($total) ?>
          </button></a>
      </div>
    </div>
  
  </div>
 </div>
</div>

<hr>
<?php include('footer.php'); ?> 

<?php 
 if(isset($_POST['remove']))
 {
    $pro_id=$_POST['pid'];
  foreach($_SESSION['cart'] as $key => $value){
    if($value['id']==$pro_id)
    {
      unset($_SESSION['cart'][$key]);
      echo "<script>alert('prodect has been removed')</script>";
      echo "<script>window.location='col.php'</script>";
    }
  }


 }
}
else{
  
}



 

?>

