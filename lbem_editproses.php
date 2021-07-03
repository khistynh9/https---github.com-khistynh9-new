
	<?php
	//<!-- ------------------------------------------------------------------------------------------ -->
	//<!-- Proses Edit berdasarkan link address href="lbem_edit.php?kode='.$data['kode'].'            -->
	//<!-- ------------------------------------------------------------------------------------------ -->

	//cek aksi clik  "edit"
	if (isset($_POST['edit'])) {
		include('dbkoneksi.php');
		//mendefinikan variabel $... untuk proses sesuai atribut tabel   
		$kode		= $_POST['kode'];
		$nama		= $_POST['nama'];
		$alamat		= $_POST['alamat'];
		$logo    	= $_POST['logo'];
		$alias    	= $_POST['alias'];
		$email    	= $_POST['email'];

		//melakukan query dengan perintah UPDATE dari inputan hidden kode
		$update = mysqli_query($koneksi, "UPDATE list_bem SET kode='$kode', nama='$nama', alamat='$alamat', logo='$logo', alias='$alias', email='$email' WHERE kode='$kode'");

		if ($update > 0) { //kondisi query sukses
			echo 'Data berhasil di Edit! ';
			echo '<a href="index.php?kode=' . $kode . '">Back</a>';	//membuat Link untuk kembali ke halaman utama
		} else { //kondisi query gagal
			echo 'Gagal menyimpan data! ';
			echo '<a href="index.php?kode=' . $kode . '">Back</a>';	//membuat Link untuk kembali ke halaman utama
		}
	} else {	// NOT-clik button "edit"
		//redirect atau dikembalikan ke halaman sebelumnya
		echo '<script>window.history.back()</script>';
	}
	?>