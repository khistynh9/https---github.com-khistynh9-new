<!doctype html>
<html>

<head>
	<title>media BEM Tasik tambah</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body style="background-image : url(image_slide/bg1.jpg); background-repeat:no-repeat; background-attachment: fixed">

	<div id="Heading-web" style="width:max; background-color:image_slide/bg1.jpg;">

		<div id="lheader" style="background-color:#DCDCDC; height:250px; width:1000px; float:left;">
			<img src="image_slide/bg_header.jpg" height=250px; width=1000px;" />
		</div>

		<div id="cheader" style="background-color:#DCDCDC; height:250px; width:5px; float:left;">
			<!-- faris tegak antara -->
		</div>

		<div id="rheader" style="background-color:#B00AAA; height:250px; width:300px; float:left;">
			<img src="image_slide/image1.jpg" class="mySlides" height=250px; width=340px;" />
			<img src="image_slide/image2.jpg" class="mySlides" height=250px; width=340px;" />
			<img src="image_slide/image3.jpg" class="mySlides" height=250px; width=340px;" />
		</div>
		<script>
			var myIndex = 0;
			carousel();

			function carousel() {
				var i;
				var x = document.getElementsByClassName("mySlides");
				for (i = 0; i < x.length; i++) {
					x[i].style.display = "none";
				}
				myIndex++;
				if (myIndex > x.length) {
					myIndex = 1
				}
				x[myIndex - 1].style.display = "block";
				setTimeout(carousel, 2000); // Change image every 2 seconds
			}
		</script>

		<div id="footer" style="background-color:#0B0AA0; clear:both; height:12px; width:1345px; ; text-align:left; padding:10px;">
			<!-- faris tegak horizontal <font color="black" size="12"> xxx </font> -->
			<marquee behavior="" direction="" style="color:aquamarine">Aliansi BEM Tasikmalaya</marquee>
		</div>
	</div>


	<div id="informasi" style="width:max; background-color:Blue;">
		<div id="iflist" style="background-color:#AAAAAA; height:max; width:270px; float:left;">
			<!-- buat tabel list BEM -->
			<table cellpadding="5" cellspacing="0" border="1" font-size="12" color="black" bgcolor="gray">
				<tr bgcolor=red>
					<th colspan="2">
						<h2>BEM ALIANSI TASIK </h2>
					</th>
				</tr>
				<tr bgcolor=green>
					<th colspan="2"> </th>
				</tr>

				<tr bgcolor="#CCCCCC">
					<!-- <th>No.</th>  -->
					<!-- <th>KODE</th> -->
					<th>NAMA</th>
					<!--	<th>ALAMAT</th>	<th>LOGO</th>	<th>ALIAS</th>  <th>EMAIL</th>    -->
					<th><a href="lbem_save.php?kode='add'">ADD BEM</a> </th>
				</tr>

				<?php
				//include file koneksi ke database & buat query informasi
				include('dbkoneksi.php');
				$query = mysqli_query($koneksi, "SELECT * FROM list_bem ORDER BY kode ASC") or die(mysqli_error());

				if (mysqli_num_rows($query) == 0) {	//Data kosong
					echo '<tr><td colspan="6">Tidak ada data!</td></tr>';
				} else {	// ada data
					$no = 1;	//membuat variabel nomor urut
					while ($data = mysqli_fetch_assoc($query)) {	//ambil item data
						//menampilkan row dengan data di database
						echo '<tr>';
						//	echo '<td>'.$no.'</td>';	
						//	echo '<td>'.$data['kode'].'</td>';	
						//	echo '<td>'.$data['nama'].'</td>';	
						//	echo '<td>'.$data['alamat'].'</td>';	
						//	echo '<td>'.$data['logo'].'</td>';	
						echo '<td>' . $data['alias'] . '</td>';
						//	echo '<td>'.$data['email'].'</td>';	
						echo '<td><a href="lbem_edit.php?kode=' . $data['kode'] . '">Edit</a> / <a href="lbem_deleteproses.php?kode=' . $data['kode'] . '" onclick="return confirm(\'Yakin?\')">Delete</a></td>';
						echo '</tr>';
						$no++;	//menambah jumlah nomor urut setiap row
					}
				}
				?>
			</table>
		</div>

		<div id="ifinfo" style="background-color:white; font-size:14px height:max; width:78%; float:left; padding:5px">
			<?php
			include('dbkoneksi.php');
			$query = mysqli_query($koneksi, "SELECT * FROM info_bem ORDER BY tanggal DESC") or die(mysql_error());

			if (mysqli_num_rows($query) == 0) {	//Data kosong
				echo '<tr><td colspan="6">Tidak ada data!</td></tr>';
			} else {	// ada data
				echo '<p align="justify"> <h1> INFORMASI BEM TASIKMALAYA</h1> <hr/> </p>';
				while ($data = mysqli_fetch_assoc($query)) {	//ambil item data
					//menampilkan row dengan data di database
					echo '<h1 style = "color : blue;">' . $data['judul'] . '</h1>';
					echo '<h4 style = "color : green;"> Penulis : ' . $data['penulis'] . ' | ' . $data['tanggal'] . '</h4>';
					echo ' ' . $data['konten'] . '';
				}
			}
			?>
		</div>

	</div>

</body>

</html>