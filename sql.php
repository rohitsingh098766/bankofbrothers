<?php

echo "atleast print now";
     session_start();
     include './connection.php';


   
                    
     $query = "select * from user";
$query = mysqli_query($connection,$query);
while($row = mysqli_fetch_assoc($query)){

// echo  $row['user_name']." is users ";

echo "bro ";
}


?>