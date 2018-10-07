<?php
session_start();
include 'base.php';
$nimm = $_SESSION['id'];


$qry = "SELECT * FROM t_jurnal1 WHERE nim = '$nimm'";
$hasil=$simpan->query($qry);
if($hasil==true){
	foreach($hasil as $value){
		$namaa=$value['nama'];
		$nimm=$value['nim'];
		$emaill=$value['email'];
		$komentarr=$value['komentar'];
		$tanggall=$value['tanggallahir'];
		$genderr=$value['jeniskelamin'];
		$programstudii=$value['jurusan'];
		$fakultass=$value['fakultas'];
	}
}


?>


<form method="post">
<table>
	<tr>
		<td>Nama :</td>
		<td><?php echo $namaa."<br>"; ?></td>
	</tr>
	<tr>
		<td>NIM :</td>
		<td><?php echo $nimm."<br>"; ?></td>
	</tr>
	<tr>
		<td>Email :</td>
		<td><?php echo $emaill."<br>"; ?></td>
	</tr>
	<tr>
		<td>komentar :</td>
		<td><?php echo $komentarr."<br>"; ?></td>
	</tr>
	<tr>
		<td>Tanggal lahir :</td>
		<td><?php echo $tanggall."<br>"; ?></td>
	</tr>
	<tr>
		<td>Jenis kelamin :</td>
		<td><?php echo $genderr."<br>"; ?></td>
	</tr>
	<tr>
		<td>Jurusan :</td>
		<td><?php echo $programstudii."<br>"; ?></td>
	</tr>
	<tr>
		<td>fakultas :</td>
		<td><?php echo $fakultass."<br>"; ?></td>
	</tr>

	<tr>
		<td><input type="submit" name="keluar" value="Input baru Lagi"></td>
	</tr>
</table>

</form>
<?php
if (isset($_POST['keluar'])) {
	session_destroy();
	header("Location:form1.php");
}
 ?>
