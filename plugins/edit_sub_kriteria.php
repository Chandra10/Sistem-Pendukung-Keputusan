<link rel="stylesheet" href="<?php echo VENDORURL."/datepicker/jquery-ui.css";?>">
<script src="<?php echo VENDORURL."/datepicker/jquery-ui.js";?>"></script>
<script src="<?php echo JSURL."/sweetalert2.all.js";?>"></script>

<script type="text/javascript">
$(document).ready(function(){
	
	$("#form-edit").submit(function(e){
			e.preventDefault();
			$('#error_sifat_sub_kriteria').html('');

            var formData   = new FormData();

			formData.append('id_sub_kriteria', $('#id_sub_kriteria').val());
			formData.append('id_kriteria_sub', $('#id_kriteria_sub').val());
            formData.append('nilai_sub_kriteria', $('#nilai_sub_kriteria').val());
            formData.append('sifat_sub_kriteria', $('#sifat_sub_kriteria').val());
            
            swal({
                    title: 'Konfirmasi Rubah Data !',
                    text: "Anda yakin ingin Rubah Data? ",
                    type: 'info',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes'
                }).then(function(result){
                    console.log(result);
                if (result.value) {
				      $.ajax({
			            url: "<?php echo AJAXURL."/ajax_edit_sub_kriteria.php";?>",
			            type: "post",
			            data: formData,
			            cache: false,
			            processData: false,
			            contentType: false,
			            success: function(result) {
			                var hasil = JSON.parse(result);
			                if (hasil.hasil !== "sukses") {
			                	$("#error_sifat_sub_kriteria").html(hasil.error.sifat_sub_kriteria);
                            } else {
			                    setTimeout(function () { 
			                            swal({
			                                title: 'Data Berhasil di Rubah',
                                            text : 'Proses Terlaksana dengan baik',
			                                type: 'success',
			                                timer: 3000,
			                                showConfirmButton: true
			                            });     
			                        },10);  
			                        window.setTimeout(function(){ 
			                            window.location.replace('?page=tabel_sub_kriteria');
			                        } ,1500);
			                }
			            }
			        });
	  			}
     		});
		});
});
</script>