<html>
<head>
	<title>Membuat Kalkulator Sederhana Dengan PHP</title>
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/style.css')?>">
</head>
<body>
	
	<div class="kalkulator">
		<h2 class="judul">KALKULATOR</h2>
		<form method="post" action="">			
			<input type="text" name="bil1" class="bil" autocomplete="off" placeholder="Masukkan Bilangan Pertama" required="required">
			<input type="text" name="bil2" class="bil" autocomplete="off" placeholder="Masukkan Bilangan Kedua" required="required">
			<select class="opt" name="operasi">
				<option value="tambah">+</option>
				<option value="kurang">-</option>
				<option value="kali">x</option>
				<option value="bagi">/</option>
			</select>
			<input type="submit" name="hitung" value="Hitung" class="tombol">											
		</form>
		<input type="text" value="<?php echo $oper; ?>" class="bil">
	</div>
</body>
</html>

