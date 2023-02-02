<script>
  function selectOnlyThis(id) {
    var myCheckbox = document.getElementsByName("assetid");
    Array.prototype.forEach.call(myCheckbox, function(el) {
      el.checked = false;
    });
    id.checked = true;
  }
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
    $('#assetdate').datepicker(param);
  });
</script>
<script>
  @if (isset($collections) and isset($asset_0) and isset($asset_1))

    var listasset = [];
    var i = 0;
    var total_asset_0 = 0;
    var total_asset_1 = 0;
    @foreach ($asset_0 as $item)
      listasset[i++] = ['{{ $item['assettypename'] }}', {{ $item['amount'] }}];
      total_asset_0 += {{ $item['amount'] }};
    @endforeach

    var width_chart2 = $('#rptasset1').width();

    c3.generate({
      bindto: '#rptasset1',
      data: {
        type: 'donut',
        onmouseover: function(d, i) {
          console.log("onmouseover", d, i, this);
        },
        onmouseout: function(d, i) {
          console.log("onmouseout", d, i, this);
        },
        onclick: function(d, i) {
          console.log("onclick", d, i, this);
        },
        columns: listasset,
        colors: {
          "Nợ Thế Chấp": '#F4BE37',
          "Nợ Tín Chấp": '#5388D8',
        }
      },
      axis: {
        x: {
          label: 'Sepal.Width'
        },
        y: {
          label: 'Petal.Width'
        }
      },
      donut: {
        label: {
          show: false
        },
        width: 25,
      },
      size: {
        height: 220,
        width: width_chart2
      },
      padding: {
        right: 50
      }
    });

    d3.select("#rptasset1 .c3-chart-arcs-title").append("tspan").attr("dy", 5).attr("x", 0).attr("class",
      "second-title").text(formatNumberDecimal(total_asset_0, 0));

    var listasset = [];
    var i = 0;
    @foreach ($asset_1 as $item)
      listasset[i++] = ['{{ $item['assettypename'] }}', {{ $item['amount'] }}];
      total_asset_1 += {{ $item['amount'] }};
    @endforeach

    var total_account = 0;
    @foreach ($listaccounts as $cashasset)
      total_account += {{ $cashasset->amount }};
    @endforeach

    listasset[i++] = ['Ví mục tiêu', total_account];
    total_asset_1 += total_account;

    var width_chart2 = $('#rptasset2').width();
    c3.generate({
      bindto: '#rptasset2',
      data: {
        type: 'donut',
        onmouseover: function(d, i) {
          console.log("onmouseover", d, i, this);
        },
        onmouseout: function(d, i) {
          console.log("onmouseout", d, i, this);
        },
        onclick: function(d, i) {
          console.log("onclick", d, i, this);
        },
        columns: listasset,
        colors: {
          "Tài Sản Vô Hình": '#F4BE37',
          "Ví mục tiêu": '#5388D8',
        }
      },
      axis: {
        x: {
          label: 'Sepal.Width'
        },
        y: {
          label: 'Petal.Width'
        }
      },
      donut: {
        label: {
          show: false
        },
        width: 25,
      },
      size: {
        height: 220,
        width: width_chart2
      },
      padding: {
        right: 50
      }
    });

    d3.select("#rptasset2 .c3-chart-arcs-title").append("tspan").attr("dy", 5).attr("x", 0).attr("class",
      "second-title").text(formatNumberDecimal(total_asset_1, 0));

    var listasset = [
      ["Nợ", total_asset_0],
      ["Tài sản", total_asset_1],
    ];

    var width_chart2 = $('#rptasset3').width();

    c3.generate({
      bindto: '#rptasset3',
      data: {
        type: 'donut',
        onmouseover: function(d, i) {
          console.log("onmouseover", d, i, this);
        },
        onmouseout: function(d, i) {
          console.log("onmouseout", d, i, this);
        },
        onclick: function(d, i) {
          console.log("onclick", d, i, this);
        },
        columns: listasset,
        colors: {
          "Nợ": '#F4BE37',
          "Tài sản": '#5388D8',
        }
      },
      donut: {
        title: "Tổng tài sản thực",
        label: {
          show: false
        },
        width: 25
      },
      size: {
        height: 220,
        width: width_chart2
      },
      padding: {
        right: 50
      }
    });

    d3.select("#rptasset3 .c3-chart-arcs-title").append("tspan").attr("dy", 25).attr("x", 0).attr("class",
      "second-title").text(formatNumberDecimal(total_asset_0 - total_asset_1, 0));
  @endif
</script>
