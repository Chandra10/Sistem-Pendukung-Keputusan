<script src="<?php echo JSURL."/sweetalert2.all.js";?>"></script>

<script type="text/javascript">
$(document).ready(function(){
	$("#form-simpan").submit(function(e){
			e.preventDefault();
			$('#error_nama').html('');
			$('#error_username').html('');
            $('#error_password').html('');

            var fileupload = $('#fileupload').prop('files')[0];
            var formData   = new FormData();

			formData.append('id_user', $('#id_user').val());
            formData.append('nama', $('#nama').val());
            formData.append('username', $('#username').val());
            formData.append('password', $('#password').val());
            formData.append('level', $('#level').val());
            formData.append('fileupload', fileupload);
            
            swal({
                    title: 'Konfirmasi Tambah Data User !',
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
			            url: "<?php echo AJAXURL."/ajax_simpan_user.php";?>",
			            type: "post",
			            data: formData,
			            cache: false,
			            processData: false,
			            contentType: false,
			            success: function(result) {
			                var hasil = JSON.parse(result);
			                if (hasil.hasil !== "sukses") {
			                    $("#error_nama").html(hasil.error.nama);
			                    $("#error_username").html(hasil.error.username);
                                $("#error_password").html(hasil.error.password);
                            } else {
			                    setTimeout(function () { 
			                            swal({
			                                title: 'Data User Berhasil di Simpan',
                                            text : 'Proses Terlaksana dengan baik',
			                                type: 'success',
			                                timer: 3000,
			                                showConfirmButton: true
			                            });     
			                        },10);  
			                        window.setTimeout(function(){ 
			                            window.location.replace('?page=tabel_user');
			                        } ,1500);
			                }
			            }
			        });
	  			}
     		});
		});
});
</script>