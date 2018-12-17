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
						<i class="fas fa-plus"></i>
						Tambah aspek
					</div>

					<div class="card-body">
						<form action="<?php base_url('admin/add_aspek') ?>" method="post">

						<!-- ================= -->

							<div class="form-group">
								<label for="">Kode aspek penilaian</label>
								<input type="text" class="form-control <?php echo form_error('kode_aspek') ? 'is-invalid':'' ?>" name="kode_aspek"
								 id="kode_aspek" aria-describedby="helpId" placeholder="">
								<small id="helpId" class="form-text text-muted">Masukkan Kode aspek</small>
								<div class="invalid-feedback">
									<?php echo form_error('kode_aspek') ?>
								</div>
							</div>

						<!-- ================= -->

							<div class="form-group">
								<label for="">Nama aspek penilaian</label>
								<input type="text" class="form-control <?php echo form_error('nama_aspek') ? 'is-invalid':'' ?>" name="nama_aspek" id="nama_aspek"
								 aria-describedby="emailHelpId" placeholder="">
								<small id="emailHelpId" class="form-text text-muted">Masukkan Nama aspek</small>
								<div class="invalid-feedback">
									<?php echo form_error('nama_aspek') ?>
								</div>
							</div>
							
							<!-- ============== -->

                            <div class="form-group">
								<label for="">Bobot</label>
								<input type="number" class="form-control <?php echo form_error('bobot') ? 'is-invalid':'' ?>" name="bobot" id="bobot"
								 aria-describedby="emailHelpId" placeholder="">
								<small id="emailHelpId" class="form-text text-muted">Masukkan Bobot</small>
								<div class="invalid-feedback">
									<?php echo form_error('bobot') ?>
								</div>
							</div>
                            

							<button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Simpan</button> 
							<a href="<?php echo site_url('admin/aspek_penilaian') ?>"
							 class="btn btn-primary"><i class="fas fa-arrow-alt-circle-left"></i> Kembali</a>

							<!-- ============== -->

						</form>
					</div>
				</div>

			</div>
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

</body>

</html>
