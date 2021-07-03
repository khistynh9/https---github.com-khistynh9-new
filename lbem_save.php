<!DOCTYPE html>
<html>

<head>
	<title>Save BEM</title>
</head>

<body>
	<h2>PENDATAAN BEM TASIKMALAYA</h2>

	<form action="lbem_saveproses.php" method="post">
		<table cellpadding="3" cellspacing="0">
			<tr>
				<td>Kode</td>
				<td>:</td>
				<td><input type="text" name="kode" size="20" id="kode" required></td>
			</tr>
			<tr>
				<td>Nama Lengkap</td>
				<td>:</td>
				<td><input type="text" name="nama" size="50" required></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td>:</td>
				<td><input type="text" name="alamat" size="150" required></td>
			</tr>
			<tr>
				<td>LOGO</td>
				<td>:</td>
				<td><input type="text" name="logo" size="30" required></td>
			</tr>
			<tr>
				<td>Alias Singkatan</td>
				<td>:</td>
				<td><input type="text" name="alias" size="50" required></td>
			</tr>
			<tr>
				<td>emali</td>
				<td>:</td>
				<td><input type="text" name="email" size="50" required></td>
			</tr>

			<tr>
				<td>&nbsp;</td>
				<td></td>
				<td><input type="submit" name="save" value="Save"></td>
			</tr>
		</table>
	</form>
</body>

</html>