<?php
require_once(dirname(__DIR__) . '/config/paths.php');
require_once(ADMIN_TEMPLATE_PATH . 'layout.php');
?>

<div id="main-content">
    <div class="page-content">
        <section class="modals">
            <div class="modal fade" id="eventPropertyAddEditModal" tabindex="-1" role="dialog"
                aria-labelledby="eventPropertyAddEditModalTitle" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-centered modal-dialog-scrollable"
                    role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="eventPropertyAddEditModalTitle">Add Property</h5>
                            <button type="button" class="btn btn-sm btn-light" data-bs-dismiss="modal"
                                aria-label="Close">
                                <i data-feather="x"></i>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-6 col-12">
                                    <div class="form-group has-icon-left">
                                        <label for="inpPropertyName">Name</label>
                                        <div class="position-relative">
                                            <input type="text" class="form-control shadow-none"
                                                placeholder="Property Name" id="inpPropertyName">
                                            <div class="form-control-icon">
                                                <i class="bi bi-funnel"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group has-icon-left">
                                        <label for="inpPropertyAlias">Alias</label>
                                        <div class="position-relative">
                                            <input type="text" class="form-control shadow-none"
                                                placeholder="Property Alias" id="inpPropertyAlias">
                                            <div class="form-control-icon">
                                                <i class="bi bi-hash"></i>
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
                        <h3 class="card-title m-0">Event Property(s)</h3>
                    </div>
                    <div class="card-content">
                        <div class="card-body pt-2">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group d-flex flex-column flex-md-row justify-content-start align-items-start align-items-md-center gap-1">
                                        <button class="btn btn-primary" data-bs-toggle="modal"
                                            data-bs-target="#eventPropertyAddEditModal"><i class="fa fa-plus me-1"></i>New</button>

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

                                        <input type="text" class="form-control form-control-sm shadow-none" placeholder="Search Event Properties"
                                            id="searchEventProperty" style="max-width: 250px;">
                                    </div>
                                </div>
                                <hr class="my-2" />
                                <div class="col-12">
                                    <div class="table-responsive">
                                        <table class="table mb-0 table-striped" id="eventPropertyTable">
                                            <thead>
                                                <tr>
                                                    <th>S.No</th>
                                                    <th>Name</th>
                                                    <th>Alias</th>
                                                    <th class="excelDisable">Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1.</td>
                                                    <td>Normal</td>
                                                    <td>NRML</td>
                                                    <td class="excelDisable">
                                                        <button class="btn btn-sm btn-success rounded-pill"><i class="fa fa-edit mx-2"></i></button>
                                                        <button class="btn btn-sm btn-danger rounded-pill"><i class="fa fa-trash mx-2"></i></button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>2.</td>
                                                    <td>Fun</td>
                                                    <td>Fun</td>
                                                    <td class="excelDisable">
                                                        <button class="btn btn-sm btn-success rounded-pill"><i class="fa fa-edit mx-2"></i></button>
                                                        <button class="btn btn-sm btn-danger rounded-pill"><i class="fa fa-trash mx-2"></i></button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>3.</td>
                                                    <td>Entertainment</td>
                                                    <td>Entnt</td>
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
        let styleTitle = `Event Properties List`;
        let styleDescription = `List of all event properties in the system.`;
        switch (option) {
            case 'xls':
                fnExcelParmReport("#eventPropertyTable", styleTitle, styleDescription, `event_properties`);
                break;
            case 'xlsx':
                fnExcelParmReportXlsx("#eventPropertyTable", styleTitle, styleDescription, `event_properties`);
                break;
            case 'csv':
                fnCsvParmReport("#eventPropertyTable", styleTitle, styleDescription, `event_properties`);
                break;
        }
    });
    $("#searchEventProperty").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#eventPropertyTable tbody tr").filter(function() {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
        });
    });
</script>

<?php require_once(ADMIN_TEMPLATE_PATH . 'footer.php'); ?>