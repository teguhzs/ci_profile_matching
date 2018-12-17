<div class="col-md-6">
	<div class="card mb-3">
		<div class="card-header">
			<i class="fas fa-table"></i>
			Bobot nilai gap
		</div>

		<div class="card-body">


			<table class="table table-sm table-bordered table-responsive">
				<thead class="thead-inverse">
					<tr class='bg-primary text-light'>
						<th class="">Kode Alternatif</th>
						<th class="" colspan='2'>Lokasi</th>
						<th class="" colspan='2'>Transportasi</th>
						<th class="" colspan='2'>Infrastruktur</th>
						<th class="" colspan='2'>Jarak</th>
					</tr>
					<tr class='bg-light'>
						<th></th>
						<th>AK</th>
						<th>AJ</th>
						<th>BMM</th>
						<th>BT</th>
						<th>TP</th>
						<th>KDJP</th>
						<th>JL</th>
						<th>JT</th>

					</tr>
					<tr class='bg-light'>
						<th></th>
						<th>CF</th>
						<th>SF</th>
						<th>CF</th>
						<th>SF</th>
						<th>CF</th>
						<th>SF</th>
						<th>SF</th>
						<th>CF</th>

					</tr>
				</thead>
				<tbody>
					<tr>
						<td>A1</td>
						<?php foreach ($penilaian_A1 as $tampil_penilaian) { ?>
						<td scope="row">
							<?php 
												$gap = $tampil_penilaian->skor - $tampil_penilaian->nilai_sub_kriteria;
												echo $gap;
											 ?>
						</td>
						<?php } ?>
					</tr>
					<tr>
						<td>A2</td>
						<?php foreach ($penilaian_A2 as $tampil_penilaian) { ?>
						<td scope="row">
							<?php 
												$gap = $tampil_penilaian->skor - $tampil_penilaian->nilai_sub_kriteria;
												echo $gap;
											 ?>
						</td>
						<?php } ?>
					<tr>
						<td>A3</td>
						<?php foreach ($penilaian_A3 as $tampil_penilaian) { ?>
						<td scope="row">
							<?php 
												$gap = $tampil_penilaian->skor - $tampil_penilaian->nilai_sub_kriteria;
												echo $gap;
											 ?>
						</td>
						<?php } ?>
					</tr>
					<tr class='bg-success text-light'>
						<td colspan='9'>Bobot Nilai GAP</td>
					</tr>
					<tr>
						<td>A1</td>
						<td scope="row">
							<?php 
												$gap = $x_ak->skor - $x_ak->nilai_sub_kriteria;
												echo bobot_gap($gap);
											 ?>
						</td>
						<td scope="row">
							<?php 
												$gap = $x_aj->skor - $x_aj->nilai_sub_kriteria;
												echo bobot_gap($gap);
											 ?>
						</td>
						<td scope="row">
							<?php 
												$gap = $x_bt->skor - $x_bt->nilai_sub_kriteria;
												echo bobot_gap($gap);
											 ?>
						</td>
						<td scope="row">
							<?php 
												$gap = $x_bmm->skor - $x_bmm->nilai_sub_kriteria;
												echo bobot_gap($gap);
											 ?>
						</td>
						<td scope="row">
							<?php 
												$gap = $x_tp->skor - $x_tp->nilai_sub_kriteria;
												echo bobot_gap($gap);
											 ?>
						</td>
						<td scope="row">
							<?php 
												$gap = $x_kdjp->skor - $x_kdjp->nilai_sub_kriteria;
												echo bobot_gap($gap);
											 ?>
						</td>
						<td scope="row">
							<?php 
												$gap = $x_jl->skor - $x_jl->nilai_sub_kriteria;
												echo bobot_gap($gap);
											 ?>
						</td>
						<td scope="row">
							<?php 
												$gap = $x_jt->skor - $x_jt->nilai_sub_kriteria;
												echo bobot_gap($gap);
											 ?>
						</td>
					</tr>
					<tr>
						<td>A2</td>
						<td scope="row">
							<?php 
												$gap = $x_ak2->skor - $x_ak2->nilai_sub_kriteria;
												echo bobot_gap($gap);
											 ?>
						</td>
						<td scope="row">
							<?php 
												$gap = $x_aj2->skor - $x_aj2->nilai_sub_kriteria;
												echo bobot_gap($gap);
											 ?>
						</td>
						<td scope="row">
							<?php 
												$gap = $x_bt2->skor - $x_bt2->nilai_sub_kriteria;
												echo bobot_gap($gap);
											 ?>
						</td>
						<td scope="row">
							<?php 
												$gap = $x_bmm2->skor - $x_bmm2->nilai_sub_kriteria;
												echo bobot_gap($gap);
											 ?>
						</td>
						<td scope="row">
							<?php 
												$gap = $x_tp2->skor - $x_tp2->nilai_sub_kriteria;
												echo bobot_gap($gap);
											 ?>
						</td>
						<td scope="row">
							<?php 
												$gap = $x_kdjp2->skor - $x_kdjp2->nilai_sub_kriteria;
												echo bobot_gap($gap);
											 ?>
						</td>
						<td scope="row">
							<?php 
												$gap = $x_jl2->skor - $x_jl2->nilai_sub_kriteria;
												echo bobot_gap($gap);
											 ?>
						</td>
						<td scope="row">
							<?php 
												$gap = $x_jt2->skor - $x_jt2->nilai_sub_kriteria;
												echo bobot_gap($gap);
											 ?>
						</td>
					</tr>
					<tr>
						<td>A3</td>
						<td scope="row">
							<?php 
												$gap = $x_ak3->skor - $x_ak3->nilai_sub_kriteria;
												echo bobot_gap($gap);
											 ?>
						</td>
						<td scope="row">
							<?php 
												$gap = $x_aj3->skor - $x_aj3->nilai_sub_kriteria;
												echo bobot_gap($gap);
											 ?>
						</td>
						<td scope="row">
							<?php 
												$gap = $x_bt3->skor - $x_bt3->nilai_sub_kriteria;
												echo bobot_gap($gap);
											 ?>
						</td>
						<td scope="row">
							<?php 
												$gap = $x_bmm3->skor - $x_bmm3->nilai_sub_kriteria;
												echo bobot_gap($gap);
											 ?>
						</td>
						<td scope="row">
							<?php 
												$gap = $x_tp3->skor - $x_tp3->nilai_sub_kriteria;
												echo bobot_gap($gap);
											 ?>
						</td>
						<td scope="row">
							<?php 
												$gap = $x_kdjp3->skor - $x_kdjp3->nilai_sub_kriteria;
												echo bobot_gap($gap);
											 ?>
						</td>
						<td scope="row">
							<?php 
												$gap = $x_jl3->skor - $x_jl3->nilai_sub_kriteria;
												echo bobot_gap($gap);
											 ?>
						</td>
						<td scope="row">
							<?php 
												$gap = $x_jt3->skor - $x_jt3->nilai_sub_kriteria;
												echo bobot_gap($gap);
											 ?>
						</td>
					</tr>

				</tbody>
			</table>
		</div>
	</div>
</div>
