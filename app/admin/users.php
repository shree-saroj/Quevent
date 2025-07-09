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
                            <h5 class="modal-title" id="usersAddEditModalTitle">Add User</h5>
                            <button type="button" class="btn btn-sm btn-light" data-bs-dismiss="modal"
                                aria-label="Close">
                                <i data-feather="x"></i>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-4 col-8">
                                    <div class="form-group has-icon-left">
                                        <label for="inpFirstName">First Name</label>
                                        <div class="position-relative">
                                            <input type="text" class="form-control shadow-none"
                                                placeholder="First Name" id="inpFirstName">
                                            <div class="form-control-icon">
                                                <i class="bi bi-text-left"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-8">
                                    <div class="form-group has-icon-left">
                                        <label for="inpMiddleName">Middle Name</label>
                                        <div class="position-relative">
                                            <input type="text" class="form-control shadow-none"
                                                placeholder="Middle Name" id="inpMiddleName">
                                            <div class="form-control-icon">
                                                <i class="bi bi-text-center"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-8">
                                    <div class="form-group has-icon-left">
                                        <label for="inpLastName">Last Name</label>
                                        <div class="position-relative">
                                            <input type="text" class="form-control shadow-none"
                                                placeholder="Last Name" id="inpLastName">
                                            <div class="form-control-icon">
                                                <i class="bi bi-text-right"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-md-4 col-8">
                                    <div class="form-group has-icon-left">
                                        <label for="inpDOB">Date of Birth</label>
                                        <div class="position-relative">
                                            <input type="date" class="form-control shadow-none"
                                                placeholder="Date of Birth" id="inpDOB">
                                            <div class="form-control-icon">
                                                <i class="bi bi-calendar3"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-8 col-16">
                                    <div class="form-group has-icon-left">
                                        <label for="inpAddress">Address</label>
                                        <div class="position-relative">
                                            <input type="text" class="form-control shadow-none"
                                                placeholder="Address" id="inpAddress">
                                            <div class="form-control-icon">
                                                <i class="bi bi-geo"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-md-4 col-8">
                                    <div class="form-group has-icon-left">
                                        <label for="inpCountry">Country</label>
                                        <div class="position-relative">
                                            <input type="text" class="form-control shadow-none"
                                                placeholder="Country" id="inpCountry">
                                            <div class="form-control-icon">
                                                <i class="bi bi-globe-central-south-asia"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-8">
                                    <div class="form-group has-icon-left">
                                        <label for="inpState">State</label>
                                        <div class="position-relative">
                                            <input type="text" class="form-control shadow-none"
                                                placeholder="State" id="inpState">
                                            <div class="form-control-icon">
                                                <i class="bi bi-flag"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-8">
                                    <div class="form-group has-icon-left">
                                        <label for="inpCity">City</label>
                                        <div class="position-relative">
                                            <input type="text" class="form-control shadow-none"
                                                placeholder="City" id="inpCity">
                                            <div class="form-control-icon">
                                                <i class="bi bi-buildings"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-md-4 col-8">
                                    <div class="form-group has-icon-left">
                                        <label for="inpContact">Contact</label>
                                        <div class="position-relative">
                                            <input type="text" class="form-control shadow-none"
                                                placeholder="Contact" id="inpContact">
                                            <div class="form-control-icon">
                                                <i class="bi bi-telephone"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-8 col-16">
                                    <div class="form-group has-icon-left">
                                        <label for="inpEmail">Email</label>
                                        <div class="position-relative">
                                            <input type="text" class="form-control shadow-none"
                                                placeholder="Email" id="inpEmail">
                                            <div class="form-control-icon">
                                                <i class="bi bi-envelope-fill"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-md-6 col-12">
                                    <div class="form-group has-icon-left">
                                        <label for="inpUserGroup">User Group</label>
                                        <div class="position-relative">
                                            <select class="form-select shadow-none" id="inpUserGroup">
                                                <option selected>Select UserGroup</option>
                                                <option value="">General</option>
                                                <option value="">Students</option>
                                                <option value="">Faculty</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group has-icon-left">
                                        <label for="inpFaculty">Faculty</label>
                                        <div class="position-relative">
                                            <select class="form-select shadow-none" id="inpUserGroup">
                                                <option selected>Select Faculty</option>
                                                <option value="">BCA</option>
                                                <option value="">BBA</option>
                                                <option value="">BPH</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4 col-8">
                                    <div class="form-group">
                                        <label for="inpDocument">Document</label>
                                        <div class="position-relative">
                                            <input type="file" class="form-control form-control shadow-none"
                                                id="inpDocument">
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
                        <h3 class="card-title m-0">Users</h3>
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

                                        <input type="text" class="form-control form-control-sm shadow-none" placeholder="Search Users"
                                            id="searchUser" style="max-width: 250px;">
                                    </div>
                                </div>

                                <hr class="my-2" />
                                <div class="col-12">
                                    <div class="table-responsive">
                                        <table class="table mb-0 table-striped table-head-fixed table-bordered" id="usersTable">
                                            <thead>
                                                <tr>
                                                    <th>S.No</th>
                                                    <th>Name </th>
                                                    <th>Email</th>
                                                    <th>Contact</th>
                                                    <th class="excelDisable">Password</th>
                                                    <th class="excelDisable">Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1.</td>
                                                    <td>Anish Acharya</td>
                                                    <td>anish@insoft.com</td>
                                                    <td>9800000000</td>
                                                    <td class="excelDisable">
                                                        <button class="btn btn-sm btn-secondary rounded-pill"><i class="bi bi-envelope-check-fill mx-2"></i></button>
                                                        <button class="btn btn-sm btn-light rounded-pill"><i class="bi bi-gear-wide-connected mx-2"></i></button>
                                                    </td>
                                                    <td class="excelDisable">
                                                        <button class="btn btn-sm btn-primary rounded-pill"><i class="bi bi-eye-fill mx-2"></i></button>
                                                        <button class="btn btn-sm btn-success rounded-pill"><i class="fa fa-edit mx-2"></i></button>
                                                        <button class="btn btn-sm btn-danger rounded-pill"><i class="fa fa-trash mx-2"></i></button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>2.</td>
                                                    <td>Saroj Baral</td>
                                                    <td>saroj@insoftnepal.com</td>
                                                    <td>9800000000</td>
                                                    <td class="excelDisable">
                                                        <button class="btn btn-sm btn-secondary rounded-pill"><i class="bi bi-envelope-check-fill mx-2"></i></button>
                                                        <button class="btn btn-sm btn-light rounded-pill"><i class="bi bi-gear-wide-connected mx-2"></i></button>
                                                    </td>
                                                    <td class="excelDisable">
                                                        <button class="btn btn-sm btn-primary rounded-pill"><i class="bi bi-eye-fill mx-2"></i></button>
                                                        <button class="btn btn-sm btn-success rounded-pill"><i class="fa fa-edit mx-2"></i></button>
                                                        <button class="btn btn-sm btn-danger rounded-pill"><i class="fa fa-trash mx-2"></i></button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>3.</td>
                                                    <td>Shriyanka Bhandari</td>
                                                    <td>shriyankabhandari@gmail.com</td>
                                                    <td>9800000000</td>
                                                    <td class="excelDisable">
                                                        <button class="btn btn-sm btn-secondary rounded-pill"><i class="bi bi-envelope-check-fill mx-2"></i></button>
                                                        <button class="btn btn-sm btn-light rounded-pill"><i class="bi bi-gear-wide-connected mx-2"></i></button>
                                                    </td>
                                                    <td class="excelDisable">
                                                        <button class="btn btn-sm btn-primary rounded-pill"><i class="bi bi-eye-fill mx-2"></i></button>
                                                        <button class="btn btn-sm btn-success rounded-pill"><i class="fa fa-edit mx-2"></i></button>
                                                        <button class="btn btn-sm btn-danger rounded-pill"><i class="fa fa-trash mx-2"></i></button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>3.</td>
                                                    <td>Dipen Pun</td>
                                                    <td>pundipen@gmail.com</td>
                                                    <td>9800000000</td>
                                                    <td class="excelDisable">
                                                        <button class="btn btn-sm btn-secondary rounded-pill"><i class="bi bi-envelope-check-fill mx-2"></i></button>
                                                        <button class="btn btn-sm btn-light rounded-pill"><i class="bi bi-gear-wide-connected mx-2"></i></button>
                                                    </td>
                                                    <td class="excelDisable">
                                                        <button class="btn btn-sm btn-primary rounded-pill"><i class="bi bi-eye-fill mx-2"></i></button>
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
    $(document).ready(function() {
        $('#inpDOB').flatpickr({
            dateFormat: "Y-m-d",
            maxDate: "today",
            defaultDate: "today"
        });
    });

    $(document).on('click', '.export', function() {
        var option = $(this).attr("data-export");
        let styleTitle = `Users List`;
        let styleDescription = `List of all users in the system.`;
        switch (option) {
            case 'xls':
                fnExcelParmReport("#usersTable", styleTitle, styleDescription, `users`);
                break;
            case 'xlsx':
                fnExcelParmReportXlsx("#usersTable", styleTitle, styleDescription, `users`);
                break;
            case 'csv':
                fnCsvParmReport("#usersTable", styleTitle, styleDescription, `users`);
                break;
        }
    });
    $("#searchUser").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#usersTable tbody tr").filter(function() {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
        });
    });
</script>

<?php require_once(ADMIN_TEMPLATE_PATH . 'footer.php'); ?>