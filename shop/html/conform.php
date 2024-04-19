
<?php session_start(); ?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">


  <br>
<?php

   
  
  if(isset($_SESSION['cart'])){
    

    $localhost='localhost';
    $username='root';
    $password='';
    $db= 'sellproducts';
 
    $prodect_id=array_column($_SESSION['cart'],'id');

    $conn=mysqli_connect($localhost,$username,$password,$db) or die(mysqli_connect_error());
    ?>
 <div class="container">
   
      <div class=" w-75 p-3 ">
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
             <div class="col-6 ">
                  <img src="<?php echo $image;  ?>" class="border rounded pt-2 bg-light">
             </div>
             <div class="col-6  ">
             <input type="hidden" name="pid" value="<?php echo $ppid; ?>" >
                  <h1 class="pt-2 font-weight-bold"><?php echo "$tname ";?></h1><br>
                  <h3 class="pt-2">Price <?php echo "$$price";?></h3>
                   <button class="btn btn-outline-warning mx-2 btn-lg" type="submit"  name="remove" value="save">remove</button>
             </div>
             
       
      </div>
      
    </form>
    
     <br>
  
   
    
  
  
    
    

   
      <?php
    }
    }
    
  }
}
 
?>
</div>
 </div>
   <div class="container " >
    <div class="row  p-3">


</div class="mx-5 py-5">
  <div class="col-4  pt-5 p-4 py-5">
    <div class="bg-light p-4  border rounded">
  <div class="row p-4 ">
    <h1>Price Details</h1></div>
     
  
  <div class="row h-125">
     <div class="col-6" ><h3>No of items</h3>
     <h3>Delevery Charges</h3>
     </div>
     <div class="col-6">
       <h4><?php echo $con; ?></h4>
       <h4 class="col-6 text-success" >FREE</h4>
     </div>
  </div>
  <div class="row  ">
     <div class="col-6"><h3>Last  Price </h3></div>
     <div class="col-6  " ><h2 id="amount">$<?php echo $total; ?></h2></div>

  </div><br><hr>
  <div>
    <a href="thank.php " ><button class="btn btn-outline-info btn-lg" > PAY NOW  $<?= number_format($total) ?></button></a>
  </div>
</div>
</div>
  
  

<hr>


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
 




 

?>


</div>
