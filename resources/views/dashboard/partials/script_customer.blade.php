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
        pattern: ['#85C88A', '#DE6573', '#0A9A4A']
    },      
  });

  // Tạm ẩn
  // var listmonth = [];  
  // var i = 1;
  // listmonth[0] = ['x'];
  // listmonth[1] = ['Thu'];
  // listmonth[2] = ['Chi'];
  // @foreach($listmonth as $key=>$item)
  //   listmonth[0][i] = '{{ "$key" }}';
  //   listmonth[1][i] = {{ $item['income_amount'] }};
  //   listmonth[2][i] = {{ $item['expense_amount'] }};
  //   i++;
  // @endforeach

  // var width_chart5 = $('#chart5').width();

  // c3.generate({
  //   bindto: '#chart5',
  //   data: {
  //     type: 'line',
  //     x: 'x',
  //     y: 'y',
  //     columns: listmonth,
  //     names: {
  //       sample: 'Thu',
  //       sample1: 'Chi',
  //     },
  //     selection: {
  //       enabled: true
  //     }
  //   },
  //   color: {
  //       pattern: ['#979AE9', '#8BD6C5']
  //   },
  //   axis: {
  //     x: {
  //       type: 'timeseries',
  //       tick: {
  //         format: "%d/%m"
  //       },
  //       label:{
  //         text: 'Thời gian',
  //         position: 'outer-right'
  //       },
  //     },
  //     y : {
  //       tick: {
  //           format: d3.format(",")
  //       },
  //       label:{
  //         text: 'ĐVT: VND',
  //         position: 'inner-top'
  //       } 
  //     }
  //   },
  //   size: {
  //       height: 500,
  //       width: width_chart5
  //   },
  //   padding: {
  //     left: 100,
  //     right: 30,
  //     top: 50,
  //     bottom: 0
  //   }       
  // });

  // var width_chart5_mb = $('#chart5_mb').width();

  // var listmonth_mb = [];  
  // console.log(listmonth_mb);
  // var i = 1;
  // listmonth_mb[0] = ['x'];
  // listmonth_mb[1] = ['Thu'];
  // listmonth_mb[2] = ['Chi'];
  // @foreach($listmonth as $key=>$item)
  //   listmonth_mb[0][i] = '{{ "$key" }}';
  //   listmonth_mb[1][i] = {{ $item['income_amount'] }};
  //   listmonth_mb[2][i] = {{ $item['expense_amount'] }};
  //   i++;
  // @endforeach
    

  // c3.generate({
  //   bindto: '#chart5_mb',
  //   data: {
  //     type: 'line',
  //     x: 'x',
  //     y: 'y',
  //     columns: listmonth_mb,
  //     names: {
  //       sample: 'Thu',
  //       sample1: 'Chi',
  //     },
  //   },
  //   axis: {
  //     x: {
  //       type: 'timeseries',
  //       tick: {
  //         format: "%d/%m"
  //       },
  //       label:{
  //         text: 'Thời gian',
  //         position: 'outer-right'
  //       } 
  //     },
  //     y : {
  //       tick: {
  //           format: d3.format(",")
  //       },
  //       label:{
  //         text: 'ĐVT: VND',
  //         position: 'inner-top'
  //       } 
  //     }
  //   },
  //   size: {
  //       height: 300,
  //       width: width_chart5
  //   },
  //   padding: {
  //     left: 60,
  //     right: 10,
  //     top: 30,
  //     bottom: 0
  //   }       
  // });


  // var width_browser = $(document).width();

  // if (width_browser < 576) {
  //   $('#chart5').hide();
  //   $('#chart5_mb').show();
  // }else{
  //   $('#chart5').show();
  //   $('#chart5_mb').hide();
  // }

