<html>
    <head>
        <!--Load the AJAX API-->
        <script type="text/javascript" src="https://www.google.com/jsapi"></script>
        <script type="text/javascript">
            google.load("visualization", "1", {packages: ["corechart"]});
            google.setOnLoadCallback(drawChart);
 
            // Callback that creates and populates a data table,
            // instantiates the pie chart, passes in the data and
            // draws it.
            function drawChart() {
                var data = google.visualization.arrayToDataTable([
                    ['Year', 'Visitations', { role: 'style' } ],
                    ['2010', 10, 'color: gray'],
                    ['2020', 14, 'color: #76A7FA'],
                    ['2030', 16, 'opacity: 0.2'],
                    ['2040', 22, 'stroke-color: #703593; stroke-width: 4; fill-color: #C5A5CF'],
                    ['2050', 28, 'stroke-color: #871B47; stroke-opacity: 0.6; stroke-width: 8; fill-color: #BC5679; fill-opacity: 0.2']
            ]);

            var options = {'title': 'How Much Pizza I Ate Last Night',
                    'width': 400,
                    'height': 300};

            var chart = new google.visualization.BarChart(document.getElementById('chart_div'));
                chart.draw(data, options);

            }
            /*function drawChart() {
 
                // Create the data table.
                var data = new google.visualization.DataTable();
                data.addColumn('string', 'Topping');
                data.addColumn('number', 'Slices');
                data.addRows([
                    ['Mushrooms', 3],
                    ['Onions', 1],
                    ['Olives', 1],
                    ['Zucchini', 1],
                    ['Pepperoni', 2]
                ]);
 
                // Set chart options
                var options = {'title': 'How Much Pizza I Ate Last Night',
                    'width': 400,
                    'height': 300};
 
                // Instantiate and draw our chart, passing in some options.
                var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
                chart.draw(data, options);
            }*/
        </script>
    </head>
 
    <body>
        <!--Div that will hold the pie chart-->
        <div id="chart_div">
        
        </div>
    </body>
</html>