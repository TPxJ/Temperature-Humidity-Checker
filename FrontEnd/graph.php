<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Graph Page</title>
    <script
        src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js">
    </script>
    <link rel="stylesheet" href="index.css">
</head>

<body>
    <?php include("data.php") ?>;
    <center>
        <canvas id="myChart" style="width:100%;max-width:700px"></canvas>
    </center>

    <script>
        const xValues = ["Now", "1 min ago", "2 min ago", "3 min ago", "4 min ago"];
        const yValues = [
            <?php foreach ($lastTemp as $i) {echo $i["temp"] . ",";}?>];

        new Chart("myChart", {
            type: "line",
            data: {
                labels: xValues,
                datasets: [{
                    fill: false,
                    lineTension: 0,
                    backgroundColor: "rgba(255,165,0,1.0)",
                    borderColor: "rgba(255,165,0,0.1)",
                    data: yValues
                }]
            },
            options: {
                legend: {
                    display: false
                },
                scales: {
                    yAxes: [{
                        ticks: {
                            min: 29,
                            max: 35
                        }
                    }],
                }
            }
        });
    </script>
</body>

</html>