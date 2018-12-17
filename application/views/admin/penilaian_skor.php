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
				<div class="card mb-3">
					<div class="card-header">
						<i class="fas fa-user"></i>
						Data alternatif | <a href="<?php echo site_url('admin/add_alternatif') ?>"><i class='fas fa-plus'></i>Tambah</a></div>
					<div class="card-body">
						<div class="table-responsive">
							<table class="table table-sm table-striped" id="dataTable" width="100%" cellspacing="0">
								<thead class="thead-inverse text-center">
									<tr class=''>
										<th class="" >Kode Alternatif</th>
                                        <?php foreach ($aspek_penilaian as $tampil_aspek) {
                                         ?>
										<th class="" colspan='2'><?php echo $tampil_aspek->nama_aspek ?></th>
                                        <?php } ?>
									</tr>
                                    <tr class=''>
                                        <th></th>
                                        <?php foreach ($sub_kriteria as $tampil_sub_kriteria) {
                                         ?>
										<th class=""><?php echo $tampil_sub_kriteria->kode_sub_kriteria ?></th>
                                        <?php } ?>
                                        
                                    </tr>
								</thead>
								<tbody>
                                <form action="<?php base_url('admin/hasil') ?>" method="post">
                                    <?php foreach ($alternatif as $tampil_alternatif) {
                                    ?>
									<tr class="text-center">
                                        <td>
                                            <?php echo $tampil_alternatif->kode_alternatif ?>
                                        </td>

                                        <?php foreach ($sub_kriteria as $tampil_sub_kriteria) {
                                         ?>
										<td class="">
                                            <div class="form-group">
                                                <label class="sr-only" for="inputName">Id Alternatif</label>
                                                <input type="hidden" class="form-control form-control-sm <?php echo form_error('id_alternatif') ? 'is-invalid':'' ?>" name="id_alternatif[]" id="id_alternatif" value="<?php echo $tampil_alternatif->id_alternatif ?>">
                                                <div class="invalid-feedback">
									                <?php echo form_error('id_alternatif') ?>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="sr-only" for="inputName">Id Sub Kriteria</label>
                                                <input type="hidden" class="form-control form-control-sm <?php echo form_error('id_sub_kriteria') ? 'is-invalid':'' ?>" name="id_sub_kriteria[]" id="id_sub_kriteria" value="<?php echo $tampil_sub_kriteria->id_sub_kriteria ?>">
                                                <div class="invalid-feedback">
									                 <?php echo form_error('id_sub_kriteria') ?>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                              <label for=""></label>
                                              <select class="form-control form-control-sm <?php echo form_error('skor') ? 'is-invalid':'' ?>" name="skor[]" id="skor">
                                                
                                                <!-- <option value=''>Skor</option> -->
                                                <option value='7'>7</option>
                                                <option value='6'>6</option>
                                                <option value='5'>5</option>
                                                <option value='4'>4</option>
                                                <option value='3'>3</option>
                                                <option value='2'>2</option>
                                                <option value='1'>1</option>
                                              </select>
								            <div class="invalid-feedback">
									            <?php echo form_error('skor') ?>
                                            </div>
                                        </td>
                                        <?php } ?>
                                    </tr>
                                    <?php } ?>
                                    <tr>
                                        <td>
                                        <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Proses Hitung</button> 
							            <a href="<?php echo site_url('admin') ?>"
							            class="btn btn-primary"><i class="fas fa-arrow-alt-circle-left"></i> Kembali</a>
                                        </td>
                                    </tr>
                                </form>
								</tbody>
							</table>
						</div>
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
        
        <script>
            function deleteConfirm(url){
                $('#btn-delete').attr('href', url);
                $('#deleteModal').modal();
            }
        </script>

</body>

</html>
