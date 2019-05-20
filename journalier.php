<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Test</title>
</head>
<body>
    <script src="assets/js/jquery.canvasjs.min.js"></script>
    <script src="assets/js/canvasjs.min.js"></script>
    <script src="assets/js/canvasjs.react.js"></script>
    <script>   
        window.onload = function () {

        var chart1 = new CanvasJS.Chart("chartContainer", {
            animationEnabled: true,
            theme: "light2",
            title:{
                text: "Site Traffic"
            },
            axisX:{
                valueFormatString: "H",
                crosshair: {
                    enabled: true,
                    snapToDataPoint: true
                }
            },
            axisY: {
                title: "Nombre des visiteurs",
                crosshair: {
                    enabled: true
                }
            },
            toolTip:{
                shared:true
            },  
            legend:{
                cursor:"pointer",
                verticalAlign: "bottom",
                horizontalAlign: "left",
                dockInsidePlotArea: true,
                itemclick: toogleDataSeries
            },
            data: [{
                type: "line",
                showInLegend: true,
                name: "Aujourd'hui",
                markerType: "square",
                xValueFormatString: "H",
                color: "#F08080",
                dataPoints: [
                    { x: 0, y: 650 },
                    // { x: 1, y: 700 },
                    { x: 2, y: 710 },
                    // { x: 3, y: 658 },
                    { x: 4, y: 734 },
                    // { x: 5, y: 963 },
                    { x: 6, y: 847 },
                    // { x: 7, y: 853 },
                    { x: 8, y: 869 },
                    // { x: 9, y: 943 },
                    { x: 10, y: 970 },
                    // { x: 11, y: 869 },
                    { x: 12, y: 890 },
                    // { x: 13, y: 1030 },
                    { x: 14, y: 1020},
                    // { x: 15, y: 1020},
                    { x: 16, y: 1020},
                    // { x: 17, y: 1020},
                    { x: 18, y: 1020},
                    // { x: 19, y: 1020},
                    { x: 20, y: 1020},
                    // { x: 21, y: 1020},
                    { x: 22, y: 1020},
                    // { x: 23, y: 1020},
                ]
            },
            {
                type: "line",
                showInLegend: true,
                name: "Hier",
                lineDashType: "dash",
                dataPoints: [
                    { x: 0, y: 550 },
                    // { x: 1, y: 600 },
                    { x: 2, y: 510 },
                    // { x: 3, y: 558 },
                    { x: 4, y: 634 },
                    // { x: 5, y: 863 },
                    { x: 6, y: 747 },
                    // { x: 7, y: 953 },
                    { x: 8, y: 769 },
                    // { x: 9, y: 843 },
                    { x: 10, y: 870 },
                    // { x: 11, y: 769 },
                    { x: 12, y: 790 },
                    // { x: 13, y: 1030 },
                    { x: 14, y: 920},
                    // { x: 15, y: 920},
                    { x: 16, y: 920},
                    // { x: 17, y: 920},
                    { x: 18, y: 920},
                    // { x: 19, y: 920},
                    { x: 20, y: 920},
                    // { x: 21, y: 920},
                    { x: 22, y: 20},
                    // { x: 23, y: 1020},
                ]
            }]
        });
        chart1.render();

        function toogleDataSeries(e){
            if (typeof(e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
                e.dataSeries.visible = false;
            } else{
                e.dataSeries.visible = true;
            }
            chart1.render();
        }

        }
    </script>
</body>
</html>