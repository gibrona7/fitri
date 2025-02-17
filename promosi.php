<?php include "header.php"; ?>

<!-- Awal Page -->
<div class="container">
	<!-- Awal baris -->
	<div class="row">
		<div class="col-md-8"><!-- Awal Kolom Pertama -->
			<div class="panel panel-default">
				<div class="panel-body">
					<h2 class="text-muted"><span class="glyphicon glyphicon-list"></span> promosi</h2>
					<table class="table table-bordered table-hover" id="data-table">
						<thead>
							<tr>

								<th>Nama Barang</th>
								<th>Harga</th>
								<th>Ukuran</th>

							</tr>
						</thead>
						<?php

						include "konek.php";
						$sql = $koneksi->query("select * from produk");

						while ($row = $sql->fetch_assoc()) {
						?>
							<tr>

								<td><?php echo $row['nama_barang'] ?></td>
								<td><?php echo $row['harga'] ?></td>
								<td><?php echo $row['ukuran'] ?></td>

							</tr>
						<?php } ?>
					</table>
				</div>
			</div>
		</div><!-- Akhir Kolom Pertama -->

		<div class="col-md-4"><!-- Awal kolom kedua -->
			<div class="panel panel-default">
				<div class="panel-body">
					<h2 class="text-muted"><span class="glyphicon glyphicon-tasks"></span>Info Promo</h2>
					<h4>Diskon 40</h4>
					<img src="images/22.jpeg" class="img-thumbnail img-responsive">
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