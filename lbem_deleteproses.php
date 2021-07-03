<?php
  	// -- ------------------------------------------------------------------------------------------ -->
    // -- Proses Delete berdasarkan link address href="lbem_delete.php?kode='.$data['kode'].'          -->
	// -- ------------------------------------------------------------------------------------------ -->
	 
	//cek aksi
	if(isset($_GET['kode'])){ // clik link "delete" OK

		include('dbkoneksi.php');  	//inlcude file koneksi ke database
		
		$kode = $_GET['kode'];
		
		//find data sesuai kode yang akan dihapus
		$info = mysqli_query($koneksi,"SELECT kode FROM list_bem WHERE kode='$kode'") or die(mysqli_error());
		
		if(mysqli_num_rows($info) == 0){ // tidak ada
			//jika data tidak ada, maka redirect atau dikembalikan ke halaman beranda
			echo '<script>window.history.back()</script>';
		}else{ // data ada
			
			$info = mysqli_query($koneksi,"DELETE FROM list_bem WHERE kode='$kode'"); // delete data
			
			if($info){ // query berhasil  
				echo 'Data berhasil di delete !';		
				echo '<a href="index.php">Back</a>';//membuat Link untuk kembali ke halaman utama
			}else{
				echo 'Data gagal dihapus ! ';		
				echo '<a href="index.php">Back</a>';	//membuat Link untuk kembali ke halaman beranda
			}
		}
		
	}else{	// NOT-clik link "delete"
		//redirect atau dikembalikan ke halaman sebelumnya
		echo '<script>window.history.back()</script>';
	}
?>