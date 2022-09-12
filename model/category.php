<?php
     require_once "db.php";

     function select_all_category()
     {
         $sql = "SELECT * FROM categories ";
         return query($sql);
     }

     function select_one_category($id)
     {
        $sql = "SELECT * FROM categories WHERE id= $id";
        return query_one($sql);
     }

     function insert_category($name)
     {
        $sql = "INSERT INTO `categories` (`name`) VALUE('$name')";
        execute($sql);
     }

     function update_category($id,$name)
     {
         $sql = "UPDATE `categories` SET `name`='".$name."' WHERE Id=".$id;
         execute($sql);
     }

     function delete_category($id)
     {
        $sql = "DELETE FROM `categories` WHERE Id=".$id;
        execute($sql);
     }

?>