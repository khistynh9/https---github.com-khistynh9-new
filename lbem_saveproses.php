	<?php
	//<!-- ------------------------------------------------------------------------------------------ -->
	//<!-- Proses Save berdasarkan link address ref="lbem_save.php?kode='add'"                        -->
	//<!-- ------------------------------------------------------------------------------------------ -->
	//cek aksi clik button "save"
	if (isset($_POST['save'])) {
		//inlcude dari file modul koneksi ke database
		include('dbkoneksi.php');

		//mendefinikan variabel $... untuk proses sesuai atribut tabel   
		$kode	= $_POST['kode'];
		$nama	= $_POST['nama'];
		$alamat = $_POST['alamat'];
		$logo = $_POST['logo'];
		$alias = $_POST['alias'];
		$email = $_POST['email'];

		//melakukan query INSERT INTO untuk memasukkan data ke database
		$input = mysqli_query($koneksi, "INSERT INTO list_bem VALUES('$kode', '$nama', '$alamat', '$logo', '$alias', '$email')");

		if ($input > 0) {  //kondisi query sukses
			echo 'Data berhasil di tambahkan! ';
			echo '<a href="index.php?kode=' . $kode . '">Back</a>';	//membuat Link untuk back halaman
		} else {  //kondisi query gagal
			echo 'Gagal menambahkan data! ';
			echo '<a href="index.php?kode=' . $kode . '">Back</a>';	//membuat Link untuk back halaman
		}
	} else {	// NOT-clik button "save"
		//redirect atau dikembalikan ke halaman sebelumnya
		echo '<script>window.history.back()</script>';
	}
	?>
