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
