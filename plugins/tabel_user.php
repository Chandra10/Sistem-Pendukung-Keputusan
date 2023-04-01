
<script src="<?php echo JSURL."/sweetalert2.all.js";?>"></script>


<script type="text/javascript">
    $(document).ready(function(){
    
    var tabel = $('#tabel-user').DataTable({
            "bprocessing": false,
            "serverSide": false,
            "bAutoWidth": false,
            "order":[[0, "desc"]],
            "ajax":{
                url : "<?php echo AJAXURL.'/ajax_tabel_user.php';?>",
                type: "post",
                dataType: 'json',
                error: function(response){
                    alert('Failed Load DataTables Data');
                },
            },
            "columns" :[
                {"data" : "id_user","visible": false},
                {"data" : "no", "orderable": false, class:'text-center'},
                {"data" : "nama"},
                {"data" : "username"},
                {"data" : "password"},
                {"data" : "status"},
                {"data" : "level"},
                {"data" : "foto"},
                {"data" : "action", class:'text-center', width:'110'}
            ],
            "lengthChange": true,
            /*"scrollY": 400,
            "scrollX": true,*/
            "bFilter": true
        });

   $(document).on('click', '.hapus_data', function(){
    var id_user = $(this).attr('id_user');
    swal({
            title: 'Konfirmasi Hapus !',
            text: "Anda yakin ingin menghapus? ",
            type: 'info',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes'
        }).then(function(result){
            console.log(result);
            if (result.value) {
    /* start ajax*/
    $.ajax({
        type: 'POST',
        url: "<?php echo AJAXURL."/ajax_hapus_user.php";?>",
        data: {id_user:id_user},
        success: function (msg) {
        if(msg){
        setTimeout(function () { 
                swal({
                    title   : 'Data Berhasil di Hapus',
                    type    : 'success',
                    text    : 'Anda Telah menghapus Data User',
                    timer: 3000,
                    showConfirmButton: true
                });     
            },10);  
            window.setTimeout(function(){ 
                window.location.replace('?page=tabel_user');
            } ,1500);
        }
        else{
            setTimeout(function () { 
                swal({
                    title: 'Gagal Hapus',
                    type: 'success',
                    timer: 3000,
                    showConfirmButton: true
                });     
            },10);
        }
    },
        error: function(response){
            console.log(response.responseText);
        }
    });
    /*end ajax*/

        }
    });

});

});
</script>