<?php

require_once '../inc/config.php';

if(isset($_GET['delete_product'])){

    $id = $_GET['delete_product'];
    $query = mysqli_query($conn, "DELETE FROM products WHERE id = '$id'");
    header('Location: index.php');



}elseif (isset($_GET['delete_cat'])){


    $id = $_GET['delete_cat'];
    $query = mysqli_query($conn, "DELETE FROM category WHERE id = '$id'");
    header('Location: index.php?cats');

}elseif(isset($_GET['add-new-product']) && $_SERVER['REQUEST_METHOD'] == 'POST'){
    $title = $_POST['title'];
    $image = $_FILES['image']['name'];
    $upload = '../img/'. basename($image);
    $desc = $_POST['desc'];
    $cat = $_POST['cat'];
    $price = $_POST['price'];

    $query = mysqli_query($conn, "INSERT INTO products(title,image,description,cat_id,price) VALUES('$title', '$image','$desc','$cat','$price')");

    if($query){
        move_uploaded_file($_FILES['image']['tmp_name'], $upload);
        header('Location: index.php');
    }else{
        die('we cant send product');
    }
}elseif(isset($_GET['add-cat']) && $_SERVER['REQUEST_METHOD'] == 'POST'){
   $cat = $_POST['cat'];
    $query = mysqli_query($conn, "INSERT INTO category(cat_name) VALUES('$cat')");
    header('Location: index.php?cats');
}elseif(isset($_GET['edit-product']) && !empty($_GET['edit-product']) && $_SERVER['REQUEST_METHOD'] == 'POST'){
    $id = $_GET['edit-product'];
    $title = $_POST['title'];
    $image = $_FILES['image']['name'];
    $upload = '../uploads/'. basename($image);
    $desc = $_POST['desc'];
    $cat = $_POST['cat'];
    $price = $_POST['price'];
    $query = mysqli_query($conn, "UPDATE products SET title = '$title' , image = '$image' , description = '$desc', cat_id = '$cat', price = '$price' WHERE id = $id");

    if($query){
        move_uploaded_file($_FILES['image']['tmp_name'], $upload);
        header('Location: index.php');
    }else{
        die('we cant send product');
    }

}