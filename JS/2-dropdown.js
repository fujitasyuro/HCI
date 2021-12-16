function FetchNSX(id) {
     $('#sub').html('');
     $.ajax({
          type: 'post',
          url: './DB/ajaxdata.php',
          data: {
               producer_id: id
          },
          success: function(data) {
               $('#sub').html(data);
          }
     })
}