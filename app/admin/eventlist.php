<?php
require_once(dirname(__DIR__) . '/config/paths.php');
require_once(ADMIN_TEMPLATE_PATH . 'layout.php');
?>


<div id="main-content">
    <div class="page-content">
        <section class="modals">
        </section>

        <div class="row">
            <div class="col-12 col-lg-12">
                <div class="card">
                    <div class="card-header py-3">
                        <h3 class="card-title m-0">Event(s)</h3>
                    </div>
                    <div class="card-content">
                        <div class="card-body pt-2">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group d-flex flex-column flex-md-row justify-content-start align-items-start align-items-md-center gap-1">
                                        <a class="btn btn-primary" href="/admin/event.php"><i class="fa fa-plus me-1"></i>New</a>

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

                                        <input type="text" class="form-control form-control-sm shadow-none" placeholder="Search Events"
                                            id="searchEvent" style="max-width: 250px;">
                                    </div>
                                </div>
                                <hr class="my-2" />
                                <div class="col-12">
                                    <div class="table-responsive">
                                        <table class="table mb-0 table-striped" id="eventTable">
                                            <thead>
                                                <tr>
                                                    <th>S.No</th>
                                                    <th>Name</th>
                                                    <th>Description</th>
                                                    <th>Group</th>
                                                    <th class="excelDisable">Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1.</td>
                                                    <td>Test Event</td>
                                                    <td>Test Description</td>
                                                    <td>GENERAL</td>
                                                    <td class="excelDisable">
                                                        <button class="btn btn-sm btn-success rounded-pill"><i class="fa fa-edit mx-2"></i></button>
                                                        <button class="btn btn-sm btn-danger rounded-pill"><i class="fa fa-trash mx-2"></i></button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>2.</td>
                                                    <td>Tech Talk</td>
                                                    <td>TechTalk Event</td>
                                                    <td>BCA</td>
                                                    <td class="excelDisable">
                                                        <button class="btn btn-sm btn-success rounded-pill"><i class="fa fa-edit mx-2"></i></button>
                                                        <button class="btn btn-sm btn-danger rounded-pill"><i class="fa fa-trash mx-2"></i></button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>2.</td>
                                                    <td>Tech Blitz</td>
                                                    <td>Tech Blitz</td>
                                                    <td>Faculty</td>
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
    $(document).ready(function() {
        $('#inpEventLongDescription').summernote({
            height: 250,
            placeholder: 'Enter long description here...',
        });

        let drpEventProps = document.getElementById('drpEventProps');
        new Choices(drpEventProps, {
            delimiter: ",",
            editItems: true,
            maxItemCount: -1,
            removeItemButton: true,
        });
    });

    $(document).on("change", "#drpEventProps", function() {
        let selectedValues = $(this).val();
        if (selectedValues && selectedValues.length > 0) {
            console.log("Selected Event Properties: ", selectedValues);
        } else {
            console.log("No Event Properties selected.");
        }
    });
    $(document).on('click', '.export', function() {
        var option = $(this).attr("data-export");
        let styleTitle = `Events List`;
        let styleDescription = `List of all events in the system.`;
        switch (option) {
            case 'xls':
                fnExcelParmReport("#eventTable", styleTitle, styleDescription, `events`);
                break;
            case 'xlsx':
                fnExcelParmReportXlsx("#eventTable", styleTitle, styleDescription, `events`);
                break;
            case 'csv':
                fnCsvParmReport("#eventTable", styleTitle, styleDescription, `events`);
                break;
        }
    });
    $("#searchEvent").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#eventTable tbody tr").filter(function() {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
        });
    });
</script>
<?php require_once(ADMIN_TEMPLATE_PATH . 'footer.php'); ?>