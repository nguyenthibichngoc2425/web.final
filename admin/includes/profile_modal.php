<div class="modal fade" id="profile" tabindex="-1" aria-labelledby="profileLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form method="POST" action="profile_update.php?return=<?php echo basename($_SERVER['PHP_SELF']); ?>" enctype="multipart/form-data">
        <div class="modal-header">
          <h5 class="modal-title"><b>Admin Profile</b></h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Đóng"></button>
        </div>

        <div class="modal-body">
          <div class="mb-3 row">
            <label for="email" class="col-sm-3 col-form-label">Email</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="email" name="email" value="<?php echo $admin['email']; ?>">
            </div>
          </div>

          <div class="mb-3 row">
            <label for="password" class="col-sm-3 col-form-label">Password</label>
            <div class="col-sm-9">
              <input type="password" class="form-control" id="password" name="password" value="<?php echo $admin['password']; ?>">
            </div>
          </div>

          <div class="mb-3 row">
            <label for="firstname" class="col-sm-3 col-form-label">Firstname</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="firstname" name="firstname" value="<?php echo $admin['firstname']; ?>">
            </div>
          </div>

          <div class="mb-3 row">
            <label for="lastname" class="col-sm-3 col-form-label">Lastname</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="lastname" name="lastname" value="<?php echo $admin['lastname']; ?>">
            </div>
          </div>

          <div class="mb-3 row">
            <label for="photo" class="col-sm-3 col-form-label">Photo</label>
            <div class="col-sm-9">
              <input class="form-control" type="file" id="photo" name="photo">
            </div>
          </div>

          <hr>

          <div class="mb-3 row">
            <label for="curr_password" class="col-sm-3 col-form-label">Current Password</label>
            <div class="col-sm-9">
              <input type="password" class="form-control" id="curr_password" name="curr_password" placeholder="Input current password to save changes" required>
            </div>
          </div>
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
            <i class="fa-solid fa-xmark"></i> Close
          </button>
          <button type="submit" class="btn btn-success" name="save">
            <i class="fa-solid fa-check"></i> Save
          </button>
        </div>
      </form>
    </div>
  </div>
</div>
