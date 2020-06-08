<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.19.2/axios.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.2/jspdf.min.js"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="jquery-1.3.2.min.js" type="text/javascript"></script>
    <title>Reporte 5</title>
</head>

<body>
    <script>
        var chartColors = {
            red: 'rgb(255, 99, 132)',
            orange: 'rgb(255, 159, 64)',
            yellow: 'rgb(255, 205, 86)',
            green: 'rgb(75, 192, 192)',
            blue: 'rgb(54, 162, 235)',
            purple: 'rgb(153, 102, 255)',
            grey: 'rgb(231,233,237)'
        };

        var randomScalingFactor = function() {
            return (Math.random() > 0.5 ? 1.0 : 1.0) * Math.round(Math.random() * 100);
        };

        var data = {
            labels: ["Empresas", "N. Vacantes"],
            datasets: [{
                label: 'Fuel',
                backgroundColor: [
                    chartColors.red,
                    chartColors.blue,
                ],
                data: [
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                ]
            }]
        };

        var myBar = new Chart(document.getElementById("myChart"), {
            type: 'horizontalBar',
            data: data,
            options: {
                responsive: true,
                title: {
                    display: true,
                    text: "Chart.js - Base Example"
                },
                tooltips: {
                    mode: 'index',
                    intersect: false
                },
                legend: {
                    display: false,
                },
                scales: {
                    xAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });

        var myBar2 = new Chart(document.getElementById("myChart2"), {
            type: 'horizontalBar',
            data: data,
            options: {
                responsive: true,
                title: {
                    display: true,
                    text: "Chart.js - Changing X Axis Step Size"
                },
                tooltips: {
                    mode: 'index',
                    intersect: false
                },
                legend: {
                    display: false,
                },
                scales: {
                    xAxes: [{
                        ticks: {
                            beginAtZero: true,
                            stepSize: 2
                        }
                    }]
                }
            }
        });

        var myBar3 = new Chart(document.getElementById("myChart3"), {
            type: 'horizontalBar',
            data: data,
            options: {
                responsive: true,
                maintainAspectRatio: false,
                title: {
                    display: true,
                    text: "Chart.js - Setting maintainAspectRatio = false and Setting Parent Width/Height"
                },
                tooltips: {
                    mode: 'index',
                    intersect: false
                },
                legend: {
                    display: false,
                },
                scales: {
                    xAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });

        $('#downloadPdf').click(function(event) {
            // get size of report page
            var reportPageHeight = $('#reportPage').innerHeight();
            var reportPageWidth = $('#reportPage').innerWidth();

            // create a new canvas object that we will populate with all other canvas objects
            var pdfCanvas = $('<canvas />').attr({
                id: "canvaspdf",
                width: reportPageWidth,
                height: reportPageHeight
            });

            // keep track canvas position
            var pdfctx = $(pdfCanvas)[0].getContext('2d');
            var pdfctxX = 0;
            var pdfctxY = 0;
            var buffer = 100;

            // for each chart.js chart
            $("canvas").each(function(index) {
                // get the chart height/width
                var canvasHeight = $(this).innerHeight();
                var canvasWidth = $(this).innerWidth();

                // draw the chart into the new canvas
                pdfctx.drawImage($(this)[0], pdfctxX, pdfctxY, canvasWidth, canvasHeight);
                pdfctxX += canvasWidth + buffer;

                // our report page is in a grid pattern so replicate that in the new canvas
                if (index % 2 === 1) {
                    pdfctxX = 0;
                    pdfctxY += canvasHeight + buffer;
                }
            });

            // create new pdf and add our new canvas as an image
            var pdf = new jsPDF('l', 'pt', [reportPageWidth, reportPageHeight]);
            pdf.addImage($(pdfCanvas)[0], 'PNG', 0, 0);

            // download the pdf
            pdf.save('filename.pdf');
        });
    </script>
    <a href="#" id="downloadPdf">Download Report Page as PDF</a>
    <br /><br />
    <div id="reportPage">
        <div id="chartContainer" style="width: 70%;float: center;">
            <canvas id="myChart"></canvas>
        </div>
    </div>
</body>

</html>