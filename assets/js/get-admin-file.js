$(document).ready(function(){
            load_data();
                function load_data(page){
                    $.ajax({
                        url:"/ajax.php?ajax=get-table-admin",
                        method:"POST",
                        data:{page:page},
                        success:function(data){
                        $('#data-file-mgr').html(data);
                        }
                    })
                }
                $(document).on('click', '.halaman', function(){
                var page = $(this).attr("id");
                load_data(page);
                });
                $(document).on('click', '.halamanmgr', function(){
                var page = document.getElementById('gopage').value;
                load_data(page);
                });
            });