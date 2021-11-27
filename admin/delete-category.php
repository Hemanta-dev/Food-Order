




<?php 
   include('../config/constants.php');
   //echo "Delete Page";
   if(isset($_GET['id']) AND isset($_GET['image_name']))
   {
   //echo "get value";
   $id=$_GET['id'];
   $image_name= $_GET['image_name'];
   // remove the physical image file 
  
  
   if($image_name!=""){
      $path="../images/category/".$image_name;
     $remove=unlink($path);

    
    
     if($remove==false){
         $_SESSION['remove'] ="<div class='error'>Failed to Remove Category Image.</div>";
         header('location:'.SITEURL.'admin/manage-category.php');
         die();
     }


  }

     $sql= "DELETE FROM tbl_category WHERE id=$id";

     $res= mysqli_query($conn ,$sql);

     if($res==true){
         $_SESSION['delete'] ="<div class='success'>Category Delected Successfully.</div>";
         header('location:'.SITEURL.'admin/manage-category.php');



     }else{
        $_SESSION['delete'] ="<div class='error'>Fail to Delecte Category.</div>";
        header('location:'.SITEURL.'admin/manage-category.php');
     }



   
   }
   else
   {
 header('location:'.SITEURL.'admin/manage-category.php');
   }

   ?>


