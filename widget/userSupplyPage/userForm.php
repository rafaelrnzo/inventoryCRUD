<div class="">
  <div class="card">
    <div class="card-body">
      <div class="row m-2">
        <h3 class="card-title mr-auto">User </h3>
        <button type="button" class="btn btn-dark active" data-toggle="modal" data-target="#exampleModalCenter">Add</button>
      </div>
 
      <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLongTitle">Add User</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form method="POST">
                <div class="form-group">
                  <label for="name" class="col-form-label">Name</label>
                  <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name">
                </div>
                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Role</label>
                  <input type="text" class="form-control" id="role" name="role" placeholder="Enter role">
                </div>
                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Number</label>
                  <input type="text" class="form-control" id="no" name="no" placeholder="Enter your number">
                </div>
                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Telp</label>
                  <input type="text" class="form-control" id="telp" name="telp" placeholder="Enter your telphone">
                </div>

                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-dark" name="store">Add Data</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>

      <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Role</th>
            <th scope="col">Number</th>
            <th scope="col">Telp</th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($data_user as $key => $user) { ?>
            <tr>
              <th scope="row"><?= $key + 1 ?></th>
              <td><?= $user['name']; ?></td>
              <td><?= $user['role']; ?></td>
              <td><?= $user['no']; ?></td>
              <td><?= $user['telp']; ?></td>
              <td>
                <form method="POST">
                  <input type="hidden" name="id" value="<?= $user['id'] ?>">
                  <button class="btn border border-dark " name="destroy">Delete</button>
                </form>
              </td>
            </tr>
          <?php } ?>

        </tbody>
      </table>
    </div>
  </div>
</div>