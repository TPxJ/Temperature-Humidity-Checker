const xValues = ["Now","1 min ago","2 min ago","3 min ago","4 min ago"];
const yValues = [30,27,33,27,34,9,10,11,14,14,15];

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
    legend: {display: false},
    scales: {
      yAxes: [{ticks: {min: -30, max:50}}],
    }
  }
});