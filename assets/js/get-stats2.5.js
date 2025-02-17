$(document).ready(function(){
            load_stats();
                function load_stats(){
                    $.ajax({
                        url:"/ajax.php?ajax=get-stats",
                        type : 'GET',
                        dataType : 'json',
                        success:function(data){
                          document.getElementById("totaluser").innerHTML = data.user;
                          document.getElementById("totalshare").innerHTML = data.share;
                          document.getElementById("totalsize").innerHTML = data.size;
                          document.getElementById("totaldownload").innerHTML = data.download;
                        }
                    })
                }
       });