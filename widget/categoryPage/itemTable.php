<div class="">
  <div class="card">
    <div class="card-body">
      <div class="row m-2">
        <h3 class="card-title mr-auto">Item</h3>
        <button type="button" class="btn btn-dark active" data-toggle="modal" data-target="#supplyAdd">Add</button>
      </div>

      <div class="modal fade" id="supplyAdd" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLongTitle">Add Item</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form method="POST">
                <div class="form-group">
                  <label for="name" class="col-form-label">Name</label>
                  <input type="text" class="form-control" id="Name" name="name" placeholder="Enter your Item name">
                </div>
                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Category</label></br>
                  <select name="category" id="category" class=" form-select" aria-label="Select category">
                    <?php

                    foreach ($data_category as $category) {
                      echo '<option value="' . $category['id'] . '">' . $category['category'] . '</option>';
                    }
                    ?>
                  </select>
                </div>
                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Code</label>
                  <input type="text" class="form-control" id="code" name="code" placeholder="Enter your item Code">
                </div>
                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Stock</label>
                  <input type="text" class="form-control" id="stock" name="stock" placeholder="Enter your item stock">
                </div>

                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-dark" name="storeItem">Add Data</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>

      <table class="table ">
        <thead class="thead-dark">
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Category</th>
            <th scope="col">Code</th>
            <th scope="col">Stock</th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($data_item as $key => $item) : ?>
            <tr>
              <th scope="row"><?= $key + 1 ?></th>
              <td><?= $item['name']; ?></td>
              <td><?= $item['category']; ?></td>
              <td><?= $item['code']; ?></td>
              <td><?= $item['stock']; ?></td>
              <td>
                <form method="POST">
                  <input type="hidden" name="id" value="<?= $item['id'] ?>">
                  <button class="btn border border-dark " name="destroyItem">Delete</button>
                </form>
              </td>
            </tr>
          <?php endforeach ?>

        </tbody>
      </table>
    </div>
  </div>
</div>