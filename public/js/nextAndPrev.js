function calculateOperatingProfit2020(value) {
    var r = document.getElementById('circleChart_1');
    document.getElementById('circleChartValue_1').innerHTML = value + "%"
    r.style.setProperty('--value', value);
}
function calculateOperatingProfit2021(value) {
    var r = document.getElementById('circleChart_2')
    document.getElementById('circleChartValue_2').innerHTML = value + "%"
    r.style.setProperty('--value', value);
}


var divcount = 1;
function nextPage() {
    if (divcount < 5) {
        jQuery("#page_" + divcount).hide();
        document.getElementById("navbar_" + divcount).style.borderBottom =
            "0px solid black";

        jQuery("#page_" + (divcount + 1)).show();
        document.getElementById("navbar_" + (divcount + 1)).style.borderBottom =
            "5px solid black";
        $("html, body").animate({ scrollTop: 0 }, "fast");
        divcount++;
    } else {
        Swal.fire(
            "Oops!",
            'This is the Last Page. You can"t go Further!',
            "error"
        );
    }
}
function previousPage() {
    if (divcount != 1) {
        jQuery("#page_" + divcount).hide();
        document.getElementById("navbar_" + divcount).style.borderBottom =
            "0px solid black";
        jQuery("#page_" + (divcount - 1)).show();
        document.getElementById("navbar_" + (divcount - 1)).style.borderBottom =
            "5px solid black";
        $("html, body").animate({ scrollTop: 0 }, "fast");
        divcount--;
    } else {
        Swal.fire("Oops!", 'This is the First Page. You can"t go back!', "error");
    }
}

var chartColors = {
    red: 'rgb(255, 99, 132)',
    orange: 'rgb(255, 159, 64)',
    yellow: 'rgb(255, 205, 86)',
    green: 'rgb(75, 192, 192)',
    blue: 'rgb(54, 162, 235)',
    purple: 'rgb(153, 102, 255)',
    grey: 'rgb(231,233,237)'
};

var MONTHS = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
var config = {
    type: 'line',
    data: {
        labels: ["January", "February", "March", "April", "May", "June", "July"],
        datasets: [{
            label: "Operating Profit 2021",
            backgroundColor: chartColors.red,
            borderColor: chartColors.red,
            data: [
                10,
                15,
                5,
                19,
                45,
                19,
                34
            ],
            fill: false,
        }, {
            label: "Operating Profit 2020",
            fill: false,
            backgroundColor: chartColors.blue,
            borderColor: chartColors.blue,
            data: [
                19,
                29,
                39,
                20,
                60,
                20,
                51
            ],
        }]
    },
    options: {
        responsive: true,
        title: {
            display: true,
            text: 'Chart.js Line Chart'
        },
        tooltips: {
            mode: 'label',
        },
        hover: {
            mode: 'nearest',
            intersect: true
        },
        scales: {
            xAxes: [{
                display: true,
                scaleLabel: {
                    display: true,
                    labelString: 'Month'
                }
            }],
            yAxes: [{
                display: true,
                scaleLabel: {
                    display: true,
                    labelString: 'Value'
                }
            }]
        }
    }
};


var ctx = document.getElementById("chartJSContainer").getContext("2d");
window.myLine = new Chart(ctx, config);

