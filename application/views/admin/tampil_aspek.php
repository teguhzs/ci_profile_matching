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
						Data aspek penilaian | <a href="<?php echo site_url('admin/add_aspek') ?>"><i class='fas fa-plus'></i>Tambah</a></div>
					<div class="card-body">
						<div class="table-responsive">
							<table class="table table-sm table-striped table-hover" id="dataTable" width="100%" cellspacing="0">
								<thead class="thead-inverse text-center">
									<tr>
										<th class="">Kode aspek penilaian</th>
										<th class="">Nama aspek penilaian</th>
										<th class="">Bobot (%)</th>
										<th class="">Aksi</th>
									</tr>
								</thead>
								<tbody>
                                    <?php foreach ($aspek_penilaian as $tampil) { ?>
									<tr class="text-center">
										<td>
                                            <?php echo $tampil->kode_aspek ?>
                                        </td>
										<td>
                                            <?php echo $tampil->nama_aspek ?>
                                        </td>
                                        <td>
                                            <?php echo $tampil->bobot ?>
                                        </td>
										<td class="text-center">
                                            <a href="<?php echo site_url('admin/edit_aspek/'.$tampil->id_aspek) ?>" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i> <small>Edit</small></a> 
                                            <a onclick="deleteConfirm('<?php echo site_url('admin/delete_aspek/'.$tampil->id_aspek) ?>')" href="#!" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i> <small>Hapus</small></a>
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