</script>
<script>
  @if(isset($collections) and isset($asset_0) and isset($asset_1))

  var listasset = [];
  var i = 0;
  var total_asset_0 = 0;        
  var total_asset_1 = 0;
  @foreach($asset_0 as $item)
      listasset[i++] = ['{{ $item['assettypename'] }}', {{ $item['amount'] }}];
      total_asset_0 += {{ $item['amount'] }};
  @endforeach

  var width_chart2 = $('#rptasset1').width();

  c3.generate({
    bindto: '#rptasset1',
    data: {
      type : 'donut',
      onmouseover: function (d, i) { console.log("onmouseover", d, i, this); },
      onmouseout: function (d, i) { console.log("onmouseout", d, i, this); },
      onclick: function (d, i) { console.log("onclick", d, i, this); },
      columns: listasset,
      colors: {
        "Nợ Thế Chấp": '#F4BE37',
        "Nợ Tín Chấp": '#5388D8',
      }
    },
    donut: {
      label: {
        show: false
      },
      width: 25,
    },
    axis: {
      x: {
        label: 'Sepal.Width'
      },
      y: {
        label: 'Petal.Width'
      }
    },
    size: {
        height: 220,
        width: width_chart2
    },
    padding: {
      right: 50
    }        
  });

  d3.select("#rptasset1 .c3-chart-arcs-title").append("tspan").attr("dy", 5).attr("x", 0).attr("class", "second-title").text(formatNumberDecimal("8421179444", 0));

  var listasset = [];
  var i = 0;        
  @foreach($asset_1 as $item)
      listasset[i++] = ['{{ $item['assettypename'] }}', {{ $item['amount'] }}];
      total_asset_1 += {{ $item['amount'] }};
  @endforeach

  var total_account = 0;
  @foreach($listaccounts as $cashasset)
      total_account += {{ $cashasset->amount }};
  @endforeach

  listasset[i++] = ['Ví mục tiêu', total_account];
  total_asset_1 += total_account;

  var width_chart2 = $('#rptasset2').width();

  c3.generate({
    bindto: '#rptasset2',
    data: {
      type : 'donut',
      onmouseover: function (d, i) { console.log("onmouseover", d, i, this); },
      onmouseout: function (d, i) { console.log("onmouseout", d, i, this); },
      onclick: function (d, i) { console.log("onclick", d, i, this); },
      columns: listasset,
      colors: {
        "Tài Sản Vô Hình": '#F4BE37',
        "Ví mục tiêu": '#5388D8',
      }
    },
    donut: {
      label: {
        show: false
      },
      width: 25,
    },
    axis: {
      x: {
        label: 'Sepal.Width'
      },
      y: {
        label: 'Petal.Width'
      }
    },
    size: {
        height: 220,
        width: width_chart2
    },
    padding: {
      right: 50
    }        
  });

  d3.select("#rptasset2 .c3-chart-arcs-title").append("tspan").attr("dy", 5).attr("x", 0).attr("class", "second-title").text(formatNumberDecimal("8421179444", 0));

  var listasset = [
    ["Nợ", total_asset_0],
    ["Tài sản", total_asset_1],
  ];

  var width_chart2 = $('#rptasset3').width();

  c3.generate({
    bindto: '#rptasset3',
    data: {
      type: 'donut',
      onmouseover: function (d, i) { console.log("onmouseover", d, i, this); },
      onmouseout: function (d, i) { console.log("onmouseout", d, i, this); },
      onclick: function (d, i) { console.log("onclick", d, i, this); },
      columns: listasset,
      colors: {
        "Nợ": '#F4BE37',
        "Tài sản": '#5388D8',
      }
    },
    donut: {
        // title: "Tổng tài sản thực",
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

  d3.select("#rptasset3 .c3-chart-arcs-title").append("tspan").attr("dy", 5).attr("x", 0).attr("class", "second-title").text(formatNumberDecimal(total_asset_0-total_asset_1, 0));

@endif


@if(isset($collections) and isset($asset_0) and isset($asset_1))

  var listasset = [];
  var i = 0;
  var total_asset_0 = 0;        
  var total_asset_1 = 0;
  @foreach($asset_0 as $item)
      listasset[i++] = ['{{ $item['assettypename'] }}', {{ $item['amount'] }}];
      total_asset_0 += {{ $item['amount'] }};
  @endforeach

  var width_chart1mb = $('#rptasset1mb').width();

  c3.generate({
    bindto: '#rptasset1mb',
    data: {
      type : 'donut',
      onmouseover: function (d, i) { console.log("onmouseover", d, i, this); },
      onmouseout: function (d, i) { console.log("onmouseout", d, i, this); },
      onclick: function (d, i) { console.log("onclick", d, i, this); },
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
        width: width_chart1mb
    },
    padding: {
      right: 50
    }        
  });

  d3.select("#rptasset1mb .c3-chart-arcs-title").append("tspan").attr("dy", 5).attr("x", 0).attr("class", "second-title").text(formatNumberDecimal("8421179444", 0));

  var listasset = [];
  var i = 0;        
  @foreach($asset_1 as $item)
      listasset[i++] = ['{{ $item['assettypename'] }}', {{ $item['amount'] }}];
      total_asset_1 += {{ $item['amount'] }};
  @endforeach

  var total_account = 0;
  @foreach($listaccounts as $cashasset)
      total_account += {{ $cashasset->amount }};
  @endforeach

  listasset[i++] = ['Ví mục tiêu', total_account];
  total_asset_1 += total_account;

  var width_chart2mb = $('#rptasset2mb').width();

  c3.generate({
    bindto: '#rptasset2mb',
    data: {
      type : 'donut',
      onmouseover: function (d, i) { console.log("onmouseover", d, i, this); },
      onmouseout: function (d, i) { console.log("onmouseout", d, i, this); },
      onclick: function (d, i) { console.log("onclick", d, i, this); },
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
        width: width_chart2mb
    },
    padding: {
      right: 50
    }        
  });

  d3.select("#rptasset2mb .c3-chart-arcs-title").append("tspan").attr("dy", 5).attr("x", 0).attr("class", "second-title").text(formatNumberDecimal("8421179444", 0));

  var listasset = [
    ["Nợ", total_asset_0],
    ["Tài sản", total_asset_1],
  ];

  var width_chart3mb = $('#rptasset3mb').width();

  c3.generate({
    bindto: '#rptasset3mb',
    data: {
      type: 'donut',
      onmouseover: function (d, i) { console.log("onmouseover", d, i, this); },
      onmouseout: function (d, i) { console.log("onmouseout", d, i, this); },
      onclick: function (d, i) { console.log("onclick", d, i, this); },
      columns: listasset,
      colors: {
        "Nợ": '#F4BE37',
        "Tài sản": '#5388D8',
      }
    },
    donut: {
        // title: "Tổng tài sản thực",
        label: {
          show: false 
        },
        width: 25,
    },
    size: {
        height: 220,
        width: width_chart3mb
    },
    padding: {
      right: 50
    }        
  });

  d3.select("#rptasset3mb .c3-chart-arcs-title").append("tspan").attr("dy", 5).attr("x", 0).attr("class", "second-title").text(formatNumberDecimal(total_asset_0-total_asset_1, 0));

@endif

</script>