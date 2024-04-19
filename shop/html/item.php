
<?php 

if(isset($_POST['add']))
{
    
  // $id=$_POST['id'];
    if(isset($_SESSION['cart'])){
        

        $item_array_id=array_column($_SESSION['cart'],"id");
       

        if(in_array($_POST['id'],$item_array_id))
        {
            echo "<script>alert('Already Added')</script>";
            echo "<script>window.location='index.php'</script>";
            
        }
        else{
            $count=count($_SESSION['cart']);
            $item = array(
           
                'id'=> $_POST['id']
                  
            );

            $_SESSION['cart'][$count]=$item;
            echo "<script>window.location='index.php'</script>";


        }

    }
    else{

        $item = array(
           
            'id'=> $_POST['id']
              
        );

        $_SESSION['cart'][0]=$item;
         print_r($_SESSION['cart']);
    }
}


?>