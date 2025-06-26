<?php
require_once(dirname(__DIR__) . '/config/paths.php');
require_once(ADMIN_TEMPLATE_PATH . 'layout.php');
?>

<div id="main-content">
  <div class="page-content">

    <section class="section">
      <div class="modal fade" id="departmentAddEditModal" tabindex="-1" role="dialog"
        aria-labelledby="departmentAddEditModalTitle" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-centered modal-dialog-scrollable"
          role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="departmentAddEditModalTitle">Add Department</h5>
              <button type="button" class="btn btn-sm btn-light" data-bs-dismiss="modal"
                aria-label="Close">
                <i data-feather="x"></i>
              </button>
            </div>
            <div class="modal-body">
              <div class="row">
                <div class="col-md-6 col-12">
                  <div class="form-group has-icon-left">
                    <label for="inpDeptName">Name</label>
                    <div class="position-relative">
                      <input type="text" class="form-control shadow-none"
                        placeholder="Department Name" id="inpDeptName">
                      <div class="form-control-icon">
                        <i class="bi bi-building"></i>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-12">
                  <div class="form-group has-icon-left">
                    <label for="inpDeptAlias">Alias</label>
                    <div class="position-relative">
                      <input type="text" class="form-control shadow-none"
                        placeholder="Alias" id="inpDeptAlias">
                      <div class="form-control-icon">
                        <i class="bi bi-clock-history"></i>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-12 col-12">
                  <div class="form-group has-icon-left">
                    <label for="inpDeptDesc">Description</label>
                    <div class="position-relative">
                      <textarea type="text" class="form-control shadow-none" placeholder="Description" id="inpDeptDesc" rows="5"></textarea>
                      <div class="form-control-icon">
                        <i class="fa fa-align-left"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-light-secondary"
                data-bs-dismiss="modal">
                <i class="bx bx-x d-block d-sm-none"></i>
                <span class="d-none d-sm-block">Close</span>
              </button>
              <button type="button" class="btn btn-primary ms-1" data-bs-dismiss="modal">
                <i class="bx bx-check d-block d-sm-none"></i>
                <span class="d-none d-sm-block">Save</span>
              </button>
            </div>
          </div>
        </div>
      </div>
    </section>

    <div class="row">
      <div class="col-12 col-lg-12">
        <div class="card">
          <div class="card-header py-3">
            <h3 class="card-title m-0">Department List</h3>
          </div>
          <div class="card-content">
            <div class="card-body pt-2">
              <div class="row">
                <div class="col-12">
                  <button class="btn btn-primary" data-bs-toggle="modal"
                    data-bs-target="#departmentAddEditModal"><i class="fa fa-plus me-1"></i>New</button>
                </div>
                <hr class="my-2" />
                <div class="col-12">
                  <div class="table-responsive">
                    <table class="table mb-0 table-striped" id="departmentTable">
                      <thead>
                        <tr>
                          <th>S.No</th>
                          <th>Department Name</th>
                          <th>Department Alias</th>
                          <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>1.</td>
                          <td>Department Name</td>
                          <td>Department Alias</td>
                          <td>
                            <button class="btn btn-sm btn-success rounded-pill"><i class="fa fa-edit mx-2"></i></button>
                            <button class="btn btn-sm btn-danger rounded-pill"><i class="fa fa-trash mx-2"></i></button>
                          </td>
                        </tr>
                        <tr>
                          <td>2.</td>
                          <td>Department Name</td>
                          <td>Department Alias</td>
                          <td>
                            <button class="btn btn-sm btn-success rounded-pill"><i class="fa fa-edit mx-2"></i></button>
                            <button class="btn btn-sm btn-danger rounded-pill"><i class="fa fa-trash mx-2"></i></button>
                          </td>
                        </tr>
                        <tr>
                          <td>3.</td>
                          <td>Department Name</td>
                          <td>Department Alias</td>
                          <td>
                            <button class="btn btn-sm btn-success rounded-pill"><i class="fa fa-edit mx-2"></i></button>
                            <button class="btn btn-sm btn-danger rounded-pill"><i class="fa fa-trash mx-2"></i></button>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script src="/assets/plugins/mazor/extensions/filepond/filepond.min.js"></script>
<script src="/assets/plugins/mazor/extensions/filepond-plugin-image-preview/filepond-plugin-image-preview.min.js"></script>
<script src="/assets/plugins/mazor/extensions/toastify-js/src/toastify.js"></script>
<script type="text/javascript">
  $(document).ready(function() {});
</script>
<?php require_once(ADMIN_TEMPLATE_PATH . 'footer.php'); ?>