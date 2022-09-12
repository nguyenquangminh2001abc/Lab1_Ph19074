<table class="table">

  <a class="btn btn-primary" href="index.php?act=add_Tour">Thêm Tour</a>
  <span><?= isset($message) ?$message : "" ?></span>
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Name</th>
      <th scope="col">image</th>
      <th scope="col">intro</th>
      <th scope="col">description</th>
      <th scope="col">Number_date</th>
      <th scope="col">price</th>
      <th scope="col">Category</th>
      <th>Sửa</th>
      <th>Xóa</th>
      
    </tr>
  </thead>
  <tbody>

    <?php foreach($tour as $tour): ?>
    <tr>
      <th scope="row"><?= $tour['id']  ?></th>
      <td><?= $tour['name'] ?></td>
      <td><img width="70" src="../img/<?= $tour['image'] ?>" ></td>
      <td><?= $tour['intro'] ?></td>
      <td><?= $tour['description'] ?></td>
      <td><?= $tour['number_date'] ?></td>
      <td><?= $tour['price'] ?></td>
      <td><?= $tour['category_id'] ?></td>
      <td><a onclick=" return confirm('xác nhận xóa tour')" href="index.php?act=delete_tour&id_tour=<?= $tour['id'] ?>">Xóa</a></td>
      <td><a href="index.php?act=edit_tour&id_tour=<?= $tour['id'] ?>">Sửa</a></td>
    </tr>
    <?php endforeach ?>
  </tbody>
</table>