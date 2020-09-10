<?php 
header('content-type application/json '); 
header('Access-Control-Allow-Origin: *');
$obj=new conn;
http_response_code(200);
  $return['success']=true;
  $return['message']="Ruta no encontrada";
  $return['sql']=null;
  $return['num_res']=null;
  $return['data']=null;
  echo json_encode($return);
?>