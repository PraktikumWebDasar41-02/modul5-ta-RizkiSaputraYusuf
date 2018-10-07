	<form method="POST">
		<table>
			<tr>
				<td>NIM :</td>
				<td><input type="number" name="nim" required></td>
			</tr>
			<tr>
				<td>Nama :</td>
				<td><input type="text" name="nama" required></td>
			</tr>
			<tr>
				<td>Email :</td>
				<td><input type="text" name="email" placeholder="@gmail.com" required></td>
			</tr>
			<tr>
				<td>Komentar :</td>
				<td><input type="text" name="komentar" required></td>
			</tr>
			<tr>
				<td>Tanggal Lahir :</td>
				<td><input type="date" name="tanggal" required></td>
			</tr>
			<tr>
				<td>Jenis Kelamin :</td>
				<td>
					<input type="radio" name="gender" value="Perempuan">Perempuan <br>
					<input type="radio" name="gender" value="Laki-Laki">laki-laki
				</td>
			</tr>
			<tr>
				<td>Program Studi :</td>
				<td><select name="programstudi">
					<option value="MI">Manajemen informatika</option>
					<option value="Akun">Akuntansi</option>
					<option value="DCafe">De Cafe</option>
					<option value="Adm">Administrasi</option>
					<option value="TI">Teknik Informatika</option>
				</select></td>
			</tr>
			<tr>
				<td>Fakultas :</td>
				<td><select name="fak">
					<option value="FIT">FIT</option>
					<option value="FIK">FIK</option>
					<option value="FKB">FKB</option>
					<option value="FEB">FEB</option>
					<option value="FTE">FTE</option>
				</select></td>
			</tr>
			<tr>
				<td><input type="submit" name="submit" value="submit"></td>
			</tr>
		</table>
	</form>

	<?php
	include 'base.php';

	if (isset($_POST['submit'])) {

		if (strlen($_POST['nim'])==10){
		$nimmm = $_POST['nim'];
		}else{
			echo "NIM Harus berisi 10 angka"."<br>";
		}

		if (strlen($_POST['nama'])<25){
			$namaaa = $_POST['nama'];
		}else{
			echo "Nama Harus berisi Kurang dari 25 huruf"."<br>";
		}

		if (!strpos($_POST['email'], "@")||!strpos($_POST['email'], ".com")) {
			echo "Email anda tidak sesuai"."<br>";
		}else{
			$emailll = $_POST['email'];
		}

		$komentarrr = $_POST['komentar'];
		$tanggalll = $_POST['tanggal'];
		$programstudiii = $_POST['programstudi'];
		$fakultasss = $_POST['fak'];
		if (isset($_POST['gender'])) {
			$genderrr = $_POST['gender'];
		}

		session_start();

		$_SESSION['id'] = $nimmm;
		$_SESSION['nim'] = $namaaa;

		$qry = "INSERT INTO t_jurnal1 VALUES ($nimmm,'$namaaa','$emailll','$komentarrr','$tanggalll','$genderrr','$programstudiii','$fakultasss')";
		$tambah=$simpan->query($qry);
		if($tambah==true){
			echo "Sukses Coy";
			header("Location:form2.php");
		}else{
			echo "Gagal Coy";
		}

	}

	 ?>
