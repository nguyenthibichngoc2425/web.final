<div class="modal fade" id="description" tabindex="-1" aria-labelledby="descriptionLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title"><b><span class="name"></span></b></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Đóng"></button>
      </div>
      <div class="modal-body">
        <p id="desc"></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
          <i class="fa-solid fa-xmark"></i> Đóng
        </button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="addnew" tabindex="-1" aria-labelledby="addnewLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <form method="POST" action="products_add.php" enctype="multipart/form-data">
        <div class="modal-header">
          <h5 class="modal-title"><b>Thêm sản phẩm mới</b></h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Đóng"></button>
        </div>
        <div class="modal-body">
          <div class="row mb-3">
            <div class="col-md-6">
              <label for="name" class="form-label">Tên sản phẩm</label>
              <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="col-md-6">
              <label for="category" class="form-label">Danh mục</label>
              <select class="form-select" id="category" name="category" required>
                <option value="" selected>- Chọn danh mục -</option>
              </select>
            </div>
          </div>

          <div class="row mb-3">
            <div class="col-md-6">
              <label for="price" class="form-label">Giá</label>
              <input type="text" class="form-control" id="price" name="price" required>
            </div>
            <div class="col-md-6">
              <label for="photo" class="form-label">Ảnh sản phẩm</label>
              <input class="form-control" type="file" id="photo" name="photo">
            </div>
          </div>

          <div class="mb-3">
            <label for="editor1" class="form-label"><b>Mô tả</b></label>
            <textarea class="form-control" id="editor1" name="description" rows="5" required></textarea>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
            <i class="fa-solid fa-xmark"></i> Đóng
          </button>
          <button type="submit" class="btn btn-primary" name="add">
            <i class="fa-solid fa-floppy-disk"></i> Lưu
          </button>
        </div>
      </form>
    </div>
  </div>
</div>
<div class="modal fade" id="edit_photo" tabindex="-1" aria-labelledby="editPhotoLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form method="POST" action="products_photo.php" enctype="multipart/form-data">
        <div class="modal-header">
          <h5 class="modal-title"><b><span class="name"></span></b></h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Đóng"></button>
        </div>
        <div class="modal-body">
          <input type="hidden" class="prodid" name="id">
          <div class="mb-3">
            <label for="photo" class="form-label">Ảnh mới</label>
            <input class="form-control" type="file" id="photo" name="photo" required>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
            <i class="fa-solid fa-xmark"></i> Đóng
          </button>
          <button type="submit" class="btn btn-success" name="upload">
            <i class="fa-solid fa-check"></i> Cập nhật
          </button>
        </div>
      </form>
    </div>
  </div>
</div>
