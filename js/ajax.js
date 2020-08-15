$(document).ready(function(){
            $("#button").click(function(){
                var name=$("#replies").val();
                $.ajax({
                    url:'replies_action.php',
                    method:'POST',
                    data:{
                        replies:replies
                    },
                   success:function(data){
                       alert(data);
                   }
                });
            });
        });