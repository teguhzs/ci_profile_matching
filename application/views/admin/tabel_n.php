<div class="col-md-6">
	<div class="card mb-3">
		<div class="card-header">
			<i class="fas fa-table"></i>
			Pengelompokan CF dan SF (NCF & SCF)
		</div>

		<div class="card-body">

			<div class="table-responsive">

				<table class="table table-bordered table-sm table-responsive">
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
							<td colspan='9'>Pengelompokan</td>
						</tr>
						<tr>
							<td></td>
							<td>NSF</td>
							<td>NCF</td>
							<td>NSF</td>
							<td>NCF</td>
							<td>NSF</td>
							<td>NCF</td>
							<td>NSF</td>
							<td>NCF</td>
						</tr>
						<tr>
							<td>A1</td>
							<?php foreach ($penilaian_A1 as $tampil_penilaian) { ?>
							<td scope="row">
								<?php 
												$gap = $tampil_penilaian->skor - $tampil_penilaian->nilai_sub_kriteria;
												$cf = bobot_gap($gap) / $hitung_jarak_cf1;
												echo $cf;
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
												$cf = bobot_gap($gap) / $hitung_jarak_cf1;
												echo $cf;
											 ?>
							</td>
							<?php } ?>
						<tr>
							<td>A3</td>
							<?php foreach ($penilaian_A3 as $tampil_penilaian) { ?>
							<td scope="row">
								<?php 
												$gap = $tampil_penilaian->skor - $tampil_penilaian->nilai_sub_kriteria;
												$cf = bobot_gap($gap) / $hitung_jarak_cf1;
												echo $cf;
											 ?>
							</td>
							<?php } ?>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>

</div>



