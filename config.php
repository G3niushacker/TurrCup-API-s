<?php

$conn = mysqli_connect('localhost','root','','doorstep');

if($conn){
    echo "Successfully";
}
else{
    echo "Feiled";
}
?>