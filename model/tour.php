<?php 
     require_once "db.php";

     function select_one_tour($id)
     {
         $sql = "SELECT * FROM tours WHERE id=".$id;
         return query_one($sql);
     }

     function select_all_tour()
     {
         $sql = "SELECT * FROM tours";
         return query($sql);
     }

     function insert_tour($name,$image,$intro,$des,$number_date,$price,$category_id)
     {
         $sql = "INSERT INTO tours(`name`,`image`,`intro`,`description`,`number_date`,`price`,`category_id`) VALUE('$name','$image' , '$intro', '$des', '$number_date' , '$price' ,'$category_id')";
         execute($sql);
     }
     
     function update_tour($id_tour,$name,$image, $intro,$des,$number_date,$price,$category_id)
     {
         $sql = "UPDATE tours SET `name`='".$name."',`image`='".$image."' , `intro`='".$intro."' , `description`='".$des."' , `number_date`='".$number_date."' , `price`='".$price."' ,`category_id`='".$category_id."' WHERE id='".$id_tour."'";
         execute($sql);
     }

     function delete_tour($id)
     {
         $sql = "DELETE FROM tours WHERE id=$id";
         execute($sql);
     }
     


?>