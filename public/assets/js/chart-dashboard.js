$(function() {
    /* ChartJS */

    "use strict";
    // 3stacked
    if ($("#3stackedbarChart").length) {
        var stackedbarChartCanvas = $("#3stackedbarChart")
            .get(0)
            .getContext("2d");
        var stackedbarChart = new Chart(stackedbarChartCanvas, {
            type: "bar",
            data: {
                labels: [
                    "user",
                    "trx",
                    "fbi",
                    "casa",
                    "agen bep",
                    "pertu. agen",
                    "bumndes",
                    "inclusion",
                    "reff simp",
                    "reff pinj",
                    "activ mobile",
                    "edc activ",
                    "bss"
                ],
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
                legendCallback: function(chart) {
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
    // 3stacked
    if ($("#grafik-area-chart").length) {
        var lineChartCanvas = $("#grafik-area-chart")
            .get(0)
            .getContext("2d");
        var data = {
            labels: [
                "Januari",
                "Febuari",
                "Maret",
                "April",
                "Mei",
                "Juni",
                "Juli",
                "Agustus"
            ],
            datasets: [
                {
                    label: "Pencapaian",
                    data: [
                        86.17,
                        88.42,
                        91.12,
                        92.08,
                        93.55,
                        99.54,
                        100.34,
                        103.24
                    ],
                    backgroundColor: "#19d895",
                    borderColor: "#3369b5",
                    borderWidth: 2,
                    fill: true
                }
            ]
        };
        var options = {
            responsive: true,
            maintainAspectRatio: true,
            scales: {
                yAxes: [
                    {
                        gridLines: {
                            color: "#F2F6F9"
                        },
                        ticks: {
                            beginAtZero: true,
                            min: 0,
                            max: 120,
                            stepSize: 10
                        }
                    }
                ],
                xAxes: [
                    {
                        gridLines: {
                            color: "#F2F6F9"
                        },
                        ticks: {
                            beginAtZero: true
                        }
                    }
                ]
            },
            legend: {
                display: false
            },
            elements: {
                point: {
                    radius: 2
                }
            },
            layout: {
                padding: {
                    left: 0,
                    right: 0,
                    top: 0,
                    bottom: 0
                }
            },
            stepsize: 1
        };
        var lineChart = new Chart(lineChartCanvas, {
            type: "line",
            data: data,
            options: options
        });
    }
    if ($("#UsersDoughnutChart").length) {
        var doughnutChartCanvas = $("#UsersDoughnutChart")
            .get(0)
            .getContext("2d");
        var doughnutPieData = {
            datasets: [
                {
                    data: [80, 34, 100],
                    backgroundColor: [
                        successColor,
                        primaryColor,
                        secondaryColor
                    ],
                    borderColor: [successColor, primaryColor, secondaryColor]
                }
            ],
            labels: ["Request", "Email"]
        };
        var doughnutPieOptions = {
            cutoutPercentage: 70,
            animationEasing: "easeOutBounce",
            animateRotate: true,
            animateScale: false,
            responsive: true,
            maintainAspectRatio: true,
            showScale: true,
            legend: {
                display: false
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
        var doughnutChart = new Chart(doughnutChartCanvas, {
            type: "doughnut",
            data: doughnutPieData,
            options: doughnutPieOptions
        });
    }
    if ($("#dashboard-area-chart").length) {
        var lineChartCanvas = $("#dashboard-area-chart")
            .get(0)
            .getContext("2d");
        var data = {
            labels: [
                "Januari",
                "Febuari",
                "Maret",
                "April",
                "Mei",
                "Juni",
                "Juli",
                "Agustus"
            ],
            datasets: [
                {
                    label: "Target UKO",
                    data: [
                        100,
                        100, 
                        100, 
                        100,
                        100,
                        100,
                        99.86,
                        99.97],
                    backgroundColor: "#19d895",
                    borderColor: "#58d8a3",
                    borderWidth: 2,
                    fill: false
                },
                {
                    label: "Target BriLink",
                    data: [
                        99.82,99.84,99.77,99.76,99.78,99.73,99.8,99.88
                    ],
                    backgroundColor: "#5e50f9",
                    borderColor: "#6610f2",
                    borderWidth: 2,
                    fill: false
                },
                {
                    label: "Target Merchant",
                    data: [
                        98.52,
                        99.02,
                        98.57,
                        98.06,
                        97.77,
                        98.66,
                        98.66,
                        98.81
                    ],
                    backgroundColor: "#ffaf00",
                    borderColor: "#f6e84e",
                    borderWidth: 2,
                    fill: false
                }
            ]
        };
        var options = {
            responsive: true,
            maintainAspectRatio: true,
            scales: {
                yAxes: [
                    {
                        gridLines: {
                            color: "#F2F6F9"
                        },
                        ticks: {
                            beginAtZero: true,
                            min: 97,
                            max: 100.5,
                            stepSize: 0.5
                        }
                    }
                ],
                xAxes: [
                    {
                        gridLines: {
                            color: "#F2F6F9"
                        },
                        ticks: {
                            beginAtZero: false
                        }
                    }
                ]
            },
            legend: {
                display: true
            },
            elements: {
                point: {
                    radius: 2
                }
            },
            layout: {
                padding: {
                    left: 0,
                    right: 0,
                    top: 0,
                    bottom: 0
                }
            },
            stepsize: 0.5
        };
        var lineChart = new Chart(lineChartCanvas, {
            type: "line",
            data: data,
            options: options
        });
    }
    if ($("#dasboard-barChart").length) {
        var stackedbarChartCanvas = $("#dasboard-barChart")
            .get(0)
            .getContext("2d");
        var stackedbarChart = new Chart(stackedbarChartCanvas, {
            type: "bar",
            data: {
                labels: [
                    "Merchant",
                    "BRILink",
                    "UKO"
                ],
                datasets: [
                    {
                        label: "Implementasi",
                        backgroundColor: ChartColor[0],
                        borderColor: ChartColor[0],
                        borderWidth: 1,
                        data: [55, 45, 44, 54, 38, 40, 50]
                    },
                    {
                        label: "Penghapusan",
                        backgroundColor: ChartColor[1],
                        borderColor: ChartColor[1],
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
                legendCallback: function(chart) {
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
