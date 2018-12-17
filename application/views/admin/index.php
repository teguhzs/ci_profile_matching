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

				<div class="card">
					<div class="card-header">
						Apa itu profile matching...?
					</div>
					<div class="card-body">
						<h5 class="card-title">
						Metode Profile Matching (Pencocokan Profil)
						</h5>
						<p class="card-text">
						Proses perhitungan pada metode Profile Matching, diawali dengan pendefinisian nilai minimum untuk setiap variabel-variabel penilaian. Selisih setiap nilai data testing terhadap nilai minimum masing-masing variabel, merupakan gap yang kemudian diberi bobot. Bobot setiap variabel akan dihitung rata-rata berdasarkan kelompok variabel Core Factor (CF) dan Secondary Factor (SF). Komposisi CF ditambah SF adalah 100%, tergantung dari kepentingan pengguna metode ini. Tahap terakhir dari metode ini, adalah proses akumulasi nilai CF dan SF berdasarkan nilai-nilai variabel data testing.
						</p>
						<p class="card-text">
						Pembobotan pada metode Profile Matching, merupakan nilai pasti yang tegas pada nilai tertentu karena nilai-nilai yang ada merupakan anggota himpunan tegas (crisp set). Di dalam himpunan tegas, keanggotaan suatu unsur di dalam himpunan dinyatakan secara tegas, apakah objek tersebut anggota himpunan atau bukan dengan menggunakan fungsi karakteristik.
						</p>
						<p class="card-text">
						Langkah-langkah metode profile matching adalah:
						</p>
						<ol>
							<li>Menentukan variabel data-data yang dibutuhkan.</li>
							<li>Menentukan aspek-aspek yang digunakan untuk penilaian.</li>
							<li>Pemetaan Gap profil. <br> <em><strong>Gap = Profil Minimal – Profil data tes</strong></em></li>
							<li>Setelah diperoleh nilai Gap selanjutnya diberikan bobot untuk masing-masing nilai Gap.</li>
							<li>Perhitungan dan pengelompokan Core Factor dan Secondary Factor. Setelah menentukan bobot nilai gap, kemudian dikelompokan menjadi 2 kelompok yaitu: 
								<ol>
								<li><em>Core Factor</em>(Faktor Utama) yaitu merupakan kriteria (kompetensi) yang paling penting atau menonjol atau paling dibutuhkan oleh suatu penilaian yang diharapkan dapat memperoleh hasil yang optimal. 
								<br> <em><strong>NFC = ENC / EIC</strong></em>
								<br><br> Keterangan: <br>
								<br> 
										<table>
											<tr>
												<td>NFC</td>
												<td>:</td>
												<td>Nilai rata-rata core factor</td>
											</tr>
											<tr>
												<td>NC</td>
												<td>:</td>
												<td>Jumlah total nilai core factor</td>
											</tr>
											<tr>
												<td>IC</td>
												<td>:</td>
												<td>Jumlah item core factor</td>
											</tr>						
										</table>
								
								</li>
								<li>
								<p class="card-text">
								Secondary Factor (faktor pendukung), yaitu merupakan item-item selain yang ada pada core factor. Atau  dengan kata lain merupakan faktor pendukung yang kurang dibutuhkan oleh suatu penilaian.
								<br><br>
								<em><strong>NFS = ENS / EIS</strong></em>
								<br><br>
								Keterangan :
								<br>
								<table>
											<tr>
												<td>NFS</td>
												<td>:</td>
												<td>NNilai rata-rata secondary factor</td>
											</tr>
											<tr>
												<td>NS</td>
												<td>:</td>
												<td>JJumlah total nilai secondary factor</td>
											</tr>
											<tr>
												<td>IS</td>
												<td>:</td>
												<td>Jumlah item secondary factor</td>
											</tr>						
										</table>
								</p></li>
								</ol>
							</li>
							<li>
							Perhitungan Nilai Total. Nilai Total diperoleh dari prosentase core factor dan secondary factor yang diperkirakan berpengaruh terhadap hasil tiap-tiap profil.
							<br><br>

							<strong>N = (x) % NCF + (x) % NSF</strong>
							<br><br>
							Keterangan :
							<br>
							<table>
											<tr>
												<td>N</td>
												<td>:</td>
												<td>Nilai Total dari kriteria</td>
											</tr>
											<tr>
												<td>NFS</td>
												<td>:</td>
												<td>Nilai rata-rata secondary factor</td>
											</tr>
											<tr>
												<td>NFC</td>
												<td>:</td>
												<td>Nilai rata-rata core factor</td>
											</tr>
											<tr>
												<td>(x) %</td>
												<td>:</td>
												<td>Nilai persen yang diinputkan</td>
											</tr>						
										</table>
							</li>
							<li>
							Perhitungan penentuan ranking. Hasil Akhir dari proses profile matching adalah ranking. Penentuan ranking mengacu pada hasil perhitungan tertentu.
							<br><br>
							<strong> Ranking = (x) % NMA + (x) % NSA     </strong>
							<br><br>
							Keterangan :
							<br>
							<table>
											<tr>
												<td>NMA</td>
												<td>:</td>
												<td>Nilai total kriteria Aspek Utama</td>
											</tr>
											<tr>
												<td>NSA</td>
												<td>:</td>
												<td> Nilai total kriteria Aspek Pendukung</td>
											</tr>
											<tr>
												<td>(x)%</td>
												<td>:</td>
												<td>Nilai persen yang diinputkan</td>
											</tr>					
										</table>
							</li>					
						</ol>
						<p class="card-text">
						Referensi: <br><br>
						Jumadi, Cecep Nurul Alam, Ichsan Taufik (2015). “Pendekatan Logika Fuzzy untuk Perhitungan Gap pada Metode Profile Matching dalam Menentukan Kelayakan Proposal Penelitian”, Prosiding Seminar Nasional Sains dan Teknologi, Bandung.
						<br><br>
						Turban, E. (1988). Decision Support and Expert System. MacMillan Publishing Company, New York.
						<br><br>
						Marimin (2005). Teori Dan Aplikasi Sistem Pakar Dalam Tehnologi Manajerial. IPB – Press, Bogor

						</p>
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
