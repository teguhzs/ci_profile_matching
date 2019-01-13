<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">


<head>
	<!-- load file head -->
	<?php $this->load->view('admin/_template/head.php'); ?>
	<!-- ========================== -->
	
</head>

<!-- load file navbar  -->
<?php $this->load->view('admin/_template/navbar.php'); ?>
<!-- ==========================  -->

<body id="page-top">

	<div id="wrapper">

		<!-- load file sidebar  -->
		<?php $this->load->view('admin/_template/sidebar.php'); ?>
		<!-- =======================   -->

		<div id="content-wrapper">

			<div class="container-fluid">

				<!-- load file Breadcrumbs-->
				<?php $this->load->view('admin/_template/breadcrumbs.php'); ?>
				<!-- ========================== -->
				<?php if ($this->session->flashdata('success')): ?>
						<div class="alert alert-success" role="alert">
							<?php echo $this->session->flashdata('success'); ?>
						</div>
				<?php endif; ?>

				<div class="card mb-3">
                <div class="card-header">
                  <i class="fas fa-chart-bar"></i>
                  Grafik</div>
                <div class="card-body">
                  <canvas id="myBarChart" height='70'></canvas>
                </div>
              </div>

				<!-- tabel grafik -->
				<?php $this->load->view('admin/tabel_grafik.php'); ?>
				<?php
        			foreach($hasil as $data){
            		$kode_alternatif[] = $data->kode_alternatif;
            		$nilai[] = (float) $data->hasil;
        			}
    			?>

			
			<!-- /.container-fluid -->

			<!-- load file Sticky Footer -->
			<?php $this->load->view('admin/_template/footer.php'); ?>
			<!-- ------------------------- -->

			<!-- /.content-wrapper -->

		</div>
		<!-- /#wrapper -->

		<!-- load file Scroll to Top Button-->
		<?php $this->load->view('admin/_template/scrolltop.php'); ?>
		<!-- ---------------------------- -->

		<!-- load file Modal-->
		<?php $this->load->view('admin/_template/modal.php'); ?>
		<!-- ------------------------- -->

		<!-- Bootstrap core JavaScript-->
		<?php $this->load->view('admin/_template/js.php'); ?>
		<!-- ------------------------------  -->

		<script>
			// Set new default font family and font color to mimic Bootstrap's default styling
			Chart.defaults.global.defaultFontFamily = '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
			Chart.defaults.global.defaultFontColor = '#292b2c';

			// Bar Chart Example
			var ctx = document.getElementById("myBarChart");
			var myLineChart = new Chart(ctx, {
  				type: 'bar',
  				data: {
    				labels: <?php echo json_encode($kode_alternatif) ?>,
    				datasets: [{
      				backgroundColor: ["rgba(2,117,216,1)","rgba(3,227,216,1)","rgba(200,117,46,1)","rgba(200,27,46,1)"],
      				borderColor: "rgba(2,117,216,0.5)",
      				data: <?php echo json_encode($nilai) ?>,
				}],
				
			  },
			  options : {
    				scales: {
						yAxes: [{
							ticks: {
        							min: 1,
        							max: 2,
									stepSize: 0.25
							}
						}],
        				xAxes: [{
							barThickness : 73,
        						}]
    						}
						}
			  
			});

		</script>

</body>

</html>
