<?php 
  

  require_once "../model/category.php";
  require_once "../model/db.php" ;
  require_once "../model/tour.php" ;
  require_once "header.php" ;
  

  if(isset($_GET['act']))
  {

  $act = $_GET['act'];
  switch($act)
  {
     case 'tours' :
     $tour = select_all_tour() ;
     require_once "./tours/show.php";
     break ;
     
     case 'edit_tour' :
      if(isset($_GET['id_tour']))
       {
        $id = $_GET['id_tour'];
        $tour = select_one_tour($id);
        $cate = select_all_category() ;
       }

       if(isset($_POST['btn_edit_tour']))
       {
        $id = $_POST['id_tour'];
        $name = $_POST['name_tour'];
        $intro = $_POST['intro'];
        $description = $_POST['description'];
        $price = $_POST['price'];
        $date = $_POST['number_date'];
        $category = $_POST['category'];
        $file = $_FILES['image_tour'];
        $image = $file['name'];
        $imghidden = $_POST["img_hidden"];
        $dir = "../img/$image";
        $size = $file['size'];
        $img = ['jpg','png'];
        $ext = pathinfo($image,PATHINFO_EXTENSION);
        if($name==''){
            $err_name_tour  = "Bạn chưa nhập tên";
        }
        if($price <  0){
            $err_price = "Bạn phải nhập số dương";
        }
        if($date <  0){
            $err_number_date = "Bạn phải nhập số dương";
        }
        if( $size >2000000){
            $err_image = "Bạn chưa tải ảnh hoặc ảnh không đúng kích cỡ";
        }
        if($size > 0 && !in_array($ext,$img)){
            $err_image = "Bạn tải không phải ảnh";
        }
        else if(empty($err_name_tour) && empty( $err_price) && empty($err_number_date) && empty($err_image)){

            if(empty($image))
            {
              update_tour($id,$name,$imghidden,$intro,$description,$date,$price,$category);
              $message = "update tour thành công";
              $tour = select_all_tour() ;
              require_once "./tours/show.php";
              die;
            }
            else
            {
            move_uploaded_file($file['tmp_name'],$dir);
            update_tour($id,$name,$image,$intro,$description,$date,$price,$category);
            $message = "update tour thành công";
            $tour = select_all_tour() ;
            require_once "./tours/show.php";
            die;
            }
        }
       }
      require_once "./tours/edit_tour.php";
      break ;

     case 'delete_tour' :
      if(isset($_GET['id_tour']))
       {
        $id = $_GET['id_tour'];
        delete_tour($id);
        $message = "đã xóa thành công";
       
        };
        $tour = select_all_tour() ;
      require_once "./tours/show.php";
      break ;

     case 'add_Tour' :
       
        if(isset($_POST['btn_add_tour']))
        {
            
            $name = $_POST['name_tour'];
            $intro = $_POST['intro'];
            $description = $_POST['description'];
            $price = $_POST['price'];
            $date = $_POST['number_date'];
            $category = $_POST['category'];
            $file = $_FILES['image_tour'];
            $image = $file['name'];
            $dir = "../img/$image";
            $size = $file['size'];
            $img = ['jpg','png'];
            $ext = pathinfo($image,PATHINFO_EXTENSION);
            if($name==''){
                $err_name_tour  = "Bạn chưa nhập tên";
            }
            if($price <  0){
                $err_price = "Bạn phải nhập số dương";
            }
            if($date <  0){
                $err_number_date = "Bạn phải nhập số dương";
            }
            if($size <= 0 || $size >2000000){
                $err_image = "Bạn chưa tải ảnh hoặc ảnh không đúng kích cỡ";
            }
            if($size > 0 && !in_array($ext,$img)){
                $err_image = "Bạn tải không phải ảnh";
            }
            if(empty($err_name_tour) && empty( $err_price) && empty($err_number_date) && empty($err_image)){
                move_uploaded_file($file['tmp_name'],$dir);
                insert_tour($name,$image,$intro,$description,$date,$price,$category);
                $message = "thêm tour thành công";
                $tour = select_all_tour() ;
                require_once "./tours/show.php";
                die;
            }

        };

        $cate = select_all_category() ;
        require_once "./tours/insert_tour.php";
        break ;

     case 'category' :
     $category = select_all_category() ;
     require_once "./Category/show.php";
     break;

     case "add_category" :
        if(isset($_POST['btn_add_tour']))
        {
         
             $name = $_POST['name_tour'];
             if($name == '')
             {
               $err_category = "bạn chưa nhập tên loại tour";
             }
             else
             {
               insert_category($name);
               $mesage = "Thêm Loại Tour Thành Công";
             }
   
        }
        require_once "./Category/insert.php";
       break ;
     case 'delete_cate' :
        if(isset($_GET['id_category']))
       {
        $id = $_GET['id_category'];
        delete_category($id);
        $message = "đã xóa thành công";
       
        };
        require_once "index.php?act=category";
        break;
    case 'edit_cate' :

            if(isset($_GET['id_category']))
           {

            $id = $_GET['id_category'];
            $cate = select_one_category($id);
            require_once "./Category/edit_cate.php";
           
           };
           if(isset($_POST['btn_edit_tour']))
           {
              $id_cate = $_POST['id_cate'];
              $name_cate = $_POST['name_cate'];
               
              update_category($id_cate,$name_cate);
              $message = "cập nhập thành công";
              $category = select_all_category() ;
             require_once "./Category/show.php";            
           }
    break;

    
     
  }
  
}




?>



    
