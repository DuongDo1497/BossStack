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
  $(function() {
    param = {
      format: "dd/mm/yyyy",
      autoclose: true,
      daysOfWeekHighlighted: "0,6",
      todayHighlight: true,
      todayBtn: "linked",
      language: "vi",
    };
    $('#birthday').datepicker(param);
  });
</script>
<script>
  c3.generate({
    bindto: '#chart5',
    data: {
      columns: [
        ['data1', 30, 20, 50, 40, 60, 50],
        ['data2', 200, 130, 90, 240, 130, 220],
        ['data3', 300, 200, 160, 400, 250, 250],
      ],
      types: {
        data1: 'bar',
        data2: 'bar',
        data3: 'spline',
      },
      names: {
        data1: 'Doanh thu',
        data2: 'Chi phí',
        data3: 'Lợi nhuận',
      },
      selection: {
        enabled: true
      }
    },
    color: {
      pattern: ['#85C88A', '#DE6573', '#FBC540']
    },
  });
</script>
