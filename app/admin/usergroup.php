<?php
require_once(dirname(__DIR__) . '/config/paths.php');
require_once(ADMIN_TEMPLATE_PATH . 'layout.php');
?>

<div id="main-content">
    <div class="page-content">
        <section class="modals">
            <div class="modal fade" id="userGroupsAddEditModal" tabindex="-1" role="dialog"
                aria-labelledby="userGroupsAddEditModalTitle" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-centered modal-dialog-scrollable"
                    role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="userGroupsAddEditModalTitle">Add Group</h5>
                            <button type="button" class="btn btn-sm btn-light" data-bs-dismiss="modal"
                                aria-label="Close">
                                <i data-feather="x"></i>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-6 col-12">
                                    <div class="form-group has-icon-left">
                                        <label for="inpGroupName">Name</label>
                                        <div class="position-relative">
                                            <input type="text" class="form-control shadow-none"
                                                placeholder="Group Name" id="inpGroupName">
                                            <div class="form-control-icon">
                                                <i class="bi bi-people"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group has-icon-left">
                                        <label for="inpGroupAlias">Alias</label>
                                        <div class="position-relative">
                                            <input type="text" class="form-control shadow-none"
                                                placeholder="Group Alias" id="inpGroupAlias">
                                            <div class="form-control-icon">
                                                <i class="bi bi-person-circle"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 col-12">
                                    <div class="form-group has-icon-left">
                                        <label for="inpGroupDesc">Description</label>
                                        <div class="position-relative">
                                            <textarea type="text" class="form-control shadow-none" placeholder="Description" id="inpGroupDesc" rows="5"></textarea>
                                            <div class="form-control-icon">
                                                <i class="bi bi-file-text"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-light-secondary"
                                data-bs-dismiss="modal">Close
                            </button>
                            <button type="button" class="btn btn-primary ms-1" data-bs-dismiss="modal">Save
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
                        <h3 class="card-title m-0">User Group(s)</h3>
                    </div>
                    <div class="card-content">
                        <div class="card-body pt-2">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group d-flex flex-column flex-md-row justify-content-start align-items-start align-items-md-center gap-1">
                                        <button class="btn btn-primary" data-bs-toggle="modal"
                                            data-bs-target="#userGroupsAddEditModal"><i class="fa fa-plus me-1"></i>New</button>

                                        <div class="btn-group dropdown">
                                            <button class="btn btn-sm btn-success export" data-export="csv"><i class="fa fa-file-excel me-1"></i>Export</button>
                                            <button type="button" class="btn btn-success btn-sm dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="sr-only">Toggle Dropdown</span>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item export" data-export="xls">XLS</a>
                                                <a class="dropdown-item export" data-export="xlsx">XLSX</a>
                                            </div>
                                        </div>

                                        <input type="text" class="form-control form-control-sm shadow-none" placeholder="Search User Groups"
                                            id="searchUserGroup" style="max-width: 250px;">
                                    </div>
                                </div>
                                <hr class="my-2" />
                                <div class="col-12">
                                    <div class="table-responsive">
                                        <table class="table mb-0 table-striped table-head-fixed table-bordered" id="userGroupTable">
                                            <thead>
                                                <tr>
                                                    <th>S.No</th>
                                                    <th>Name</th>
                                                    <th>Alias</th>
                                                    <th>Description</th>
                                                    <th class="excelDisable">Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1.</td>
                                                    <td>General</td>
                                                    <td>GNL</td>
                                                    <td>General user Group</td>
                                                    <td class="excelDisable">
                                                        <button class="btn btn-sm btn-success rounded-pill"><i class="fa fa-edit mx-2"></i></button>
                                                        <button class="btn btn-sm btn-danger rounded-pill"><i class="fa fa-trash mx-2"></i></button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>2.</td>
                                                    <td>Students</td>
                                                    <td>STD</td>
                                                    <td>Students Group</td>
                                                    <td class="excelDisable">
                                                        <button class="btn btn-sm btn-success rounded-pill"><i class="fa fa-edit mx-2"></i></button>
                                                        <button class="btn btn-sm btn-danger rounded-pill"><i class="fa fa-trash mx-2"></i></button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>3.</td>
                                                    <td>Faculty</td>
                                                    <td>FAC</td>
                                                    <td>Faculty Group</td>
                                                    <td class="excelDisable">
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
<script type="text/javascript">
    $(document).on('click', '.export', function() {
        var option = $(this).attr("data-export");
        let styleTitle = `User Group List`;
        let styleDescription = `List of all user group(s) in the system.`;
        switch (option) {
            case 'xls':
                fnExcelParmReport("#userGroupTable", styleTitle, styleDescription, `usergroups`);
                break;
            case 'xlsx':
                fnExcelParmReportXlsx("#userGroupTable", styleTitle, styleDescription, `usergroups`);
                break;
            case 'csv':
                fnCsvParmReport("#userGroupTable", styleTitle, styleDescription, `usergroups`);
                break;
        }
    });
    $("#searchUserGroup").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#userGroupTable tbody tr").filter(function() {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
        });
    });
</script>
<?php require_once(ADMIN_TEMPLATE_PATH . 'footer.php'); ?>