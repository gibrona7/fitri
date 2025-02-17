<?php include "header.php"; ?>

<!-- Awal Page -->
<div class="container">
	<!-- Awal baris -->
	<div class="row">
		<div class="col-md-8"><!-- Awal Kolom Pertama -->
			<div class="panel panel-default">
				<div class="panel-body">
					<h2 style="text-muted"><span class="glyphicon glyphicon-list"></span> Contact</h2>
					<?php

					if (@$_GET['pesan'] == "inputBerhasil") {

					?>
						<div class="alert alert-success">
							Terima kasih, pesan anda sudah terkirim!
						</div>
					<?php

					}

					?>
					<form action="proses-komentar.php" method="post">
						<table class="table table-hover">
							<tr>
								<td>Nama Lengkap
									<input type="text" name="nama" class="form-control input-md" placeholder="Isikan nama anda dengan lengkap" required>
								</td>
							</tr>
							<tr>
								<td>Alamat Email
									<input type="email" name="email" class="form-control input-md" placeholder="Isikan alamat email yang masih aktif" required>
								</td>
							</tr>
							<tr>
								<td>Pesan
									<textarea name="pesan" class="form-control input-md" required> </textarea>
								</td>
							</tr>
							<tr>
								<td>
									<input type="submit" value="Kirim" class="btn btn-lg btn-info"> <input type="reset" value="Batal" class="btn btn-lg btn-warning">
								</td>
							</tr>
						</table>
					</form>
				</div>
			</div>
		</div><!-- Akhir Kolom Pertama -->

		<div class="col-md-4"><!-- Awal kolom kedua -->
			<div class="panel panel-default">
				<div class="panel-body">
					<h2 style="text-muted"><span class="glyphicon glyphicon-tasks"></span>Info Promosi</h2>
					<h4>Diskon 40%</h4>
					<img src="images/11.jpg" class="img-thumbnail img-responsive" alt="Seminar Nasional Chris Benoit">
					<p>
						FITRI FESHION STORE sedang mengadakan promo besar-besaran! Jangan lewatkan kesempatan untuk mendapatkan diskon 40% untuk semua produk fashion favorit Anda. Segera kunjungi toko kami, dan nikmati penawaran spesial ini sebelum kehabisan. Belanja sekarang, tampil gaya dengan koleksi terbaik dari FITRI FESHION STORE!
					</p>
					<p>
						Untuk informasi lebih lanjut hubungi bagian Admin
						<br /><br />
						<a class="btn btn-danger btn-xs" href="ruang_kelas.html" role="button">Admin</a>
					</p>
				</div>
			</div>
		</div><!-- Akhir Kolom Kedua -->
	</div><!-- Akhir Baris -->
</div><!--  Akhir Page -->

<?php include "footer.php"; ?>