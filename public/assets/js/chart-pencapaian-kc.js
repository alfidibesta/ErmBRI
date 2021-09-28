$(function (){
    if ($("#pencapaianKcChart").length) {
        var stackedbarChartCanvas = $("#pencapaianKcChart")
            .get(0)
            .getContext("2d");
        var stackedbarChart = new Chart(stackedbarChartCanvas, {
            type: "bar",
            data: {
                labels: ["user", "trx", "fbi", "casa", "agen bep", "pertu. agen", "bumndes", "inclusion", "reff simp", "reff pinj", "activ mobile", "edc activ", "bss"],
                datasets: [
                    {
                        label: "Target",
                        backgroundColor: ChartColor[0],
                        borderColor: ChartColor[0],
                        borderWidth: 1,
                        data: [55, 45, 44, 54, 38, 40, 50]
                    },
                    {
                        label: "Pencapaian",
                        backgroundColor: ChartColor[1],
                        borderColor: ChartColor[1],
                        borderWidth: 1,
                        data: [34, 20, 54, 34, 65, 40, 35]
                    },
                    {
                        label: "Rasio",
                        backgroundColor: ChartColor[2],
                        borderColor: ChartColor[2],
                        borderWidth: 1,
                        data: [34, 20, 54, 34, 65, 40, 35]
                    }
                ]
            },
            options: {
                responsive: true,
                maintainAspectRatio: true,
                legend: false,
                categoryPercentage: 0.5,
                stacked: true,
                layout: {
                    padding: {
                        left: 0,
                        right: 0,
                        top: 0,
                        bottom: 0
                    }
                },
                scales: {
                    xAxes: [
                        {
                            display: true,
                            scaleLabel: {
                                display: false,
                                labelString: "User by time",
                                fontColor: chartFontcolor,
                                fontSize: 12,
                                lineHeight: 2
                            },
                            ticks: {
                                fontColor: chartFontcolor,
                                stepSize: 1,
                                min: 0,
                                max: 100,
                                autoSkip: false,
                                autoSkipPadding: 10,
                                maxRotation: 60,
                                maxTicksLimit: 30
                            },
                            gridLines: {
                                display: false,
                                drawBorder: false,
                                color: chartGridLineColor,
                                zeroLineColor: chartGridLineColor
                            }
                        }
                    ],
                    yAxes: [
                        {
                            display: true,
                            scaleLabel: {
                                display: false,
                                labelString: "Number of users",
                                fontColor: chartFontcolor,
                                fontSize: 12,
                                lineHeight: 2
                            },
                            ticks: {
                                fontColor: chartFontcolor,
                                stepSize: 10,
                                min: 0,
                                max: 120,
                                autoSkip: true,
                                autoSkipPadding: 15,
                                maxRotation: 0,
                                maxTicksLimit: 10
                            },
                            gridLines: {
                                drawBorder: false,
                                color: chartGridLineColor,
                                zeroLineColor: chartGridLineColor
                            }
                        }
                    ]
                },
                legend: {
                    display: false
                },
                legendCallback: function (chart) {
                    var text = [];
                    text.push('<div class="chartjs-legend"><ul>');
                    for (var i = 0; i < chart.data.datasets.length; i++) {
                        console.log(chart.data.datasets[i]); // see what's inside the obj.
                        text.push("<li>");
                        text.push(
                            '<span style="background-color:' +
                            chart.data.datasets[i].backgroundColor +
                            '">' +
                            "</span>"
                        );
                        text.push(chart.data.datasets[i].label);
                        text.push("</li>");
                    }
                    text.push("</ul></div>");
                    return text.join("");
                },
                elements: {
                    point: {
                        radius: 0
                    }
                }
            }
        });
        document.getElementById(
            "stacked-bar-traffic-legend"
        ).innerHTML = stackedbarChart.generateLegend();
    }
    
});
$(document).ready(function () {
    $('#dtBasicExample').DataTable({
      "paging": true // false to disable pagination (or any other option)
    });
    $('.dataTables_length').addClass('bs-select');
  });