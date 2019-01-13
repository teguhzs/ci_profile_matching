<div class="card mb-3">
	<div class="card-header">
		<i class="fas fa-table"></i>
		Perhitungan Ranking
	</div>
	<div class="card-body">
		<div class="table-responsive">
			<table id="dataTableAkhir" class="table table-bordered table-sm table-striped table-hover" width="100%" cellspacing="0">
				<thead class="thead-inverse text-center">
					<tr>

						<th class="">Kode Alternatif</th>
						<?php 

$this->db->empty_table('tb_hasil');
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
							<?php echo $tampilAspek->nama_aspek; ?> (N)
						</th>
						<?php
} 
						?>
						<th>
							Hasil Akhir
						</th>
					</tr>
				</thead>
				<tbody>
			
					<tr class='bg-success'>
						<td class='text-center'> <strong>x(%)</strong> </td>
						<?php 
                                            $querySubKriteria = $this->db->query("
											SELECT tb1.id_aspek as id_aspek,
											tb2.bobot as bobot,
											count(tb1.keterangan) as jumlah_factor
 											FROM tb_sub_kriteria tb1
											left join tb_aspek tb2 on
											tb1.id_aspek = tb2.id_aspek 
                                            GROUP BY tb1.id_aspek
                                            ORDER BY id_aspek ASC"); 

                                            foreach ($querySubKriteria->result() as $tampilSubKriteria) {
                                        ?>
						<td class="text-center" colspan='
								<?php echo $tampilSubKriteria->jumlah_factor; ?>'>
							<strong>
								<?php echo $tampilSubKriteria->bobot; ?></strong>
						</td>
						<?php
                                            } 
                                         ?>
										 <td></td>
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
												tb3.bobot as bobot_aspek,
												count(tb2.keterangan) as jumlah_factor
												from tb_penilaian tb1
												left join tb_sub_kriteria tb2 ON
												tb1.id_sub_kriteria = tb2.id_sub_kriteria 
												left join tb_aspek tb3 ON
												tb2.id_aspek = tb3.id_aspek
												where id_alternatif = '$tampilAlternatif->id_alternatif'
												group by tb2.id_aspek
												order by tb2.id_aspek ASC");

												$R = 0;

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
							
							$bobot_aspek = $tampilPenilaian->bobot_aspek;
							

							$R = ($N/$bobot_aspek) + $R;

							$id_hasil = uniqid();

							

							?>
						</td>
						<?php } ?>
						<td>
						<?php 
						$sql = "insert into tb_hasil (id_hasil, id_alternatif, hasil) values 
						(
							'$id_hasil',
							'$tampilAlternatif->id_alternatif',
							'$R'
						)";

						$this->db->query($sql);
						echo $R; 
						?></td>
					</tr>
					<?php
                                            } 
										?>
				</tbody>
			</table>
		</div>
	</div>
</div>
