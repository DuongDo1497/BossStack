<script>
  $(function() {
    $('.btn-delete').click(function() {
      var id = $(this).data('id');
      swal({
          title: "Bạn có chắc không?",
          text: "Nội dung xóa sẽ được đưa vào thùng rác",
          icon: "warning",
          buttons: true,
          dangerMode: true,
        })
        .then((value) => {
          console.log(value);
          if (value) {
            document.forms['form-delete-' + id].submit();
          }
        });
    });

    $('.btn-save').click(function() {
      $('#frm').submit();
    });
  });

  let boxExport = document.querySelectorAll('.box-primary');
  let url = window.location.href;
  boxExport.forEach(function(element, index) {
    if (index === 1) {
      element.style.display = 'none';
      if (url.includes('process?continue=true')) {
        element.style.display = 'block';
      }
    }
  })
</script>
