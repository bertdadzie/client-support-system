$(document).ready(function() {
    $('#reply').submit(function(e) {
        e.preventDefault();
        $.post('../core/process.php', {func: 'reply', ticket: $.urlParam('id'), text: $('#rtext').val()}, function(data) {
            //alert(data);
            $.post('../core/process.php', {func: 'replies', ticket: $.urlParam('id')}, function(data) {
                $('#replies').empty();
                $('#replies').html(data);
                $('#rtext').val('');
            });
        });
    });
    
    
    $('#close_ticket').click(function(e) {
        $.post('../core/process.php', {func: 'close_ticket', ticket: $.urlParam('id')}, function(data) {
            if(data == 'success'){
                location.reload();
            }
        }); 
    });
    
});

$.urlParam = function(name){
	var results = new RegExp('[\?&]' + name + '=([^&#]*)').exec(window.location.href);
	return results[1] || 0;
}
