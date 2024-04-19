<?php include('header.php'); ?>



<br><br><br>
<br><br><br>
<br><br><br>
<br><br><br>

    <div >
      <form action="" method="POST" enctype="multipart/form-data" class="p-2 m-2 bg-info text-white shadow rounded-2">
        <label class="p-2 m-2 w-25">Product Type :</label>
        <select name="ptype"class="form-select" aria-label="Default select example" required>
           <option selected>Open this select menu</option>
           <option name="type1" value="Man & Woman Fashion">Man & Woman Fashion</option>
           <option name="type1" value="Jewellery Accessories">Jewellery Accessories</option>
         <option  name="type1" value="Electronic">Electronic</option>
         </select>
         <br><br>
         <label class="p-2 m-2 w-25">Product Name</label>
         <input type="text" name="name" required><br><br>
        <label class="p-2 m-2 w-25" >price :</label>
        <input type ="text" name="price" required><br><br>
        <label class="p-2 m-2 w-25">contect No :</label>
        <input type ="text" name="number" required><br><br>
        <label class="p-2 m-2 w-25 ">image  :</label>
        <input type ="file" name="image" required ><br><br>
        <input type="submit"  name="submit" value="submit">

      </form>
    </div>
</body>
</html>

<?php   


    $localhost='localhost';
    $username='root';
    $password='';
    $db= 'sellproducts';

    $conn=mysqli_connect($localhost,$username,$password,$db) or die(mysqli_connect_error());

  
  
    if(isset($_POST['submit']))
    {

     
     
      $type=filter_input(INPUT_POST, 'ptype', FILTER_SANITIZE_STRING);
      $name=$_POST['name'];
      $price=$_POST['price'];
      $number=$_POST['number'];
      $img_loc=$_FILES['image']['tmp_name'];
      $image=$_FILES['image']['name'];
      $img_des ="images/".$image;
     
      

      $query="INSERT INTO `prodect`(`type`, `name`, `price`, `number`, `image`) VALUES ('$type','$name','$price','$number','$img_des')";

      $res=mysqli_query($conn, $query);
      if(isset($res)){
        move_uploaded_file($img_loc,"images/".$image);
       echo '<script>alert("success")</script>';
      }
      else{
        echo "not successfull";
     }

   }
    

    
?>

<?php include('footer.php'); ?>

