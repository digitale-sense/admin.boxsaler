<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BoxSaler</title>
</head>
<body>
    <script src="assets/js/jquery.canvasjs.min.js"></script>
    <script src="assets/js/canvasjs.min.js"></script>
    <script src="assets/js/canvasjs.react.js"></script>
    <script> 
        var semaine = document.querySelector(".mois"); 
        semaine.onclick = function () {

        var chart = new CanvasJS.Chart("chartContainerMois", {
            animationEnabled: true,
            theme: "light2",
            title:{
                text: "Site Traffic"
            },
            axisX:{
                valueFormatString: "",
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
                xValueFormatString: "DD MMM, YYYY",
                color: "#F08080",
                dataPoints: [
                    { x: new Date(2018, 2, 3), y: 650 },
                    { x: new Date(2018, 2, 10), y: 700 },
                    { x: new Date(2018, 2, 17), y: 710 },
                    { x: new Date(2018, 2, 24), y: 658 },
                    { x: new Date(2018, 2, 31), y: 734 },
                ]
            },
            {
                type: "line",
                showInLegend: true,
                name: "Hier",
                lineDashType: "dash",
                dataPoints: [
                    { x: new Date(2018, 2, 3), y: 510 },
                    { x: new Date(2018, 2, 10), y: 560 },
                    { x: new Date(2018, 2, 17), y: 540 },
                    { x: new Date(2018, 2, 24), y: 558 },
                    { x: new Date(2018, 2, 31), y: 544 },
                ]
            }]
        });
        chart.render();

        function toogleDataSeries(e){
            if (typeof(e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
                e.dataSeries.visible = false;
            } else{
                e.dataSeries.visible = true;
            }
            chart.render();
        }

        }
    </script>
</body>
</html>