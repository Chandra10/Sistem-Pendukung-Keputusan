<link rel="stylesheet" href="<?php echo VENDORURL."/datepicker/jquery-ui.css";?>">
<script src="<?php echo VENDORURL."/datepicker/jquery-ui.js";?>"></script>
<script src="<?php echo JSURL."/sweetalert2.all.js";?>"></script>

<script type="text/javascript">
$(document).ready(function(){
	
	$("#form-edit").submit(function(e){
			e.preventDefault();
			$('#error_id_supplier_nilai').html('');

            var formData   = new FormData();

			formData.append('id_nilai_supplier', $('#id_nilai_supplier').val());
			formData.append('id_supplier_nilai', $('#id_supplier_nilai').val());
            formData.append('kecepatan_pengiriman', $('#kecepatan_pengiriman').val());
            formData.append('tingkat_diskon', $('#tingkat_diskon').val());
            formData.append('pelayanan', $('#pelayanan').val());
			formData.append('garansi', $('#garansi').val());
            formData.append('keaslian_barang', $('#keaslian_barang').val());
            formData.append('tempo_pembayaran', $('#tempo_pembayaran').val());
            formData.append('bisa_dikembalikan', $('#bisa_dikembalikan').val());
            formData.append('tanggal_nilai', $('#tanggal_nilai').val());
            
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
			            url: "<?php echo AJAXURL."/ajax_edit_nilai_supplier.php";?>",
			            type: "post",
			            data: formData,
			            cache: false,
			            processData: false,
			            contentType: false,
			            success: function(result) {
			                var hasil = JSON.parse(result);
			                if (hasil.hasil !== "sukses") {
			                	$("#error_id_supplier_nilai").html(hasil.error.id_supplier_nilai);
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
			                            window.location.replace('?page=tabel_nilai_supplier');
			                        } ,1500);
			                }
			            }
			        });
	  			}
     		});
		});
});
</script>