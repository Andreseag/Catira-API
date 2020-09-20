<?php
class ApiController{
  public function index()             {Restapi::render("index");}
  public function products()         {Restapi::render("products");}
  public function category()         {Restapi::render("category");}
}
?>
