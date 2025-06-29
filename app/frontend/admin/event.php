<?php
require_once(dirname(__DIR__) . '/config/paths.php');
require_once(ADMIN_TEMPLATE_PATH . 'layout.php');
?>

<link
    rel="stylesheet"
    href="/assets/plugins/mazor/extensions/choices.js/public/assets/styles/choices.css" />
<link rel="stylesheet" href="/assets/plugins/mazor/extensions/filepond/filepond.min.css" />
<link rel="stylesheet" href="/assets/plugins/mazor/extensions/filepond-plugin-image-preview/filepond-plugin-image-preview.min.css" />

<style>
    .choices__inner {
        background-color: white;
    }

    .ck-editor__editable {
        min-height: 250px;
        max-height: 500px;
        overflow-y: auto;
    }
</style>
<div id="main-content">
    <div class="page-content">
        <div class="row">
            <div class="col-12 col-lg-12">
                <div class="card">
                    <div class="card-header py-3">
                        <h3 class="card-title m-0">New Event</h3>
                    </div>
                    <div class="card-content">
                        <div class="card-body pt-2">
                            <div class="row">
                                <div class="col-md-6 col-12">
                                    <div class="form-group has-icon-left">
                                        <label for="inpEventName">Name</label>
                                        <div class="position-relative">
                                            <input type="text" class="form-control shadow-none"
                                                placeholder="Event Name" id="inpEventName" maxlength="250">
                                            <div class="form-control-icon">
                                                <i class="bi bi-calendar-event-fill"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group has-icon-left">
                                        <label for="inpEventShortDescription">Short Description</label>
                                        <div class="position-relative">
                                            <input type="text" class="form-control shadow-none"
                                                placeholder="Short Description" id="inpEventShortDescription" maxlength="500">
                                            <div class="form-control-icon">
                                                <i class="bi bi-hash"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-12">
                                    <div class="form-group has-icon-left">
                                        <label for="inpEventMaxParticipation">Maximum Seat</label>
                                        <div class="position-relative">
                                            <input type="number" class="form-control shadow-none"
                                                placeholder="Event Name" id="inpEventMaxParticipation" min="1" max="1000000">
                                            <div class="form-control-icon">
                                                <i class="bi bi-people-fill"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-12">
                                    <div class="form-group">
                                        <label for="drpEventGroup">Event Group</label>
                                        <select class="form-select shadow-none" id="drpEventGroup">
                                            <option value="">Select Event Group</option>
                                            <option value="GENERAL">GENERAL</option>
                                            <option value="WORKSHOP">WORKSHOP</option>
                                            <option value="SEMINAR">SEMINAR</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4 col-12">
                                    <div class="form-group">
                                        <label for="drpEventProps">Event Property(s)</label>
                                        <select class="choices form-select multiple-remove" multiple="multiple" id="drpEventProps">
                                            <option value="PAID">PAID</option>
                                            <option value="FUN">FUN</option>
                                            <option value="TEST">TEST</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="tblEventScheduling">Event Schedule</label>
                                        <div class="table-responsive">
                                            <table class="table table-head-fixed table-bordered table-striped" id="tblEventScheduling">
                                                <thead>
                                                    <tr>
                                                        <th>Venue</th>
                                                        <th>Date</th>
                                                        <th>Time From</th>
                                                        <th>Time To</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td><input type="text" class="form-control shadow-none venue" placeholder="Venue" value="Seminar Hall"></td>
                                                        <td><input type="text" class="form-control shadow-none eventdate" value="2025-06-29"></td>
                                                        <td><input type="text" class="form-control shadow-none timefrom" value="6:00"></td>
                                                        <td><input type="text" class="form-control shadow-none timeto" value="8:00"></td>
                                                        <td>
                                                            <button class="btn btn-sm btn-danger rounded-pill btnRemoveEventSchedule"><i class="fa fa-trash mx-2"></i></button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><input type="text" class="form-control shadow-none venue" placeholder="Venue" value="Nabil Hall"></td>
                                                        <td><input type="text" class="form-control shadow-none eventdate" value="2025-06-30"></td>
                                                        <td><input type="text" class="form-control shadow-none timefrom" value="6:00"></td>
                                                        <td><input type="text" class="form-control shadow-none timeto" value="8:00"></td>
                                                        <td>
                                                            <button class="btn btn-sm btn-danger rounded-pill btnRemoveEventSchedule"><i class="fa fa-trash mx-2"></i></button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><input type="text" class="form-control shadow-none venue" placeholder="Venue" value="Basketball Court"></td>
                                                        <td><input type="text" class="form-control shadow-none eventdate" value="2025-07-01"></td>
                                                        <td><input type="text" class="form-control shadow-none timefrom" value="6:00"></td>
                                                        <td><input type="text" class="form-control shadow-none timeto" value="8:00"></td>
                                                        <td>
                                                            <button class="btn btn-sm btn-success rounded-pill btnAddEventSchedule"><i class="fa fa-plus mx-2"></i></button>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="tblEventImage">Event Image(s)</label>
                                        <div class="table-responsive">
                                            <table class="table table-head-fixed table-bordered table-striped" id="tblEventImage">
                                                <thead>
                                                    <tr>
                                                        <th>Image</th>
                                                        <th>Is Banner?</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td><input type="file" id="inpEventImage" class="filepond" data-max-files="1" data-accepted-file-types="image/*" /></td>
                                                        <td>
                                                            <div class="form-check form-switch shadow-none">
                                                                <input class="form-check-input " type="checkbox" id="isbanner" name="isbanner">
                                                                <label class="form-check-label no-select" for="isbanner"> Is Branner Image</label>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <button class="btn btn-sm btn-success rounded-pill addImage"><i class="fa fa-plus mx-2"></i></button>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="inpEventLongDescription">Long Description</label>
                                        <div id="inpEventLongDescription"></div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group d-flex justify-content-center align-items-center gap-1">
                                        <button class=" btn btn-primary" id="btnSaveEvent"><i class="fa fa-save me-1"></i>Create</button>
                                        <button class=" btn btn-danger" id="btnResetEveything"><i class="fa fa-redo me-1"></i>Reset</button>
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
<script src="/assets/plugins/mazor/extensions/choices.js/public/assets/scripts/choices.js"></script>
<script src="/assets/plugins/ckeditor/ckeditor.js"></script>

