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
						Edit User | <a href="<?php echo site_url('admin/edit_user') ?>" class="btn btn-primary"><i class="fas fa-arrow-alt-circle-left"></i> Kembali</a>
					</div>

					<div class="card-body">
                        <form action="<?php base_url('admin/edit_user') ?>" method="post">
                        
                        <!-- ================= -->

                        <div class="form-group">
                          <input type="hidden" name="id" value="<?php echo $user->id_user ?>" class="form-control" placeholder="">
                        </div>

						<!-- ================= -->

							<div class="form-group">
								<label for="">Nama User</label>
								<input type="text" class="form-control <?php echo form_error('nama_user') ? 'is-invalid':'' ?>" name="nama_user"
								 id="nama_user" aria-describedby="helpId" placeholder="" value="<?php echo $user->nama_user ?>">
								<small id="helpId" class="form-text text-muted">Masukkan Nama User</small>
								<div class="invalid-feedback">
									<?php echo form_error('nama_user') ?>
								</div>
							</div>

						<!-- ================= -->

							<div class="form-group">
								<label for="">Sandi</label>
								<input type="password" class="form-control <?php echo form_error('sandi') ? 'is-invalid':'' ?>" name="sandi" id="sandi"
								 placeholder="" value="<?php echo $user->sandi ?>">
								<small id=helpId" class="form-text text-muted">Masukkan Sandi</small>
								<div class="invalid-feedback">
									<?php echo form_error('sandi') ?>
								</div>
							</div>

							<!-- =============== -->

							<div class="form-group">
								<label for="">Alamat E-mail</label>
								<input type="email" class="form-control <?php echo form_error('email') ? 'is-invalid':'' ?>" name="email" id="email"
								 aria-describedby="emailHelpId" placeholder="" value="<?php echo $user->email ?>">
								<small id="emailHelpId" class="form-text text-muted">Masukkan Alamat E-Mail</small>
								<div class="invalid-feedback">
									<?php echo form_error('email') ?>
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
