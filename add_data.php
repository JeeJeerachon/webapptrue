<?php 
    require("connect.php");
    $img = "picture/";


    $name = $_REQUEST["name_version"];
    $brand = $_REQUEST["brand"];
    $price = $_REQUEST["price"];
    $img .= $_REQUEST["img"];

    $sql = "INSERT INTO product (brand_name,price,img_product,name_version) VALUE ('$brand','$price','$img','$name')";
    
    mysqli_query($conn,$sql);

    header("Location:index.php");


?>