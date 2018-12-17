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
						<i class="fas fa-table"></i>
						Data sub kriteria | <a href="<?php echo site_url('admin/add_sub_kriteria') ?>"><i class='fas fa-plus'></i>Tambah</a></div>
					<div class="card-body">
						<div class="table-responsive">
							<table class="table table-sm table-striped table-hover" id="dataTable" width="100%" cellspacing="0">
								<thead class="thead-inverse text-center">
									<tr>
										<th class="">Aspek Penilaian</th>
										<th class="">Kode sub kriteria</th>
										<th class="">Nama sub kriteria</th>
										<th class="">Nilai Sub kriteria</th>
										<th class="">Bobot (%)</th>
										<th class="">Keterangan</th>
										<th class="">Aksi</th>
									</tr>
								</thead>
								<tbody>
                                    <?php foreach ($sub_kriteria as $tampil) { ?>
									<tr class="text-center">
										<td>
                                            <?php echo $tampil->nama_aspek ?>
                                        </td>
										<td>
                                            <?php echo $tampil->kode_sub_kriteria ?>
                                        </td>
                                        <td>
                                            <?php echo $tampil->nama_sub_kriteria ?>
                                        </td>
                                        <td>
                                            <?php echo $tampil->nilai_sub_kriteria ?>
                                        </td>
                                        <td>
                                            <?php echo $tampil->bobot ?>
                                        </td>
                                        <td>
                                            <?php echo $tampil->keterangan ?>
                                        </td>
										<td class="text-center">
                                            <a href="<?php echo site_url('admin/edit_sub_kriteria/'.$tampil->id_sub_kriteria) ?>" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i> <small>Edit</small></a> 
                                            <a onclick="deleteConfirm('<?php echo site_url('admin/delete_sub_kriteria/'.$tampil->id_sub_kriteria) ?>')" href="#!" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i> <small>Hapus</small></a>
                                        </td>
                                    </tr>
                                    <?php } ?>
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
