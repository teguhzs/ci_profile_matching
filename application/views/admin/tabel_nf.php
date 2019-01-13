<div class="card mb-3">
	<div class="card-header">
		<i class="fas fa-table"></i>
		Perhitungan Nilai Total Dari Kriteria N
	</div>
	<div class="card-body">
		<div class="table-responsive">
			<table class="table table-bordered table-sm table-striped table-hover" width="100%" cellspacing="0">
				<thead class="thead-inverse text-center">
					<tr>

						<th class="">Kode Alternatif</th>
						<?php 
$queryAspek = $this->db->query("
							select tb_aspek.id_aspek, 
							COUNT(tb_sub_kriteria.id_aspek) AS jumlah_sub,
							tb_aspek.nama_aspek 
							from tb_aspek LEFT JOIN 
							tb_sub_kriteria ON 
							tb_aspek.id_aspek = tb_sub_kriteria.id_aspek
							GROUP BY tb_aspek.id_aspek
							order by id_aspek asc
							"); 

foreach ($queryAspek->result() as $tampilAspek) {
?>
						<th class="" colspan='<?php echo $tampilAspek->jumlah_sub; ?>'>
							<?php echo $tampilAspek->nama_aspek; ?>
						</th>
						<?php
} 
?>
					</tr>
					<tr>
						<th> </th>
						<?php 
$querySubKriteria = $this->db->query("
							select id_sub_kriteria,
							id_aspek, 
							nama_sub_kriteria,
							keterangan 
							from tb_sub_kriteria 
							order by id_aspek,keterangan asc"); 

foreach ($querySubKriteria->result() as $tampilSubKriteria) {
?>
						<th class="">
							<?php echo $tampilSubKriteria->nama_sub_kriteria; ?><br>
							<?php echo $tampilSubKriteria->keterangan; ?><br>
						</th>
						<?php
} 
?>
					</tr>
				</thead>
				<tbody>
					<?php 
                                            $queryAlternatif = $this->db->query("
                                                                                select id_alternatif,
                                                                                kode_alternatif 
                                                                                from tb_alternatif"); 

                                            foreach ($queryAlternatif->result() as $tampilAlternatif) {
                                        ?>
					<tr class="text-center">
						<td>
							<?php echo $tampilAlternatif->kode_alternatif ?>
						</td>

						<?php 
                                                $queryPenilaian = $this->db->query("
												select tb1.id_alternatif as id_alternatif, 
												tb1.id_sub_kriteria as id_sub_kriteria,
												tb2.nama_sub_kriteria as nama_sub_kriteria,
												tb2.nilai_sub_kriteria as nilai_sub_kriteria,
												tb2.keterangan as keterangan,
												tb3.id_aspek as id_aspek,
												tb1.skor as skor
												from tb_penilaian tb1
												left join tb_sub_kriteria tb2 ON
												tb1.id_sub_kriteria = tb2.id_sub_kriteria 
												left join tb_aspek tb3 ON
												tb2.id_aspek = tb3.id_aspek
												where id_alternatif = '$tampilAlternatif->id_alternatif'
												order by tb2.id_aspek, tb2.keterangan ASC");

                                                foreach ($queryPenilaian->result() as $tampilPenilaian) {

													$queryJumlahNilai = $this->db->query("
													select tb1.id_alternatif as id_alternatif, 
													tb1.id_sub_kriteria as id_sub_kriteria,
													tb2.nama_sub_kriteria as nama_sub_kriteria,
													tb2.nilai_sub_kriteria as nilai_sub_kriteria,
													tb3.id_aspek as id_aspek,
													tb1.skor as skor
													from tb_penilaian tb1
													left join tb_sub_kriteria tb2 ON
													tb1.id_sub_kriteria = tb2.id_sub_kriteria 
													left join tb_aspek tb3 ON
													tb2.id_aspek = tb3.id_aspek
													where tb1.id_alternatif = '$tampilPenilaian->id_alternatif'
													AND tb3.id_aspek = '$tampilPenilaian->id_aspek'
													AND tb2.keterangan = '$tampilPenilaian->keterangan'
													order by tb2.id_aspek, tb2.keterangan ASC
													");

													
                                            ?>
						<td>
							<?php
							$N = 0;
							$jumlahitem = 0;
							foreach ($queryJumlahNilai->result() as $jumlahNilai) {
								$gap = $jumlahNilai->skor - $jumlahNilai->nilai_sub_kriteria;  
								$bobot = bobot_gap($gap);
								$N = $bobot + $N;
								++$jumlahitem;
							}
							$NF = $N / $jumlahitem;
							echo  $NF;
							?>
						</td>
						<?php } ?>
					</tr>
					<?php
                                            } 
										?>
			
					<tr class='bg-success'>
						<td class='text-center'> <strong>x(%)</strong> </td>
						<?php 
                                            $querySubKriteria = $this->db->query("
                                            SELECT id_aspek,
                                            bobot,
											keterangan, 
											COUNT(id_aspek) AS jumlah_item 
											FROM tb_sub_kriteria 
                                            GROUP BY id_sub_kriteria, id_aspek, keterangan
                                            ORDER BY id_aspek, keterangan ASC"); 

                                            foreach ($querySubKriteria->result() as $tampilSubKriteria) {
                                        ?>
						<td class="text-center" colspan='
								<?php echo $tampilSubKriteria->jumlah_item; ?></strong>'>
							<strong>
								<?php echo $tampilSubKriteria->bobot; ?></strong>
						</td>
						<?php
                                            } 
                                         ?>
					</tr>

					
					<?php 
                                            $queryAlternatif = $this->db->query("
                                                                                select id_alternatif,
                                                                                kode_alternatif 
                                                                                from tb_alternatif"); 

                                            foreach ($queryAlternatif->result() as $tampilAlternatif) {
                                        ?>
					<tr class="text-center">
						<td>
							<?php echo $tampilAlternatif->kode_alternatif ?>
						</td>

						<?php 
                                                $queryPenilaian = $this->db->query("
												select 
												tb1.id_alternatif as id_alternatif,
												tb2.id_aspek as id_aspek,
												count(tb2.keterangan) as jumlah_factor
												from tb_penilaian tb1
												left join tb_sub_kriteria tb2 ON
												tb1.id_sub_kriteria = tb2.id_sub_kriteria 
												left join tb_aspek tb3 ON
												tb2.id_aspek = tb3.id_aspek
												where id_alternatif = '$tampilAlternatif->id_alternatif'
												group by tb2.id_aspek
												order by tb2.id_aspek ASC");

                                                foreach ($queryPenilaian->result() as $tampilPenilaian) {

													$queryJumlahNilaiCF = $this->db->query("
													select tb1.id_alternatif as id_alternatif, 
													tb1.id_sub_kriteria as id_sub_kriteria,
													tb2.nama_sub_kriteria as nama_sub_kriteria,
                                                    tb2.nilai_sub_kriteria as nilai_sub_kriteria,
                                                    tb2.bobot as bobot,
													tb3.id_aspek as id_aspek,
													tb1.skor as skor
													from tb_penilaian tb1
													left join tb_sub_kriteria tb2 ON
													tb1.id_sub_kriteria = tb2.id_sub_kriteria 
													left join tb_aspek tb3 ON
													tb2.id_aspek = tb3.id_aspek
													where tb1.id_alternatif = '$tampilPenilaian->id_alternatif'
													AND tb3.id_aspek = '$tampilPenilaian->id_aspek'
													AND tb2.keterangan = 'CF'
													order by tb2.id_aspek, tb2.keterangan ASC
													");

													$queryJumlahNilaiSF = $this->db->query("
													select tb1.id_alternatif as id_alternatif, 
													tb1.id_sub_kriteria as id_sub_kriteria,
													tb2.nama_sub_kriteria as nama_sub_kriteria,
                                                    tb2.nilai_sub_kriteria as nilai_sub_kriteria,
                                                    tb2.bobot as bobot,
													tb3.id_aspek as id_aspek,
													tb1.skor as skor
													from tb_penilaian tb1
													left join tb_sub_kriteria tb2 ON
													tb1.id_sub_kriteria = tb2.id_sub_kriteria 
													left join tb_aspek tb3 ON
													tb2.id_aspek = tb3.id_aspek
													where tb1.id_alternatif = '$tampilPenilaian->id_alternatif'
													AND tb3.id_aspek = '$tampilPenilaian->id_aspek'
													AND tb2.keterangan = 'SF'
													order by tb2.id_aspek, tb2.keterangan ASC
													");

													
                                            ?>
						<td colspan='<?php echo $tampilPenilaian->jumlah_factor; ?>'>
							<?php
							$NC = 0;
							$jumlahitemNC = 0;
							foreach ($queryJumlahNilaiCF->result() as $jumlahNilaiNC) {
								$gap = $jumlahNilaiNC->skor - $jumlahNilaiNC->nilai_sub_kriteria;  
								$bobot = bobot_gap($gap);
								$NC = $bobot + $NC;
								++$jumlahitemNC;
                            }
                            
                            $NCF = $NC / $jumlahitemNC;
                            $bobotNC = $jumlahNilaiNC->bobot;


							$NS = 0;
							$jumlahitemNS = 0;
							foreach ($queryJumlahNilaiSF->result() as $jumlahNilaiNS) {
								$gap = $jumlahNilaiNS->skor - $jumlahNilaiNS->nilai_sub_kriteria;  
								$bobot = bobot_gap($gap);
								$NS = $bobot + $NS;
								++$jumlahitemNS;
							}
                            $NSF = $NS / $jumlahitemNS;
                            $bobotNS = $jumlahNilaiNS->bobot;
                            $N = (($bobotNC/100)*$NCF) + (($bobotNS/100)*$NSF);

                            echo $N;

							?>
						</td>
						<?php } ?>
					</tr>
					<?php
                                            } 
										?>
				</tbody>
			</table>
		</div>
	</div>
</div>
