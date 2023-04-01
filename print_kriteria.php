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
	    <font style="font-size: 15px;" align="center">Laporan Data Kriteria</font>
		<hr size="10000px">
		<table style="font-size: 10px; border-collapse: collapse; border: 1px;" class="tdth" width="100%" border="1" cellspacing="0">
			<thead>
				<tr>
					<th height="30">No</th>
                    <th>Nama Kriteria</th>
                    <th>Keterangan</th>
				</tr>
			</thead>
			<tbody>
				<?php
				$sql="SELECT * FROM tb_kriteria order by id_kriteria desc";
				$query=mysqli_query($con, $sql) or die(mysqli_error());
				while ($datakriteria=mysqli_fetch_array($query)) {
					$no++;
					echo  "
						<tr>
							<td style='text-align:center; font-size: 10px; padding: 10px;'>$no</td>
							<td style='padding: 5px;'>".$datakriteria['nama_kriteria']."</td>
							<td style='padding: 5px;'>".$datakriteria['sifat_kriteria']."</td>
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