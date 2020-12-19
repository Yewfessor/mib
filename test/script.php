<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">
  $('#product_type').change(function() {
    var id_type = $(this).val();
    $.ajax({
      type: "POST",
      url: "ajax_db.php",
      data: {
        product_type_id: id_type,
        function: 'product_type'
      },
      success: function(data) {
        $('#product_line_up').html(data);
      }
    });
  });
</script>
