<!DOCTYPE html>
<html>
<head>
	<title>EDIT</title>
</head>

<body>
    <!-- mengambil atau GET data yang akan diedit datri tabel LIST_BEM berdasarkan field KODE -->
	<?php  
        include('dbkoneksi.php');   	//inlcude koneksi databse dari file modul dbkoneksi
        $kode = $_GET['kode'];			//membuat variabel $kode dengan GET dari lbem_edit.php?kode= kode bem
        $elist = mysqli_query($koneksi,"SELECT * FROM list_bem WHERE kode='$kode'"); //elist = variabel data dalam list yang akan diedit
        
        //cek query mysql_num_rows($elist) :fungsi database mySQL mengembalikan nilai yang berisi jumlah baris data dari hasil query
        if(mysqli_num_rows($elist) == 0){  // data kosong
            echo '<script>window.history.back()</script>'; //pesan kembali ke halaman sebelumnya
        }else {  
            $data = mysqli_fetch_assoc($elist);	//fungsi mengambil data dari database dalam variabel $data yang sesuai/assosiasi
		}
		// $data adalah data yang dicari 
	?> 
	
    <!-- menampilkan data yang dicari dalam FORM di modul ini lbem_edit.php -->
	<!-- dengan nama input KODE, type hidden -->
	<form action="lbem_editproses.php" method="post">
		<!-- <input type="hidden" name="kode" value="<?php echo $kode; ?>">  --> <!-- membuat inputan hidden dan nilainya = kode  -->

		<table cellpadding="3" cellspacing="0">
			<tr>
				<td>KODE</td>           <td>:</td>  
                <td><input type="text" name="kode"  size="20"  value="<?php echo $data['kode']; ?>" required></td>	<!-- value diambil dari hasil query -->
			</tr>
			<tr>
				<td>Nama Lengkap</td>	<td>:</td>
				<td><input type="text" name="nama" size="50" value="<?php echo $data['nama']; ?>" required></td> <!-- value diambil dari hasil query -->
			</tr>
			<tr>
				<td>Alamat</td>         <td>:</td>
				<td><input type="text" name="alamat" size="150" value="<?php echo $data['alamat']; ?>" required></td> <!-- value diambil dari hasil query -->
			</tr>
			<tr>
				<td>LOGO</td>           <td>:</td>
				<td><input type="text" name="logo" size="30" value="<?php echo $data['logo']; ?>" required></td> <!-- value diambil dari hasil query -->
			</tr>
			<tr>
				<td>Alias Singkatan</td>  <td>:</td>
				<td><input type="text" name="alias" size="50" value="<?php echo $data['alias']; ?>" required></td> <!-- value diambil dari hasil query -->
			</tr>
			
			<tr>
				<td>email</td>			<td>:</td>
				<td><input type="text" name="email" size="50" value="<?php echo $data['email']; ?>" required></td> <!-- value diambil dari hasil query -->
			</tr>

			<tr>
				<td>&nbsp;</td>			<td></td>
				<td><input type="submit" name="edit" value="Edit"></td>   <!-- kirim aksi clik tombol Edit -->
			</tr>
		</table>
	</form>
</body>
</html>