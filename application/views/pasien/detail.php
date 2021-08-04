<!DOCTYPE html>
<html>
<head>
	<title>Data Pasien</title>
</head>
<body>
	<h1 style="text-align: center">Data Pasien</h1>
	<table>
		<tr>
			<td>Nomor RM</td>
			<td>:</td>
			<td><?= $pasien['no_rm']; ?></td>
		</tr>
		<tr>
			<td>Nama Pasien</td>
			<td>:</td>
			<td><?= $pasien['nm_pasien']; ?></td>
		</tr>
		<tr>
			<td>Jenis Kelamin</td>
			<td>:</td>
			<td><?= $pasien['jk']; ?></td>
		</tr>
		<tr>
			<td>Golongan Darah</td>
			<td>:</td>
			<td><?= $pasien['gol_darah']; ?></td>
		</tr>
		<tr>
			<td>Tempat Lahir</td>
			<td>:</td>
			<td><?= $pasien['tempat_lahir']; ?></td>
		</tr>
		<tr>
			<td>Tanggal Lahir</td>
			<td>:</td>
			<td><?= $pasien['tgl_lahir']; ?></td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td>:</td>
			<td><?= $pasien['alamat']; ?></td>
		</tr>
		<tr>
			<td>Nomor Telpon</td>
			<td>:</td>
			<td><?= $pasien['no_tlp']; ?></td>
		</tr>
	</table>

</body>
</html>