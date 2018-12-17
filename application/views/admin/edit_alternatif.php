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
						<i class="fas fa-edit"></i>
						Edit alternatif | <a href="<?php echo site_url('admin/alternatif') ?>" class="btn btn-primary"><i class="fas fa-arrow-alt-circle-left"></i> Kembali</a>
					</div>

					<div class="card-body">
                        <form action="<?php base_url('admin/edit_alternatif') ?>" method="post">
                        
                        <!-- ================= -->

                        <div class="form-group">
                          <input type="hidden" name="id" value="<?php echo $alternatif->id_alternatif ?>" class="form-control" placeholder="">
                        </div>

						<!-- ================= -->

							<div class="form-group">
								<label for="">Kode alternatif</label>
								<input type="text" class="form-control <?php echo form_error('kode_alternatif') ? 'is-invalid':'' ?>" name="kode_alternatif"
								 id="kode_alternatif" aria-describedby="helpId" placeholder="" value="<?php echo $alternatif->kode_alternatif ?>">
								<small id="helpId" class="form-text text-muted">Masukkan Kode alternatif</small>
								<div class="invalid-feedback">
									<?php echo form_error('kode_alternatif') ?>
								</div>
							</div>

						<!-- ================= -->

							<div class="form-group">
								<label for="">Nama Alternatif</label>
								<input type="text" class="form-control <?php echo form_error('nama_alternatif') ? 'is-invalid':'' ?>" name="nama_alternatif" id="kode_alternatif"
								 aria-describedby="emailHelpId" placeholder="" value="<?php echo $alternatif->nama_alternatif ?>">
								<small id="emailHelpId" class="form-text text-muted">Masukkan Nama Alternatif</small>
								<div class="invalid-feedback">
									<?php echo form_error('nama_alternatif') ?>
								</div>
							</div>
							
							<!-- ============== -->

							<button type="submit" class="btn btn-primary"><i class="fas fa-save" value="Save"></i> Simpan</button> 
							

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
