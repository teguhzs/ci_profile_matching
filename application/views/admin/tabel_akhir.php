<div class="card mb-3">
	<div class="card-header">
		<i class="fas fa-table"></i>
		Ranking
	</div>

	<div class="card-body">

		<div class="table-responsive">

			<table class="table table-sm table-bordered table-striped table-inverse table-responsive" id="dataTable" width="100%"
			 cellspacing="0">
				<thead class="thead-inverse">
					<tr class='bg-primary text-light'>
						<th class="">Kode Alternatif</th>
						<th class="" colspan='2'>Lokasi</th>
						<th class="" colspan='2'>Transportasi</th>
						<th class="" colspan='2'>Infrastruktur</th>
						<th class="" colspan='2'>Jarak</th>
						<th>Hasil Akhir</th>
					</tr>
					<tr class='bg-light'>
						<th></th>
						<th colspan='2'>Nl</th>
						<th colspan='2'>Nt</th>
						<th colspan='2'>Ni</th>
						<th colspan='2'>Nj</th>
						<th colspan='2'>HA</th>

					</tr>
				</thead>
				<tbody>
					<tr class='bg-success text-light'>
						<td>A1</td>
						<td colspan='2'>
							<?php 
											$gap1 = $x_ak->skor - $x_ak->nilai_sub_kriteria;
											$cf1 = bobot_gap($gap1) / $hitung_jarak_cf1;

											$gap2 = $x_aj->skor - $x_aj->nilai_sub_kriteria;
											$cf2 = bobot_gap($gap2) / $hitung_jarak_cf1;

											$nl = (($bobot_ak->bobot/100)*$cf1)*(($bobot_aj->bobot/100)*$cf2);
											echo round($nl,2);
											
											?>
						</td>
						<td colspan='2'>
							<?php 
											$gap1 = $x_bmm->skor - $x_bmm->nilai_sub_kriteria;
											$cf1 = bobot_gap($gap1) / $hitung_jarak_cf1;

											$gap2 = $x_bt->skor - $x_bt->nilai_sub_kriteria;
											$cf2 = bobot_gap($gap2) / $hitung_jarak_cf1;

											$nt = (($bobot_bmm->bobot/100)*$cf1)*(($bobot_bt->bobot/100)*$cf2);

											echo round($nt,2);
											
											?>
						</td>
						<td colspan='2'>
							<?php 
											$gap1 = $x_tp->skor - $x_tp->nilai_sub_kriteria;
											$cf1 = bobot_gap($gap1) / $hitung_jarak_cf1;

											$gap2 = $x_kdjp->skor - $x_kdjp->nilai_sub_kriteria;
											$cf2 = bobot_gap($gap2) / $hitung_jarak_cf1;

											$ni = (($bobot_tp->bobot/100)*$cf1)*(($bobot_kdjp->bobot/100)*$cf2);

											echo round($ni,2);
											
											?>
						</td>
						<td colspan='2'>
							<?php 
											$gap1 = $x_jl->skor - $x_jl->nilai_sub_kriteria;
											$cf1 = bobot_gap($gap1) / $hitung_jarak_cf1;

											$gap2 = $x_jt->skor - $x_jt->nilai_sub_kriteria;
											$cf2 = bobot_gap($gap2) / $hitung_jarak_cf1;

											$nj = (($bobot_jl->bobot/100)*$cf1)*(($bobot_jt->bobot/100)*$cf2);

											echo round($nj,2);
											
											?>
						</td>

						<td>
							<?php 

                                            $ha1 = ((($bobot_l->bobot/100)*$nl)+(($bobot_t->bobot/100)*$nt)+(($bobot_i->bobot/100)*$ni)+(($bobot_j->bobot/100)*$nj));
                                            
                                            echo $ha1;
                                             ?>
						</td>

					</tr>
					<tr>
					<tr class='bg-success text-light'>
						<td>A2</td>
						<td colspan='2'>
							<?php 
											$gap1 = $x_ak2->skor - $x_ak2->nilai_sub_kriteria;
											$cf1 = bobot_gap($gap1) / $hitung_jarak_cf1;

											$gap2 = $x_aj2->skor - $x_aj2->nilai_sub_kriteria;
											$cf2 = bobot_gap($gap2) / $hitung_jarak_cf1;

											$nl2 = (($bobot_ak->bobot/100)*$cf1)*(($bobot_aj->bobot/100)*$cf2);
											echo round($nl2,2);
											
											?>
						</td>
						<td colspan='2'>
							<?php 
											$gap1 = $x_bmm2->skor - $x_bmm2->nilai_sub_kriteria;
											$cf1 = bobot_gap($gap1) / $hitung_jarak_cf1;

											$gap2 = $x_bt2->skor - $x_bt2->nilai_sub_kriteria;
											$cf2 = bobot_gap($gap2) / $hitung_jarak_cf1;

											$nt2 = (($bobot_bmm->bobot/100)*$cf1)*(($bobot_bt->bobot/100)*$cf2);
											echo round($nt2,2);
											
											?>
						</td>
						<td colspan='2'>
							<?php 
											$gap1 = $x_tp2->skor - $x_tp2->nilai_sub_kriteria;
											$cf1 = bobot_gap($gap1) / $hitung_jarak_cf1;

											$gap2 = $x_kdjp2->skor - $x_kdjp2->nilai_sub_kriteria;
											$cf2 = bobot_gap($gap2) / $hitung_jarak_cf1;

											$ni2 = (($bobot_tp->bobot/100)*$cf1)*(($bobot_kdjp->bobot/100)*$cf2);
											echo round($ni2,2);
											?>
						</td>
						<td colspan='2'>
							<?php 
											$gap1 = $x_jl2->skor - $x_jl2->nilai_sub_kriteria;
											$cf1 = bobot_gap($gap1) / $hitung_jarak_cf1;

											$gap2 = $x_jt2->skor - $x_jt2->nilai_sub_kriteria;
											$cf2 = bobot_gap($gap2) / $hitung_jarak_cf1;

											$nj2 = (($bobot_jl->bobot/100)*$cf1)*(($bobot_jt->bobot/100)*$cf2);

											echo round($nj2,2);
											
											?>
						</td>
						<td>
							<?php 

                                            $ha2 = ((($bobot_l->bobot/100)*$nl2)+(($bobot_t->bobot/100)*$nt2)+(($bobot_i->bobot/100)*$ni2)+(($bobot_j->bobot/100)*$nj2));
                                            
                                            echo $ha2;
                                             ?>
						</td>
					</tr>
					<tr class='bg-success text-light'>
						<td>A3</td>
						<td colspan='2'>
							<?php 
											$gap1 = $x_ak3->skor - $x_ak3->nilai_sub_kriteria;
											$cf1 = bobot_gap($gap1) / $hitung_jarak_cf1;

											$gap2 = $x_aj3->skor - $x_aj3->nilai_sub_kriteria;
											$cf2 = bobot_gap($gap2) / $hitung_jarak_cf1;

											$nl3 = (($bobot_ak->bobot/100)*$cf1)*(($bobot_aj->bobot/100)*$cf2);
											echo round($nl3,2);
											
											?>
						</td>
						<td colspan='2'>
							<?php 
											$gap1 = $x_bmm3->skor - $x_bmm3->nilai_sub_kriteria;
											$cf1 = bobot_gap($gap1) / $hitung_jarak_cf1;

											$gap2 = $x_bt3->skor - $x_bt3->nilai_sub_kriteria;
											$cf2 = bobot_gap($gap2) / $hitung_jarak_cf1;

											$nt3 = (($bobot_bmm->bobot/100)*$cf1)*(($bobot_bt->bobot/100)*$cf2);
											echo round($nt3,2);
											
											?>
						</td>
						<td colspan='2'>
							<?php 
											$gap1 = $x_tp3->skor - $x_tp3->nilai_sub_kriteria;
											$cf1 = bobot_gap($gap1) / $hitung_jarak_cf1;

											$gap2 = $x_kdjp3->skor - $x_kdjp3->nilai_sub_kriteria;
											$cf2 = bobot_gap($gap2) / $hitung_jarak_cf1;

											$ni3 = (($bobot_tp->bobot/100)*$cf1)*(($bobot_kdjp->bobot/100)*$cf2);
											echo round($ni3,2);
											?>
						</td>
						<td colspan='2'>
							<?php 
											$gap1 = $x_jl3->skor - $x_jl3->nilai_sub_kriteria;
											$cf1 = bobot_gap($gap1) / $hitung_jarak_cf1;

											$gap2 = $x_jt3->skor - $x_jt3->nilai_sub_kriteria;
											$cf2 = bobot_gap($gap2) / $hitung_jarak_cf1;

											$nj3 = (($bobot_jl->bobot/100)*$cf1)*(($bobot_jt->bobot/100)*$cf2);

											echo round($nj3,2);
											
											?>
						</td>
						<td>
							<?php 

                                            $ha3 = ((($bobot_l->bobot/100)*$nl3)+(($bobot_t->bobot/100)*$nt3)+(($bobot_i->bobot/100)*$ni3)+(($bobot_j->bobot/100)*$nj3));
                                            
                                            echo $ha3;
                                             ?>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>

</div>
