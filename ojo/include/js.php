<!-- jQuery -->
<script src="assets/vendor/jquery/jquery.min.js"></script>
<!-- popper -->
<script src="assets/vendor/popper/popper.min.js"></script>
<!-- Bootstrap 4 -->
<script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
<!-- overlayScrollbars -->
<script src="assets/vendor/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- chart -->
<script src="assets/vendor/chart/chart.min.js"></script>
<!-- datatables -->
<script src="assets/vendor/datatables/js/jquery.dataTables.min.js"></script>
<script src="assets/vendor/datatables/js/dataTables.bootstrap4.min.js"></script>
<!-- fancybox -->
<script src="assets/vendor/fancybox/jquery.fancybox.min.js"></script>
<!-- sweetalert2 -->
<script src="assets/vendor/sweetalert2/sweetalert2.all.min.js"></script>
<!-- owlCarousel2 -->
<script src="assets/vendor/owlCarousel2/js/owl.carousel.min.js"></script>
<!-- AdminLTE App -->
<script src="assets/vendor/adminlte/adminlte.min.js"></script>

<!-- config -->
<script src="assets/js/datatables-config.js"></script>
<script src="assets/js/fancybox-config.js"></script>
<script src="assets/js/sweetalert2-config.js"></script>
<script src="assets/js/owlCarousel2-config.js"></script>

<script>
	$(document).ready(function() {
		$("#keyword").on("keyup", function() {
			$.get("search_ajax.php?keyword=" + $("#keyword").val(), function(data) {
				$("#searchMovie").html(data);
			});
		});
	});
</script>

