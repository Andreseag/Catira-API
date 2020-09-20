<?php 
  header('Access-Control-Allow-Origin: *');
  header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
  header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE');
  header('content-type: application/json; charset=utf-8');
  http_response_code(200);
 
  if ($_SERVER['REQUEST_METHOD']=='GET') {
    if(isset($_GET['id'])){
      $id=$_GET['id'];
      $sql="SELECT * FROM `productos` WHERE id = '$id'  ";
      $return=select_get($sql);
    }elseif(isset($_GET['c'])){
      $c= $_GET['c'];
      $sql="SELECT * FROM `productos` WHERE category = '$c' ";
      $return=select_get($sql);
    }else{
      $sql="SELECT * FROM `productos` ";
      $return=select_get($sql);
    } 
  }

  function select_get($ssql){
    $obj=new conn;
    $con=$obj->query($ssql);
    $num=mysqli_num_rows($con);
    if($num>=1){
      while ($d=mysqli_fetch_assoc($con) ) {
        $data["data"][]=array_map(null, $d);
      } 
    }else{
      $data=null;
    }
    return $data;
  }

  echo json_encode($return);
?>