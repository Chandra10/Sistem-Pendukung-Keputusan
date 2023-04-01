<link rel="stylesheet" href="<?php echo VENDORURL."/datepicker/jquery-ui.css";?>">
<script src="<?php echo VENDORURL."/datepicker/jquery-ui.js";?>"></script>
<script src="<?php echo JSURL."/sweetalert2.all.js";?>"></script>

<script type="text/javascript">
$(document).ready(function(){

	
	$("#form-simpan").submit(function(e){
			e.preventDefault();
			$('#error_nama_kriteria').html('');
			$('#error_sifat_kriteria').html('');
            
            var formData   = new FormData();

			formData.append('id_kriteria', $('#id_kriteria').val());
			formData.append('nama_kriteria', $('#nama_kriteria').val());
            formData.append('sifat_kriteria', $('#sifat_kriteria').val());
                         
            swal({
                    title: 'Konfirmasi Tambah Data !',
                    text: "Anda yakin ingin Simpan Berkas? ",
                    type: 'info',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes'
                }).then(function(result){
                    console.log(result);
                if (result.value) {
				      $.ajax({
			            url: "<?php echo AJAXURL."/ajax_simpan_kriteria.php";?>",
			            type: "post",
			            data: formData,
			            cache: false,
			            processData: false,
			            contentType: false,
			            success: function(result) {
			                var hasil = JSON.parse(result);
			                if (hasil.hasil !== "sukses") {
			                	$("#error_nama_kriteria").html(hasil.error.nama_kriteria);
			                    $("#error_sifat_kriteria").html(hasil.error.sifat_kriteria);
                            } else {
			                    setTimeout(function () { 
			                            swal({
			                                title: 'Data Berhasil di Simpan',
                                            text : 'Proses Terlaksana dengan baik',
			                                type: 'success',
			                                timer: 3000,
			                                showConfirmButton: true
			                            });     
			                        },10);  
			                        window.setTimeout(function(){ 
			                            window.location.replace('?page=tabel_kriteria');
			                        } ,1500);
			                }
			            }
			        });
	  			}
     		});
		});
});
</script>