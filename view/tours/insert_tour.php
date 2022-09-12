<form action="index.php?act=add_Tour" class="m-auto" enctype="multipart/form-data"  method="post">

 <span><?= isset($mesage)?$mesage :"" ?></span>
 <div class="mb-3 row">
    <h2 for="staticEmail" class="col-sm-2 col-form-label">Thêm Tour</h2>
    
  </div>
  <div class="mb-3 row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Tên Loại Tour</label>
    <div class="col-sm-10">
      <input type="text" name="name_tour" class="form-control">
    </div>
    <p class="text-danger"><?= isset($err_name_tour) ?$err_name_tour :"" ?></p>

    <label for="inputPassword" class="col-sm-2 col-form-label">Ảnh tour</label>
    <div class="col-sm-10">
      <input type="file" name="image_tour" class="form-control" >
    </div>
    <p class="text-danger"><?= isset($err_image) ?$err_image :"" ?></p>

    <label for="inputPassword" class="col-sm-2 col-form-label">Intro</label>
    <div class="col-sm-10">
      <input type="text" name="intro" class="form-control" >
    </div>
    <p class="text-danger"><?= isset($err_intro) ?$err_intro :"" ?></p>

    <label for="inputPassword" class="col-sm-2 col-form-label">description</label>
    <div class="col-sm-10">
      <input type="text" name="description" class="form-control" >
    </div>
    <p class="text-danger"><?= isset($err_description) ?$err_description :"" ?></p>

    <label for="inputPassword" class="col-sm-2 col-form-label">number_date</label>
    <div class="col-sm-10">
      <input type="date" name="number_date" class="form-control" >
    </div>
    <p class="text-danger"><?= isset($err_number_date) ?$err_number_date :"" ?></p>

    <label for="inputPassword" class="col-sm-2 col-form-label">price</label>
    <div class="col-sm-10">
      <input type="number" name="price" class="form-control" >
    </div>
    <p class="text-danger"><?= isset($err_price) ?$err_price :"" ?></p>

    <label for="inputPassword" class="col-sm-2 col-form-label">Category</label>
    <div class="col-sm-10">
      <Select name="category">
      <option value=""></option>
          <?php foreach($cate as $cate) : ?>
            <option value="<?= $cate['id'] ?>"><?= $cate['name'] ?></option>
          <?php endforeach ?>
      </Select>
    </div>
    <p class="text-danger"><?= isset($err_cate) ?$err_cate :"" ?></p>

    <input type="submit" value="thêm" name="btn_add_tour" class="btn btn-primary ">
  </div>
</form>