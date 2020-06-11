<?php
$conn = mysqli_connect('localhost','root','','doorstep');
$request =$_SERVER['REQUEST_METHOD'];

$data=array();
switch ($request){
    case 'GET':
        response(getData());
    break;
default:
    break;
}

function getData(){
    global $conn;
    $query = mysqli_query($conn,"select * from salonsubservice");
    while($row=mysqli_fetch_assoc($query)){
        $data[]=array("id"=>$row['id'],"image"=>$row['image'],"title"=>$row['title']);
    }
    return $data;
}
function response($data){
    echo json_encode($data);
}

?>