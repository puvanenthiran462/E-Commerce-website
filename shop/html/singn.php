<?php 
                         
                         $localhost='localhost';
                         $username='root';
                         $password='';
                         $db= 'sell';

                         $conn=mysqli_connect($localhost,$username,$password,$db) or die(mysqli_connect_error());

                         $uplod=mysqli_query($conn,"SELECT `image` FROM `prodect` ");
                          
                         while($row= mysqli_fetch_array($uplod))
                         {
                            echo "<img src= '$row[image]'> ";

                         }
                         

?>