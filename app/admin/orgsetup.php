<?php
require_once(dirname(__DIR__) . '/config/paths.php');
require_once(ADMIN_TEMPLATE_PATH . 'layout.php');
?>

<link rel="stylesheet" href="/assets/plugins/mazor/extensions/filepond/filepond.min.css" />
<link rel="stylesheet" href="/assets/plugins/mazor/extensions/filepond-plugin-image-preview/filepond-plugin-image-preview.min.css" />

<div id="main-content">
  <div class="page-content">
    <section class="row">
      <div class="col-12 col-lg-12">
        <div class="card">
          <div class="card-header pb-1">
            <h4 class="card-title">Organization Information</h4>
          </div>
          <div class="card-content">
            <div class="card-body pt-2">
              <form class="form">
                <div class="row">
                  <div class="col-md-6 col-12">
                    <div class="form-group has-icon-left">
                      <label for="inpOrgName">Name</label>
                      <div class="position-relative">
                        <input type="text" class="form-control shadow-none"
                          placeholder="Organization Name" id="inpOrgName">
                        <div class="form-control-icon">
                          <i class="bi bi-building"></i>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 col-12">
                    <div class="form-group has-icon-left">
                      <label for="inpOrgEstd">Established Date</label>
                      <div class="position-relative">
                        <input type="text" class="form-control shadow-none"
                          placeholder="Org. Established" id="inpOrgEstd">
                        <div class="form-control-icon">
                          <i class="bi bi-clock-history"></i>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 col-12">
                    <div class="form-group has-icon-left">
                      <label for="inpOrgContact">Contact</label>
                      <div class="position-relative">
                        <input type="text" class="form-control shadow-none"
                          placeholder="Org. Contact" id="inpOrgContact">
                        <div class="form-control-icon">
                          <i class="bi bi-journal"></i>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 col-12">
                    <div class="form-group has-icon-left">
                      <label for="inpOrgEmail">Email</label>
                      <div class="position-relative">
                        <input type="email" class="form-control shadow-none"
                          placeholder="Org. Email" id="inpOrgEmail">
                        <div class="form-control-icon">
                          <i class="bi bi-at"></i>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 col-12">
                    <div class="form-group has-icon-left">
                      <label for="inpOrgPan">PAN No.:</label>
                      <div class="position-relative">
                        <input type="text" class="form-control shadow-none"
                          placeholder="Org. PAN Number" id="inpOrgPan">
                        <div class="form-control-icon">
                          <i class="bi bi-at"></i>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 col-12">
                    <div class="form-group has-icon-left">
                      <label for="inpOrgWebsite">Website</label>
                      <div class="position-relative">
                        <input type="text" class="form-control shadow-none"
                          placeholder="Org. Website" id="inpOrgWebsite">
                        <div class="form-control-icon">
                          <i class="bi bi-code-slash"></i>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-group has-icon-left">
                      <label for="inpOrgAddress">Address</label>
                      <div class="position-relative">
                        <input type="text" class="form-control shadow-none"
                          placeholder="Org. Address" id="inpOrgAddress">
                        <div class="form-control-icon">
                          <i class="bi bi-sign-merge-left"></i>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-group has-icon-left">
                      <label for="inpOrgMotto">Motto</label>
                      <div class="position-relative">
                        <input type="text" class="form-control shadow-none"
                          placeholder="Org. Motto" id="inpOrgMotto">
                        <div class="form-control-icon">
                          <i class="bi bi-blockquote-right"></i>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 col-12">
                    <div class="form-group has-icon-left">
                      <label for="inpOrgGmapIframe">IFrame Link:</label>
                      <div class="position-relative">
                        <input type="text" class="form-control shadow-none"
                          placeholder="Org. IFrame Link" id="inpOrgGmapIframe">
                        <div class="form-control-icon">
                          <i class="bi bi-link"></i>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 col-12">
                    <div class="form-group has-icon-left">
                      <label for="inpOrgGmap">Google Map Link</label>
                      <div class="position-relative">
                        <input type="text" class="form-control shadow-none"
                          placeholder="Org. Google Map Link" id="inpOrgGmap">
                        <div class="form-control-icon">
                          <i class="bi bi-link-45deg"></i>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="row">
                      <div class="col-md-2 col-12">
                        <div class="row">
                          <div class="col-12 d-flex justify-content-start">
                            <button type=" submit" class="btn btn-primary me-1 mb-1">Update</button>
                            <button type="reset" class="btn btn-light-secondary me-1 mb-1">Reset</button>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-5 col-12">
                        <div class="card">
                          <div class="card-header pb-1">
                            <h5 class="card-title">College Logo</h5>
                          </div>
                          <div class="card-content">
                            <div class="card-body pt-1">
                              <input type="file" id="inpOrgLogoInput" class="filepond" data-max-files="1" data-accepted-file-types="image/*" />
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-5 col-12">
                        <div class="card">
                          <div class="card-header pb-1">
                            <h5 class="card-title">College Stamp</h5>
                          </div>
                          <div class="card-content">
                            <div class="card-body pt-1">
                              <input type="file" id="inpOrgStampInput" class="filepond" data-max-files="1" data-accepted-file-types="image/*" />
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
</div>
<script src="/assets/plugins/mazor/extensions/filepond/filepond.min.js"></script>
<script src="/assets/plugins/mazor/extensions/filepond-plugin-image-preview/filepond-plugin-image-preview.min.js"></script>
<script type="text/javascript">
  $(document).ready(function() {
    initializeFilePond();
  });

  function initializeFilePond() {

    FilePond.registerPlugin(
      FilePondPluginImagePreview,
    )
    const logoPond = FilePond.create(
      document.querySelector('#inpOrgLogoInput'), {
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
        labelIdle: 'Drop logo here or click to upload',
      }
    );

    const stampPond = FilePond.create(
      document.querySelector('#inpOrgStampInput'), {
        credits: null,
        allowMultiple: false,
        maxFiles: 1,
        acceptedFileTypes: 'image/*',
        // server: {
        //   url: 'upload_stamp.php',
        //   process: {
        //     method: 'POST',
        //     headers: {
        //       'X-Requested-With': 'XMLHttpRequest'
        //     }
        //   }
        // },
        labelIdle: 'Drop stamp here or click to upload',
      }
    );
  }
</script>
<?php require_once(ADMIN_TEMPLATE_PATH . 'footer.php'); ?>