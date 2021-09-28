$(function () {

    "use strict";
    if ($("#produkChart").length) {
        var produkChartCanvas = $("#produkChart")
            .get(0)
            .getContext("2d");
        var produkPieData = {
            datasets: [
                {
                    data: [20, 20, 20],
                    backgroundColor: [
                        ChartColor[0],
                        ChartColor[1],
                        ChartColor[2]
                    ],
                    borderColor: [ChartColor[0], ChartColor[1], ChartColor[2]]
                }
            ],

            // These labels appear in the legend and in the tooltips when hovering different arcs
            labels: ["Total", "Pencapaian", "Rasio"]
        };
        var produkPieOptions = {
            cutoutPercentage: 75,
            animationEasing: "easeOutBounce",
            animateRotate: true,
            animateScale: false,
            responsive: true,
            maintainAspectRatio: true,
            showScale: true,
            legend: false,
            legendCallback: function (chart) {
                var text = [];
                text.push('<div class="chartjs-legend"><ul>');
                for (var i = 0; i < chart.data.datasets[0].data.length; i++) {
                    text.push(
                        '<li><span style="background-color:' +
                        chart.data.datasets[0].backgroundColor[i] +
                        '">'
                    );
                    text.push("</span>");
                    if (chart.data.labels[i]) {
                        text.push(chart.data.labels[i]);
                    }
                    text.push("</li>");
                }
                text.push("</div></ul>");
                return text.join("");
            },
            layout: {
                padding: {
                    left: 0,
                    right: 0,
                    top: 0,
                    bottom: 0
                }
            }
        };
        var produkChart = new Chart(produkChartCanvas, {
            type: "doughnut",
            data: produkPieData,
            options: produkPieOptions
        });
        document.getElementById(
            "produk-chart-legend"
        ).innerHTML = produkChart.generateLegend();
    }

});