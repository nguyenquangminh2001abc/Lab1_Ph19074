<form action="index.php?act=edit_cate" class="m-auto"  method="post">


  <a href="index.php?act=category" class="btn btn-primary">Danh Sách</a>
  <p><?= isset($mesage)?$mesage :"" ?></p>
  <div class="mb-3 row">
  <h2 for="staticEmail" class="col-sm-2 col-form-label">Sửa Loại Tour</h2>
    
  </div>
  <div class="mb-3 row">
  <input type="hidden" name="id_cate" value="<?= $cate['id']  ?>">
  <label for="inputPassword" class="col-sm-2 col-form-label">Tên Loại Tour</label>
  <div class="col-sm-10">
  <input type="text" name="name_cate" class="form-control" Value="<?= $cate['name'] ?>">
  </div>
  <p class="text-danger"><?= isset($err_category) ?$err_category :"" ?></p>
  <input type="submit" value="Cập Nhập" name="btn_edit_tour" class="btn btn-primary ">
  </div>
</form>


 