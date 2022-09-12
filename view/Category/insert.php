
<form action="index.php?act=add_category" class="m-auto"  method="post">

 <span><?= isset($mesage)?$mesage :"" ?></span>
 <div class="mb-3 row">
    <h2 for="staticEmail" class="col-sm-2 col-form-label">Thêm Loại Tour</h2>
    
  </div>
  <div class="mb-3 row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Tên Loại Tour</label>
    <div class="col-sm-10">
      <input type="text" name="name_tour" class="form-control" id="inputPassword">
    </div>
    <p class="text-danger"><?= isset($err_category) ?$err_category :"" ?></p>
    <input type="submit" value="thêm" name="btn_add_tour" class="btn btn-primary ">
  </div>
</form>