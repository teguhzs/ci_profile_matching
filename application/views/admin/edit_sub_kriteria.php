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
						Edit sub kriteria
					</div>

					<div class="card-body">
						<form action="<?php base_url('admin/edit_sub_kriteria') ?>" method="post">

                        <div class="form-group">
                          <input type="hidden" name="id" value="<?php echo $sub_kriteria->id_sub_kriteria ?>" class="form-control" placeholder="">
                        </div>

                        <!-- ================= -->

						<div class="form-group">
						  <label for="">Aspek Penilaian</label>
						  <select class="form-control form-control-sm <?php echo form_error('id_aspek') ? 'is-invalid':'' ?>" name="id_aspek" id="id_aspek">
							<?php 
								foreach ($aspek_penilaian as $tampil) {
							?>
							<option value="<?php echo $tampil->id_aspek ?>" <?php if ($sub_kriteria->id_aspek == $tampil->id_aspek) { echo "selected"; } ?>><?php echo $tampil->nama_aspek ?></option>
							<?php 
								} 
							?>
						  </select>
						  <small id="helpId" class="form-text text-muted">Masukkan Aspek Penilaian</small>
								<div class="invalid-feedback">
									<?php echo form_error('id_aspek') ?>
								</div>
						</div>

						<!-- ================= -->

							<div class="form-group">
								<label for="">Kode sub kriteria</label>
								<input type="text" value="<?php echo $sub_kriteria->kode_sub_kriteria ?>" class="form-control <?php echo form_error('kode_sub_kriteria') ? 'is-invalid':'' ?>" name="kode_sub_kriteria"
								 id="kode_sub_kriteria" aria-describedby="helpId" placeholder="">
								<small id="helpId" class="form-text text-muted">Masukkan Kode sub kriteria</small>
								<div class="invalid-feedback">
									<?php echo form_error('kode_sub_kriteria') ?>
								</div>
							</div>

						<!-- ================= -->

							<div class="form-group">
								<label for="">Nama sub kriteria</label>
								<input type="text" value="<?php echo $sub_kriteria->nama_sub_kriteria ?>" class="form-control <?php echo form_error('nama_sub_kriteria') ? 'is-invalid':'' ?>" name="nama_sub_kriteria" id="nama_sub_kriteria"
								 aria-describedby="emailHelpId" placeholder="">
								<small id="emailHelpId" class="form-text text-muted">Masukkan Nama Sub Kriteria</small>
								<div class="invalid-feedback">
									<?php echo form_error('nama_sub_kriteria') ?>
								</div>
							</div>

							<!-- ============== -->

                            <div class="form-group">
								<label for="">Nilai sub kriteria</label>
								<input type="number" value="<?php echo $sub_kriteria->nilai_sub_kriteria ?>" class="form-control <?php echo form_error('nilai_sub_kriteria') ? 'is-invalid':'' ?>" name="nilai_sub_kriteria" id="nilai_sub_kriteria"
								 aria-describedby="emailHelpId" placeholder="">
								<small id="emailHelpId" class="form-text text-muted">Masukkan Nilai Sub Kriteria</small>
								<div class="invalid-feedback">
									<?php echo form_error('nilai_sub_kriteria') ?>
								</div>
							</div>
							
							<!-- ============== -->

                            <div class="form-group">
								<label for="">Bobot (%)</label>
								<input type="number" value="<?php echo $sub_kriteria->bobot ?>" class="form-control <?php echo form_error('bobot') ? 'is-invalid':'' ?>" name="bobot" id="bobot"
								 aria-describedby="emailHelpId" placeholder="">
								<small id="emailHelpId" class="form-text text-muted">Masukkan Bobot</small>
								<div class="invalid-feedback">
									<?php echo form_error('bobot') ?>
								</div>
							</div>

							<!-- ============== -->

							<div class="form-check form-check-inline">
								<label class="form-check-label">
									<input class="form-check-input <?php echo form_error('keterangan') ? 'is-invalid':'' ?>" type="radio" name="keterangan" id="keterangan" value="CF" <?php if ($sub_kriteria->keterangan == "CF") {
                                        echo "checked";
                                    } ?>> Core Factor
								</label>
							</div>
							<div class="form-check form-check-inline">
								<label class="form-check-label">
									<input class="form-check-input <?php echo form_error('keterangan') ? 'is-invalid':'' ?>" type="radio" name="keterangan" id="keterangan" value="SF" <?php if ($sub_kriteria->keterangan == "SF") {
                                        echo "checked";
                                    } ?>> Secondary Factor
								</label>
							</div>
							<small id="emailHelpId" class="form-text text-muted">Pilih Keterangan</small>
								<div class="invalid-feedback">
									<?php echo form_error('keterangan') ?>
								</div>
                            <div class='clearfix'></div>
							<br>

							<button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Simpan</button> 
							<a href="<?php echo site_url('admin/sub_kriteria') ?>"
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
