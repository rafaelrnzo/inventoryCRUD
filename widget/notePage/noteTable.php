<div class="">
  <div class="card">
    <div class="card-body">
      <div class="row m-2">
        <h3 class="card-title mr-auto">Note's</h3>
        <button type="button" class="btn btn-dark active" data-toggle="modal" data-target="#noteAdd">Add</button>
      </div>

      <div class="modal fade" id="noteAdd" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLongTitle">Add Note</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form method="POST">
                <div class="form-group">
                  <label for="name" class="col-form-label">Title</label>
                  <input type="text" class="form-control" id="title" name="title" placeholder="Enter your Item name">
                </div>
                <div class="form-group">
                  <label for="exampleFormControlTextarea1">Message</label>
                  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="msg" id="msg" ></textarea>
                </div>

                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-dark" name="storeNote">Add Data</button>
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
            <th scope="col">Title</th>
            <th scope="col">Message</th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($data_note as $key => $note) : ?>
            <tr>
              <th scope="row"><?= $key + 1 ?></th>
              <td><?= $note['title']; ?></td>
              <td><?= $note['msg']; ?></td>
              <td>
                <form method="POST">
                  <input type="hidden" name="id" value="<?= $note['id'] ?>">
                  <button class="btn border border-dark " name="destroyNote">Delete</button>
                </form>
              </td>
            </tr>
          <?php endforeach ?>

        </tbody>
      </table>
    </div>
  </div>
</div>