<div class="col-md-6">
	<div class="card mb-3">
		<div class="card-header">
			<i class="fas fa-table"></i>
			Nilai Total N(j,l,t,i)
		</div>

		<div class="card-body">


			<table class="table table-bordered table-sm table-responsive">
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
					<tr class='bg-success text-light'>
						<td colspan='9'>Pengelompokan</td>
					</tr>
					<tr>
						<td>A1</td>
						<?php foreach ($penilaian_A1 as $tampil_penilaian) { ?>
						<td scope="row">
							<?php 
												$gap = $tampil_penilaian->skor - $tampil_penilaian->nilai_sub_kriteria;
												$cf = bobot_gap($gap) / $hitung_jarak_cf1;
												echo $cf;
											 ?>
						</td>
						<?php } ?>
					</tr>
					<tr class='bg-danger text-light'>
						<td>Nilai Total N(j,l,t,i)</td>
						<td colspan='2'>
							<?php 
											$gap_ak = $x_ak->skor - $x_ak->nilai_sub_kriteria;
											$cf_ak = bobot_gap($gap_ak) / $hitung_jarak_cf1;

											$gap_aj = $x_aj->skor - $x_aj->nilai_sub_kriteria;
											$cf_aj = bobot_gap($gap_aj) / $hitung_jarak_cf1;

											$n = (($bobot_ak->bobot/100)*$cf_ak)*(($bobot_aj->bobot/100)*$cf_aj);
											echo round($n,2);
											
											?>
						</td>
						<td colspan='2'>
							<?php 
											$gap_bmm = $x_bmm->skor - $x_bmm->nilai_sub_kriteria;
											$cf_bmm = bobot_gap($gap_bmm) / $hitung_jarak_cf1;

											$gap_bt = $x_bt->skor - $x_bt->nilai_sub_kriteria;
											$cf_bt = bobot_gap($gap_bt) / $hitung_jarak_cf1;

											$n = (($bobot_bmm->bobot/100)*$cf_bmm)*(($bobot_bt->bobot/100)*$cf_bt);

											echo round($n,2);
											
											?>
						</td>
						<td colspan='2'>
							<?php 
											$gap1 = $x_tp->skor - $x_tp->nilai_sub_kriteria;
											$cf1 = bobot_gap($gap1) / $hitung_jarak_cf1;

											$gap2 = $x_kdjp->skor - $x_kdjp->nilai_sub_kriteria;
											$cf2 = bobot_gap($gap2) / $hitung_jarak_cf1;

											$n = (($bobot_tp->bobot/100)*$cf1)*(($bobot_kdjp->bobot/100)*$cf2);

											echo round($n,2);
											
											?>
						</td>
						<td colspan='2'>
							<?php 
											$gap1 = $x_jl->skor - $x_jl->nilai_sub_kriteria;
											$cf1 = bobot_gap($gap1) / $hitung_jarak_cf1;

											$gap2 = $x_jt->skor - $x_jt->nilai_sub_kriteria;
											$cf2 = bobot_gap($gap2) / $hitung_jarak_cf1;

											$n = (($bobot_jl->bobot/100)*$cf1)*(($bobot_jt->bobot/100)*$cf2);

											echo round($n,2);
											
											?>
						</td>

					</tr>
					<tr>
						<td>A2</td>
						<?php foreach ($penilaian_A2 as $tampil_penilaian) { ?>
						<td scope="row">
							<?php 
												$gap = $tampil_penilaian->skor - $tampil_penilaian->nilai_sub_kriteria;
												$cf = bobot_gap($gap) / $hitung_jarak_cf1;
												echo $cf;
											 ?>
						</td>
						<?php } ?>
					<tr class='bg-danger text-light'>
						<td>Nilai Total N(j,l,t,i)</td>
						<td colspan='2'>
							<?php 
											$gap1 = $x_ak2->skor - $x_ak2->nilai_sub_kriteria;
											$cf1 = bobot_gap($gap1) / $hitung_jarak_cf1;

											$gap2 = $x_aj2->skor - $x_aj2->nilai_sub_kriteria;
											$cf2 = bobot_gap($gap2) / $hitung_jarak_cf1;

											$n = (($bobot_ak->bobot/100)*$cf1)*(($bobot_aj->bobot/100)*$cf2);
											echo round($n,2);
											
											?>
						</td>
						<td colspan='2'>
							<?php 
											$gap1 = $x_bmm2->skor - $x_bmm2->nilai_sub_kriteria;
											$cf1 = bobot_gap($gap1) / $hitung_jarak_cf1;

											$gap2 = $x_bt2->skor - $x_bt2->nilai_sub_kriteria;
											$cf2 = bobot_gap($gap2) / $hitung_jarak_cf1;

                                            $n = (($bobot_bmm->bobot/100)*$cf1)*(($bobot_bt->bobot/100)*$cf2);
                                            echo $cf1;
                                            echo $gap2;
											echo round($n,2);
											
											?>
						</td>
						<td colspan='2'>
							<?php 
											$gap1 = $x_tp2->skor - $x_tp2->nilai_sub_kriteria;
											$cf1 = bobot_gap($gap1) / $hitung_jarak_cf1;

											$gap2 = $x_kdjp2->skor - $x_kdjp2->nilai_sub_kriteria;
											$cf2 = bobot_gap($gap2) / $hitung_jarak_cf1;

											$n = (($bobot_tp->bobot/100)*$cf1)*(($bobot_kdjp->bobot/100)*$cf2);
											echo round($n,2);
											?>
						</td>
						<td colspan='2'>
							<?php 
											$gap1 = $x_jl2->skor - $x_jl2->nilai_sub_kriteria;
											$cf1 = bobot_gap($gap1) / $hitung_jarak_cf1;

											$gap2 = $x_jt2->skor - $x_jt2->nilai_sub_kriteria;
											$cf2 = bobot_gap($gap2) / $hitung_jarak_cf1;

											$n = (($bobot_jl->bobot/100)*$cf1)*(($bobot_jt->bobot/100)*$cf2);

											echo round($n,2);
											
											?>
						</td>
					</tr>
					<tr>
						<td>A3</td>
						<?php foreach ($penilaian_A3 as $tampil_penilaian) { ?>
						<td scope="row">
							<?php 
												$gap = $tampil_penilaian->skor - $tampil_penilaian->nilai_sub_kriteria;
												$cf = bobot_gap($gap) / $hitung_jarak_cf1;
												echo $cf;
											 ?>
						</td>
						<?php } ?>
					</tr>
					<tr class='bg-danger text-light'>
						<td>Nilai Total N(j,l,t,i)</td>
						<td colspan='2'>
							<?php 
											$gap1 = $x_ak3->skor - $x_ak3->nilai_sub_kriteria;
											$cf1 = bobot_gap($gap1) / $hitung_jarak_cf1;

											$gap2 = $x_aj3->skor - $x_aj3->nilai_sub_kriteria;
											$cf2 = bobot_gap($gap2) / $hitung_jarak_cf1;

											$n = (($bobot_ak->bobot/100)*$cf1)*(($bobot_aj->bobot/100)*$cf2);
											echo round($n,2);
											
											?>
						</td>
						<td colspan='2'>
							<?php 
											$gap1 = $x_bmm3->skor - $x_bmm3->nilai_sub_kriteria;
											$cf1 = bobot_gap($gap1) / $hitung_jarak_cf1;

											$gap2 = $x_bt3->skor - $x_bt3->nilai_sub_kriteria;
											$cf2 = bobot_gap($gap2) / $hitung_jarak_cf1;

											$n = (($bobot_bmm->bobot/100)*$cf1)*(($bobot_bt->bobot/100)*$cf2);
											echo round($n,2);
											
											?>
						</td>
						<td colspan='2'>
							<?php 
											$gap1 = $x_tp3->skor - $x_tp3->nilai_sub_kriteria;
											$cf1 = bobot_gap($gap1) / $hitung_jarak_cf1;

											$gap2 = $x_kdjp3->skor - $x_kdjp3->nilai_sub_kriteria;
											$cf2 = bobot_gap($gap2) / $hitung_jarak_cf1;

											$n = (($bobot_tp->bobot/100)*$cf1)*(($bobot_kdjp->bobot/100)*$cf2);
											echo round($n,2);
											?>
						</td>
						<td colspan='2'>
							<?php 
											$gap1 = $x_jl3->skor - $x_jl3->nilai_sub_kriteria;
											$cf1 = bobot_gap($gap1) / $hitung_jarak_cf1;

											$gap2 = $x_jt3->skor - $x_jt3->nilai_sub_kriteria;
											$cf2 = bobot_gap($gap2) / $hitung_jarak_cf1;

											$n = (($bobot_jl->bobot/100)*$cf1)*(($bobot_jt->bobot/100)*$cf2);

											echo round($n,2);
											
											?>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>
