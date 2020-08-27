$("#insert_form").submit(function(e) {
    e.preventDefault();
    $.ajax({
      type: 'POST',
      url: 'index.php?n=replies_action',
      data: $('#insert_form').serialize(),
      success: function() {
        $.get("./s.php", function(html) {
         $("#table_content").html(html);
        });
      }, //You missed this
      error: function() {
        console.log("Signup was unsuccessful");
      }
    });
  }); //You missed this

