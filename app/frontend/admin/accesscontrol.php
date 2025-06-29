<?php
require_once(dirname(__DIR__) . '/config/paths.php');
require_once(ADMIN_TEMPLATE_PATH . 'layout.php');
?>

<div id="main-content">
    <div class="page-content">
        <div class="row">
            <div class="col-12 col-lg-12">
                <div class="card">
                    <div class="card-header py-3">
                        <h3 class="card-title m-0">Access Control</h3>
                    </div>
                    <div class="card-content">
                        <div class="card-body pt-2">
                            <div class="row">
                                <div class="col-md-3 col-4">
                                    <div class="form-group has-icon-left">
                                        <label for="drpUserGroup">User Group</label>
                                        <div class="position-relative">
                                            <select class="form-select shadow-none" id="drpUserGroup">
                                                <option selected>Select UserGroup</option>
                                                <option value="">General</option>
                                                <option value="">Students</option>
                                                <option value="">Faculty</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-4">
                                    <div class="form-group has-icon-left">
                                        <label for="drpAppModules">Modules</label>
                                        <div class="position-relative">
                                            <select class="form-select shadow-none" id="drpAppModules">
                                                <option value="">All</option>
                                                <option value="">General Setup</option>
                                                <option value="">Manage Events</option>
                                                <option value="">Events</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-3 col-4" style="display: flex; align-items: flex-end; margin-bottom: 4px;">
                                    <div class="form-group" style="margin-right: 5px;">
                                        <div class="position-relative">
                                            <button id="btnSearch" class="btn btn-primary">
                                                <i class="bi bi-search"></i> Search
                                            </button>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="position-relative" style="margin-left: 5px;">
                                            <button id="btnSave" class="btn btn-success">
                                                <i class="fa fa-save"></i> Save
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <hr class="my-2" />
                            <div class="col-12">
                                <div class="table-responsive">
                                    <table class="table mb-0 table-striped" id="userGroupTable">
                                        <thead>
                                            <tr>
                                                <th>S.No</th>
                                                <th>User Group</th>
                                                <th>Module</th>
                                                <th>Can View</th>
                                                <th>Can Create</th>
                                                <th>Can Update</th>
                                                <th>Can Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1.</td>
                                                <td>General</td>
                                                <td>General Setup</td>
                                                <td>
                                                    <input type="checkbox" class="form-check-input form-check-primary" checked
                                                        name="customCheck" id="customColorCheck1">
                                                </td>
                                                <td>
                                                    <input type="checkbox" class="form-check-input form-check-primary" checked
                                                        name="customCheck" id="customColorCheck1">
                                                </td>
                                                <td>
                                                    <input type="checkbox" class="form-check-input form-check-primary" checked
                                                        name="customCheck" id="customColorCheck1">
                                                </td>
                                                <td>
                                                    <input type="checkbox" class="form-check-input form-check-primary" checked
                                                        name="customCheck" id="customColorCheck1">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>2.</td>
                                                <td>General</td>
                                                <td>Manage Events</td>
                                                <td>
                                                    <input type="checkbox" class="form-check-input form-check-primary" checked
                                                        name="customCheck" id="customColorCheck1">
                                                </td>
                                                <td>
                                                    <input type="checkbox" class="form-check-input form-check-primary" checked
                                                        name="customCheck" id="customColorCheck1">
                                                </td>
                                                <td>
                                                    <input type="checkbox" class="form-check-input form-check-primary" checked
                                                        name="customCheck" id="customColorCheck1">
                                                </td>
                                                <td>
                                                    <input type="checkbox" class="form-check-input form-check-primary" checked
                                                        name="customCheck" id="customColorCheck1">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>3.</td>
                                                <td>General</td>
                                                <td>Events</td>
                                                <td>
                                                    <input type="checkbox" class="form-check-input form-check-primary" checked
                                                        name="customCheck" id="customColorCheck1">
                                                </td>
                                                <td>
                                                    <input type="checkbox" class="form-check-input form-check-primary" checked
                                                        name="customCheck" id="customColorCheck1">
                                                </td>
                                                <td>
                                                    <input type="checkbox" class="form-check-input form-check-primary" checked
                                                        name="customCheck" id="customColorCheck1">
                                                </td>
                                                <td>
                                                    <input type="checkbox" class="form-check-input form-check-primary" checked
                                                        name="customCheck" id="customColorCheck1">
                                                </td>
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

<?php require_once(ADMIN_TEMPLATE_PATH . 'footer.php'); ?>