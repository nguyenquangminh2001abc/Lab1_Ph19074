

<table class="table">

  <a class="btn btn-primary" href="index.php?act=add_category">Thêm Loại Tour</a>
  <span><?= isset($message) ?$message : "" ?></span>
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Name</th>
      <th>Sửa</th>
      <th>Xóa</th>
      
    </tr>
  </thead>
  <tbody>

    <?php foreach($category as $cate): ?>
    <tr>
      <th scope="row"><?= $cate['id']  ?></th>
      <td><?= $cate['name'] ?></td>
      <td><a href="index.php?act=delete_cate&id_category=<?= $cate['id'] ?>">Xóa</a></td>
      <td><a href="index.php?act=edit_cate&id_category=<?= $cate['id'] ?>">Sửa</a></td>
    </tr>
    <?php endforeach ?>
  </tbody>
</table>