<script type="text/javascript">
    let logoPond = null;

    $(document).ready(function() {
        ClassicEditor
            .create(document.querySelector("#inpEventLongDescription"), {
                toolbar: {
                    items: [
                        'heading',
                        '|',
                        'bold',
                        'italic',
                        'link',
                        'bulletedList',
                        'numberedList',
                        '|',
                        'indent',
                        'outdent',
                        '|',
                        'blockQuote',
                        'insertTable',
                        'undo',
                        'redo'
                    ]
                },
                htmlEmbed: {
                    showPreviews: true
                },
                table: {
                    contentToolbar: ['tableColumn', 'tableRow', 'mergeTableCells']
                },
                ui: {
                    viewportTopOffset: 50
                }
            })
            .catch(error => {
                console.error(error);
            });

        initChoice = new Choices(document.getElementById("drpEventProps"), {
            delimiter: ",",
            editItems: true,
            maxItemCount: -1,
            removeItemButton: true,
            placeholderValue: 'Select Event Properties',
        });
        initializeDateTimePickers();
        initializeFilePond();
    });

    function initializeDateTimePickers() {
        flatpickr('.eventdate', {
            enableTime: false,
            dateFormat: "Y-m-d",
        });

        flatpickr('.timefrom', {
            enableTime: true,
            noCalendar: true,
            dateFormat: "h:i K",
        });

        flatpickr('.timeto', {
            enableTime: true,
            noCalendar: true,
            dateFormat: "h:i K",
        })
    }


    function initializeFilePond() {
        if (logoPond) {
            logoPond.destroy();
            logoPond = null;
        }

        // Register plugin
        FilePond.registerPlugin(FilePondPluginImagePreview);

        // Create new instance
        logoPond = FilePond.create(
            document.querySelector('#inpEventImage'), {
                credits: null,
                allowMultiple: false,
                maxFiles: 1,
                acceptedFileTypes: 'image/*',
                // server: {
                //   url: 'upload_logo.php',
                //   process: {
                //     method: 'POST',
                //     headers: {
                //       'X-Requested-With': 'XMLHttpRequest'
                //     }
                //   }
                // },
                labelIdle: 'Drop image here or click to upload',
            }
        );
    }

    $(document).on("change", "#drpEventProps", function() {
        let selectedValues = $(this).val();
        if (selectedValues && selectedValues.length > 0) {
            console.log("Selected Event Properties: ", selectedValues);
        } else {
            console.log("No Event Properties selected.");
        }
    });

    $(document).on("click", ".btnAddEventSchedule", function() {
        $(this).removeClass("btnAddEventSchedule btn-success");
        $(this).addClass("btnRemoveEventSchedule btn-danger");
        $(this).html('<i class="fa fa-trash mx-2"></i>');
        let newRow = `<tr>
                        <td><input type="text" class="form-control shadow-none venue" placeholder="Venue"></td>
                        <td><input type="text" class="form-control shadow-none eventdate" value="${new Date()}"></td>
                        <td><input type="text" class="form-control shadow-none timefrom" value="${new Date().toLocaleTimeString()}"></td>
                        <td><input type="text" class="form-control shadow-none timeto" value="${new Date().toLocaleTimeString()}"></td>
                        <td>
                            <button class="btn btn-sm btn-success rounded-pill btnAddEventSchedule"><i class="fa fa-plus mx-2"></i></button>
                        </td>
                      </tr>`;
        $("#tblEventScheduling tbody").append(newRow);
        initializeDateTimePickers();
    });

    $(document).on("click", ".btnRemoveEventSchedule", function() {
        $(this).parents("tr").remove();
    });

    $(document).on("click", ".addImage", function() {
        let imageInput = $(this).parents("tr").find("#inpEventImage").find(".filepond--file-wrapper");
        if (imageInput && imageInput.length > 0) {
            let isBannerImageAlreadyAvailable = false;
            $("#tblEventImage tbody tr").each(function() {
                if ($(this).find(".isbannerimage").attr("data-isbannerimage") === "1") {
                    isBannerImageAlreadyAvailable = true;
                }
            });
            if (isBannerImageAlreadyAvailable && $(this).parents("tr").find("#isbanner").is(":checked")) {
                Toast.fire({
                    icon: "error",
                    title: "Banner image is already set.",
                });
            } else {
                let isBanner = $(this).parents("tr").find("#isbanner").is(":checked");
                let newDom = `<tr>
                                <td></td>
                                <td><span class="isbannerimage" data-isbannerimage=${isBanner? "1" : "0"}>${isBanner? "YES" : "NO"}</span></td>
                                <td>
                                    <button class="btn btn-sm btn-danger rounded-pill removeImage"><i class="fa fa-trash mx-2"></i></button>
                                </td>
                            </tr>`;
                $("#tblEventImage tbody").append(newDom);
                initializeFilePond();
                logoPond.removeFile(logoPond.getFile());
                $(this).parents("tr").find("#isbanner").prop("checked", false)
            }

        } else {
            Toast.fire({
                icon: "warning",
                title: "Please upload an image before adding.",
            });
        }
    });
</script>
<?php require_once(ADMIN_TEMPLATE_PATH . 'footer.php'); ?>