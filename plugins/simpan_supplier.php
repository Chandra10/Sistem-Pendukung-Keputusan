<link rel="stylesheet" href="<?php echo VENDORURL."/datepicker/jquery-ui.css";?>">
<script src="<?php echo VENDORURL."/datepicker/jquery-ui.js";?>"></script>
<script src="<?php echo JSURL."/sweetalert2.all.js";?>"></script>

<script type="text/javascript">
$(document).ready(function(){

	$( function() {
            $( "#tanggal" ).datepicker({
                dateFormat: "yy-mm-dd"
              });
          });

	$("#form-simpan").submit(function(e){
			e.preventDefault();
			$('#error_nama_supplier').html('');
			$('#error_telepon').html('');
			$('#error_alamat').html('');
            
            var formData   = new FormData();

			formData.append('id_supplier', $('#id_supplier').val());
			formData.append('nama_supplier', $('#nama_supplier').val());
            formData.append('telepon', $('#telepon').val());
            formData.append('alamat', $('#alamat').val());
                         
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
			            url: "<?php echo AJAXURL."/ajax_simpan_supplier.php";?>",
			            type: "post",
			            data: formData,
			            cache: false,
			            processData: false,
			            contentType: false,
			            success: function(result) {
			                var hasil = JSON.parse(result);
			                if (hasil.hasil !== "sukses") {
			                	$("#error_nama_supplier").html(hasil.error.nama_supplier);
			                    $("#error_telepon").html(hasil.error.telepon);
			                    $("#error_alamat").html(hasil.error.alamat);
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
			                            window.location.replace('?page=tabel_supplier');
			                        } ,1500);
			                }
			            }
			        });
	  			}
     		});
		});
});
</script>