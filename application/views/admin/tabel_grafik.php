<div class="card mb-3">
	<div class="card-header">
		<i class="fas fa-list"></i>
		Ranking
	</div>
	<div class="card-body">
		<div class="table-responsive">
			<table id="dataTableAkhir" class="table table-bordered table-sm table-striped table-hover" width="100%" cellspacing="0">
				<thead class="thead-inverse text-center">
					<tr>
						<th class="">No</th>
						<th class="">Kode Alternatif</th>
						<th class="">Hasil</th>
					</tr>
				</thead>
				<tbody>
                <?php
                    $no = 1;
                    foreach($hasil as $tampil) {
                ?>
					<tr>

                        <td><?php echo $no ?></td>
                        <td><?php echo $tampil->kode_alternatif ?></td>
                        <td><?php echo $tampil->hasil ?></td>
					</tr>
                <?php
                    
                    $no++; 
                    }
                ?>
				</tbody>
			</table>
		</div>
	</div>
</div>
