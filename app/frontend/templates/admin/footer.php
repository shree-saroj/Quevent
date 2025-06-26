<footer>
  <div class="footer clearfix mb-0 text-muted">
    <div class="float-end">
      <p><span id="copyrightyear"></span> &copy; Quevent</p>
    </div>
  </div>
</footer>
</div>
</div>
<script src="/assets/plugins/mazor/extensions/@fortawesome/fontawesome-free/js/all.min.js"></script>
<script src="/assets/plugins/mazor/extensions/toastify-js/src/toastify.js"></script>
<script src="/assets/plugins/mazor/static/js/components/dark.js"></script>
<script src="/assets/plugins/mazor/extensions/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<script src="/assets/plugins/mazor/compiled/js/app.js"></script>
<script type="text/javascript">
  $(document).ready(function() {
    document.getElementById('copyrightyear').textContent = new Date().getFullYear();
    GlobalInitialFunctionCalls();
  });

  function GlobalInitialFunctionCalls() {
    setActiveMenu();
  }

  function setActiveMenu() {
    let currentPath = window.location.pathname;
    let activeElement = $(`a[href="${currentPath}"]`);
    if (activeElement.length == 0) {
      currentPath = currentPath.substring(0, currentPath.indexOf('/', 1));
      activeElement = $(`.sidebar-item a[href="${currentPath}"]`);
    }
    activeElement.parents(".submenu").removeClass("submenu-open");
    activeElement.parents(".submenu").removeClass("submenu-closed");
    activeElement.parents(".submenu").addClass("submenu-open");
    activeElement.parents(".sidebar-item").addClass("active");
    activeElement.parent("li").addClass("active");
  }
</script>
</body>

</html>