 google.charts.load('current', {'packages':['line']});
      google.charts.setOnLoadCallback(drawChart);

    function drawChart() {

      var data = new google.visualization.DataTable();
      data.addColumn('number', 'Month');
      data.addColumn('number', 'Incomes');
      data.addColumn('number', 'Outcomes');
 

      data.addRows([
	  
        [1,  37.8, 80.8],
        [2,  30.9, 69.5],
        [3,  25.4,   57], 
        [4,  11.7, 18.8], 
        [5,  11.9, 17.6], 
        [6,   8.8, 13.6],  
        [7,   7.6, 12.3],  
        [8,  12.3, 29.2], 
        [9,  16.9, 42.9], 
        [10, 12.8, 30.9], 
        [11,  5.3,  7.9],  
        [12,  6.6,  8.4],
      ]);

      var options = {
        chart: {
          title: 'Income & Outcomes by months',
          subtitle: 'in NIS'
        },

        height:500,
        axes: {
          x: {
            0: {side: 'top'}
          }
        }
      };

      var chart = new google.charts.Line(document.getElementById('line_top_x'));

      chart.draw(data, google.charts.Line.convertOptions(options));
    }
	
	