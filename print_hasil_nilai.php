<?php
	include'koneksi.php';
	$nama_file='Laporan_Data_Supplier'; //Beri nama file PDF hasil.
	define('_MPDF_PATH','mpdf60/');
	include(_MPDF_PATH . "mpdf.php");
	$mpdf=new mPDF('utf-8', 'A4'); // Create new mPDF Document
	ob_start(); 
	$mpdf->useGraphs = true;
?>

<!DOCTYPE html>
<html>
<head>
	<title>Laporan Supplier</title>
</head>

<body>
	<div align="center">
		<table class="heading" style="width:100%;" border="0">
	        <tr>
	        	<td width="120"><img src="dist/img/logo.png" width="70"></td>
	            <td style="font-size: 16px; text-align:center;"><b>
	            &nbsp;
	            PT ORIENTAL WINDU SAKTI
	            &nbsp;
	            </b>
	            <br><br>
	            <font style="text-align:center; font-size: 10px;">Ruko Kalimalang Square Blok E No 22 Jl. KH. Noer Ali Bekasi Jawa Barat. Telp. (+62) 21 88965875, Email. jktcs@owsgsa.com </font>
	            </td>
	            <td width="120"></td>
	        </tr>
	    </table>
	    <hr size="10000px">
	    	<font style="font-size: 15px;" align="center">Laporan Data Hasil Nilai Supplier</font>
		<hr size="10000px">
	</div>

		<font style="font-size: 11px;" align="right">Tabel Matriks keputusan</font>
		<br><br>
		<table style="font-size: 10px; border-collapse: collapse; border: 1px;" class="tdth" width="100%" border="1" cellspacing="0">
			<thead>
				<tr>
					<th height="30">No</th>
                    <th>Nama Supplier</th>
                    <th>Kecepatan Pengiriman</th>
                    <th>Tingkat Diskon</th>
                    <th>Pelayanan</th>
                    <th>Garansi</th>
                    <th>Keaslian Barang</th>
                    <th>Tempo Pembayaran</th>
                    <th>Bisa di Kembalikan</th>
                    <th>Tanggal</th>
				</tr>
			</thead>
			<tbody>
				<?php
				$sql="SELECT a.*, b.* from tb_nilai_supplier a JOIN tb_supplier b
						ON a.id_supplier_nilai=b.id_supplier order by a.id_nilai_supplier asc";
				$query=mysqli_query($con, $sql) or die(mysqli_error());
				while ($datakriteria=mysqli_fetch_array($query)) {
					$no++;
					$kecepatan_pengiriman = $datakriteria['kecepatan_pengiriman'];
                    $kecepatan_pengiriman_hasil = $kecepatan_pengiriman * 1;
                    $tingkat_diskon = $datakriteria['tingkat_diskon'];
                    $tingkat_diskon_hasil = $tingkat_diskon * 1;
                    $pelayanan = $datakriteria['pelayanan'];
                    $pelayanan_hasil = $pelayanan * 1;
                    $garansi = $datakriteria['garansi'];
                    $garansi_hasil = $garansi * 1;
                    $keaslian_barang = $datakriteria['keaslian_barang'];
                    $keaslian_barang_hasil = $keaslian_barang * 1;
                    $tempo_pembayaran = $datakriteria['tempo_pembayaran'];
                    $tempo_pembayaran_hasil = $tempo_pembayaran * 1;
                    $bisa_dikembalikan = $datakriteria['bisa_dikembalikan'];
                    $bisa_dikembalikan_hasil = $bisa_dikembalikan * 1;
					echo  "
						<tr>
							<td style='text-align:center; font-size: 10px; padding: 10px;'>$no</td>
							<td style='padding: 5px;'>".$datakriteria['nama_supplier']."</td>
							<td style='padding: 5px;'>".$kecepatan_pengiriman_hasil."</td>
							<td style='padding: 5px;'>".$tingkat_diskon_hasil."</td>
							<td style='padding: 5px;'>".$pelayanan_hasil."</td>
							<td style='padding: 5px;'>".$garansi_hasil."</td>
							<td style='padding: 5px;'>".$keaslian_barang_hasil."</td>
							<td style='padding: 5px;'>".$tempo_pembayaran_hasil."</td>
							<td style='padding: 5px;'>".$bisa_dikembalikan_hasil."</td>
							<td style='padding: 5px;'>".date('d-m-Y', strtotime($datakriteria['tanggal_nilai']))."</td>
						</tr>
						";
				}
				?>
				
			</tbody>
		</table>
		<br><br> 

		<font style="font-size: 11px;" align="right">Tabel normalisasi</font>
		<br><br>
		<table style="font-size: 10px; border-collapse: collapse; border: 1px;" class="tdth" width="100%" border="1" cellspacing="0">
			<thead>
				<tr>
					<th height="30">No</th>
                    <th>Nama Supplier</th>
                    <th>Kecepatan Pengiriman</th>
                    <th>Tingkat Diskon</th>
                    <th>Pelayanan</th>
                    <th>Garansi</th>
                    <th>Keaslian Barang</th>
                    <th>Tempo Pembayaran</th>
                    <th>Bisa di Kembalikan</th>
                    <th>Tanggal</th>
				</tr>
			</thead>
			<tbody>
				<?php
				$sql="SELECT a.*, b.* from tb_nilai_supplier a JOIN tb_supplier b
						ON a.id_supplier_nilai=b.id_supplier order by a.id_nilai_supplier asc";
				$query=mysqli_query($con, $sql) or die(mysqli_error());
				while ($datakriteria=mysqli_fetch_array($query)) {
					$no_normalisasi++;
					echo  "
						<tr>
							<td style='text-align:center; font-size: 10px; padding: 10px;'>$no_normalisasi</td>
							<td style='padding: 5px;'>".$datakriteria['nama_supplier']."</td>
							<td style='padding: 5px;'>".$datakriteria['kecepatan_pengiriman']."</td>
							<td style='padding: 5px;'>".$datakriteria['tingkat_diskon']."</td>
							<td style='padding: 5px;'>".$datakriteria['pelayanan']."</td>
							<td style='padding: 5px;'>".$datakriteria['garansi']."</td>
							<td style='padding: 5px;'>".$datakriteria['keaslian_barang']."</td>
							<td style='padding: 5px;'>".$datakriteria['tempo_pembayaran']."</td>
							<td style='padding: 5px;'>".$datakriteria['bisa_dikembalikan']."</td>
							<td style='padding: 5px;'>".date('d-m-Y', strtotime($datakriteria['tanggal_nilai']))."</td>
						";
				}
				?>
				
			</tbody>
		</table>
		<br><br>

		<font style="font-size: 11px;" align="right">Tabel Perangkingan</font>
		<br><br>
		<table style="font-size: 10px; border-collapse: collapse; border: 1px;" class="tdth" width="100%" border="1" cellspacing="0">
			<thead>
				<tr>
					<th height="30">No</th>
                    <th>Nama Supplier</th>
                    <th>Kecepatan Pengiriman</th>
                    <th>Tingkat Diskon</th>
                    <th>Pelayanan</th>
                    <th>Garansi</th>
                    <th>Keaslian Barang</th>
                    <th>Tempo Pembayaran</th>
                    <th>Bisa di Kembalikan</th>
                    <th>Hasil Keputusan</th>
                    <th>Tanggal</th>
				</tr>
			</thead>
			<tbody>
				<?php
				$sql="SELECT a.*, b.* from tb_nilai_supplier a JOIN tb_supplier b
						ON a.id_supplier_nilai=b.id_supplier order by a.id_nilai_supplier asc";
				$query=mysqli_query($con, $sql) or die(mysqli_error());
				while ($datakriteria=mysqli_fetch_array($query)) {
					$no_rangking++;
					$kecepatan_pengiriman = $datakriteria['kecepatan_pengiriman'];
                    $kecepatan_pengiriman_hasil = $kecepatan_pengiriman *20/100;
                    $tingkat_diskon = $datakriteria['tingkat_diskon'];
                    $tingkat_diskon_hasil = $tingkat_diskon *20/100;
                    $pelayanan = $datakriteria['pelayanan'];
                    $pelayanan_hasil = $pelayanan *20/100;
                    $garansi = $datakriteria['garansi'];
                    $garansi_hasil = $garansi *10/100;
                    $keaslian_barang = $datakriteria['keaslian_barang'];
                    $keaslian_barang_hasil = $keaslian_barang *10/100;
                    $tempo_pembayaran = $datakriteria['tempo_pembayaran'];
                    $tempo_pembayaran_hasil = $tempo_pembayaran *10/100;
                    $bisa_dikembalikan = $datakriteria['bisa_dikembalikan'];
                    $bisa_dikembalikan_hasil = $bisa_dikembalikan *10/100;
                    $hasil_akhir = $kecepatan_pengiriman_hasil + $tingkat_diskon_hasil + $pelayanan_hasil + $garansi_hasil + $keaslian_barang_hasil + $tempo_pembayaran_hasil + $bisa_dikembalikan_hasil ;
                    $hasil_akhir_bangat = number_format($hasil_akhir, 2);
					echo  "
						<tr>
							<td style='text-align:center; font-size: 10px; padding: 10px;'>$no_rangking</td>
							<td style='padding: 5px;'>".$datakriteria['nama_supplier']."</td>
							<td style='padding: 5px;'>".number_format($kecepatan_pengiriman_hasil, 2)."</td>
							<td style='padding: 5px;'>".number_format($tingkat_diskon_hasil, 2)."</td>
							<td style='padding: 5px;'>".number_format($pelayanan_hasil, 2)."</td>
							<td style='padding: 5px;'>".number_format($garansi_hasil, 2)."</td>
							<td style='padding: 5px;'>".number_format($keaslian_barang_hasil, 2)."</td>
							<td style='padding: 5px;'>".number_format($tempo_pembayaran_hasil, 2)."</td>
							<td style='padding: 5px;'>".number_format($bisa_dikembalikan_hasil, 2)."</td>
							<td style='padding: 5px;'>".$hasil_akhir_bangat."</td>
							<td style='padding: 5px;'>".date('d-m-Y', strtotime($datakriteria['tanggal_nilai']))."</td>
						</tr>
						";
				}
				?>
				
			</tbody>
		</table>
		<br><br>

    <table rules="rows" class="heading" style="width:100%;" border="0" >
        <tr>
            <td width="60%"></td>
	        <td align="center" class="font-arial"><font style="text-align:center; font-size: 10px;">
	        <?php
	        $bulan = array ("Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");
	                  $waktu[1]=date("d",time());
	                  $waktu[2]=date("m",time());
	                  $waktu[3]=date("Y",time());
	                  $tanggalini="$waktu[1] ".$bulan[$waktu[2]-1]." $waktu[3]";

	        $hari = date ("D");
	     
	        switch($hari){
	            case 'Sun':
	                $hari_ini = "Minggu";
	            break;
	     
	            case 'Mon':         
	                $hari_ini = "Senin";
	            break;
	     
	            case 'Tue':
	                $hari_ini = "Selasa";
	            break;
	     
	            case 'Wed':
	                $hari_ini = "Rabu";
	            break;
	     
	            case 'Thu':
	                $hari_ini = "Kamis";
	            break;
	     
	            case 'Fri':
	                $hari_ini = "Jumat";
	            break;
	     
	            case 'Sat':
	                $hari_ini = "Sabtu";
	            break;
	            
	            default:
	                $hari_ini = "Tidak di ketahui";     
	            break;
	        }
	          $tanggal= mktime(date("m"),date("d"),date("Y"));
	          echo "Jakarta, ".$hari_ini." " .$tanggalini." ";
	          
	        ?> 
	          <p><br>
	        </font>
	    </td>
        </tr>
        <tr >
            <td class="font-arial" align="center"></td>
            <td class="font-arial" align="center"><font style="text-align:center; font-size: 10px;">Manager</font></td>
        </tr>
        <tr>
            <td></td>
            <td style="height: 60px;"></td>
        </tr>
        <tr>
            <td class="font-arial" align="center"></td>
            <td class="font-arial" align="center">
            <font style="text-align:center; font-size: 10px;">Ade Sahroni, S.E</font>
            </td>
        </tr>
   </table>
	</div>
</body>
</html>

<?php
	$html = ob_get_contents(); //Proses untuk mengambil data
	ob_end_clean();
	$mpdf->WriteHTML(utf8_encode($html));
	$mpdf->Output($nama_file."-".$data['no_sj'].".pdf" ,'I');
	exit; 
?>