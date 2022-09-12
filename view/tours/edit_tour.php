<form action="index.php?act=edit_tour" class="m-auto" enctype="multipart/form-data"  method="post">

 <span><?= isset($mesage)?$mesage :"" ?></span>
 <div class="mb-3 row">
    <h2 for="staticEmail" class="col-sm-2 col-form-label">Thêm Tour</h2>
    
  </div>
  <div class="mb-3 row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Tên Loại Tour</label>
    <div class="col-sm-10">
      <input type="text" name="name_tour" class="form-control" value="<?= $tour['name'] ?>">
    </div>
    <p class="text-danger"><?= isset($err_name_tour) ?$err_name_tour :"" ?></p>
    <input type="hidden" name="id_tour" value="<?= $tour['id']?>">
    <input type="hidden" name="img_hidden" value="<?= $tour['image']?>">
    <label for="inputPassword" class="col-sm-2 col-form-label">Ảnh tour</label>
    <div class="col-sm-10">
      <input type="file" name="image_tour" class="form-control" >
    </div>
    <p class="text-danger"><?= isset($err_image) ?$err_image :"" ?></p>

    <label for="inputPassword" class="col-sm-2 col-form-label">Intro</label>
    <div class="col-sm-10">
      <input type="text" name="intro" class="form-control mt-3" value="<?= $tour['intro']?>"  >
    </div>
     
    <label for="inputPassword" class="col-sm-2 col-form-label">description</label>
    <div class="col-sm-10">
      <input type="text" name="description" class="form-control mt-3" value="<?= $tour['description']?>" >
    </div>
    <p class="text-danger"><?= isset($err_description) ?$err_description :"" ?></p>

    <label for="inputPassword" class="col-sm-2 col-form-label">number_date</label>
    <div class="col-sm-10">
      <input type="date" name="number_date" class="form-control" value="<?= $tour['number_date']?>" >
    </div>
    <p class="text-danger"><?= isset($err_number_date) ?$err_number_date :"" ?></p>

    <label for="inputPassword" class="col-sm-2 col-form-label">price</label>
    <div class="col-sm-10">
      <input type="number" name="price" class="form-control" value="<?= $tour['price']?>" >
    </div>
    <p class="text-danger"><?= isset($err_price) ?$err_price :"" ?></p>

    <label for="inputPassword" class="col-sm-2 col-form-label">Category</label>
    <div class="col-sm-10">
      <Select name="category">
      
          <?php foreach($cate as $cate) : ?>

            <?php if($cate['id'] == $tour['category_id']) : ?>
            <option selected value="<?= $cate['id'] ?>"><?= $cate['name'] ?></option>
            <?php else : ?>
            <option value="<?= $cate['id'] ?>"><?= $cate['name'] ?></option>
            <?php endif ?>
          <?php endforeach ?>
      </Select>
    </div>
    <p class="text-danger"><?= isset($err_cate) ?$err_cate :"" ?></p>

    <input type="submit" value="thêm" name="btn_edit_tour" class="btn btn-primary ">
  </div>
</form>