<div class="">
  <div class="card">
    <div class="card-body">
      <div class="row m-2">
        <h3 class="card-title mr-auto">Item</h3>
        <button type="button" class="btn btn-dark active" data-toggle="modal" data-target="#categoryAdd">Add</button>
      </div>

      <div class="modal fade" id="categoryAdd" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLongTitle">Add Category</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form method="POST">
                <div class="form-group">
                  <label for="name" class="col-form-label">Name</label>
                  <input type="text" class="form-control" id="category" name="category" placeholder="Enter your Category name">
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-dark" name="storeCategory">Add Data</button>
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
            <th scope="col">Category</th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($data_category as $key => $category) : ?>
            <tr>
              <th scope="row"><?= $key + 1 ?></th>
              <td><?= $category['category']; ?></td>
              <td>
                <form method="POST">
                  <input type="hidden" name="id" value="<?= $category['id'] ?>">
                  <button class="btn border border-dark " name="destroyCategory">Delete</button>
                </form>
              </td>
            </tr>
          <?php endforeach ?>

        </tbody>
      </table>
    </div>
  </div>
</div>