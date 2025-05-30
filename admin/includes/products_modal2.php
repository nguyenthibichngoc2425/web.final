<div class="modal fade" id="delete" tabindex="-1" aria-labelledby="deleteLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form method="POST" action="products_delete.php">
        <div class="modal-header">
          <h5 class="modal-title"><b>Đang xoá sản phẩm...</b></h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Đóng"></button>
        </div>
        <div class="modal-body">
          <input type="hidden" class="prodid" name="id">
          <div class="text-center">
            <p><strong>XÓA SẢN PHẨM</strong></p>
            <h2 class="fw-bold name text-danger"></h2>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
            <i class="fa-solid fa-xmark"></i> Đóng
          </button>
          <button type="submit" class="btn btn-danger" name="delete">
            <i class="fa-solid fa-trash"></i> Xoá
          </button>
        </div>
      </form>
    </div>
  </div>
</div>
<div class="modal fade" id="edit" tabindex="-1" aria-labelledby="editLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <form method="POST" action="products_edit.php">
        <div class="modal-header">
          <h5 class="modal-title"><b>Chỉnh sửa sản phẩm</b></h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Đóng"></button>
        </div>
        <div class="modal-body">
          <input type="hidden" class="prodid" name="id">

          <div class="row mb-3">
            <div class="col-md-6">
              <label for="edit_name" class="form-label">Tên sản phẩm</label>
              <input type="text" class="form-control" id="edit_name" name="name">
            </div>
            <div class="col-md-6">
              <label for="edit_category" class="form-label">Danh mục</label>
              <select class="form-select" id="edit_category" name="category">
                <option selected id="catselected"></option>
              </select>
            </div>
          </div>

          <div class="mb-3">
            <label for="edit_price" class="form-label">Giá</label>
            <input type="text" class="form-control" id="edit_price" name="price">
          </div>

          <div class="mb-3">
            <label for="editor2" class="form-label"><b>Mô tả</b></label>
            <textarea class="form-control" id="editor2" name="description" rows="5"></textarea>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
            <i class="fa-solid fa-xmark"></i> Đóng
          </button>
          <button type="submit" class="btn btn-success" name="edit">
            <i class="fa-solid fa-check"></i> Cập nhật
          </button>
        </div>
      </form>
    </div>
  </div>
</div>
