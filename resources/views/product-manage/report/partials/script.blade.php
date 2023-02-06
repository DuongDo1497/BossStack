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
            document.forms['frm'].submit();
          }
        });
    });

    $('.btn-save').click(function() {
      $('#frm').submit();
    });

  });
</script>
<script type="text/javascript">
        $(function () {
            param = {   format: "dd/mm/yyyy",
                        autoclose: true,
                        daysOfWeekHighlighted: "0,6",
                        todayHighlight: true,
                        todayBtn: "linked",
                        language: "vi",
                    };
            $('#fromDate').datepicker(param);
            $('#toDate').datepicker(param);
        });
</script>
<script language="javascript">
function CheckAll(parent){
    var countcheck = 0;
    var ids = document.getElementsByTagName('input');
    for(var i=0; i<ids.length; i++){
        if(ids[i].name == "ids[]"){
            countcheck++;
            ids[i].checked = parent.checked;
        }
    }
    var checklabel = document.getElementById("checklabel");
    checklabel.innerHTML = countcheck;    
}

function CheckId(parent){
    var countcheck = 0;
    var checklabel = document.getElementById("checklabel");
    var ids = document.getElementsByTagName('input');
    for(var i=0; i<ids.length; i++){
        if(ids[i].name == "ids[]" && ids[i].checked == true){
            countcheck++;
        }
    }
    var allbox = document.getElementById("allbox");
    allbox.checked = false;
    
    checklabel.innerHTML = countcheck;    
}
</script>