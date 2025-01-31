<!--   Core JS Files   -->
<script src="backend/js/core/popper.min.js"></script>
<script src="backend/js/core/bootstrap.min.js"></script>
<script src="backend/js/plugins/perfect-scrollbar.min.js"></script>
<script src="backend/js/plugins/smooth-scrollbar.min.js"></script>
<script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
        var options = {
            damping: '0.5'
        }
        Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
</script>
<!-- Github buttons -->
<script async defer src="https://buttons.github.io/buttons.js"></script>
<!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
<script src="backend/js/material-dashboard.min.js?v=3.1.0"></script>



<script>
    function showAlert(message) {
        var alertMessage = document.getElementById("alertMessage");
        alertMessage.textContent = message;
        document.getElementById("alertDiv").style.display = "block";
    }
</script>

@stack('script')
